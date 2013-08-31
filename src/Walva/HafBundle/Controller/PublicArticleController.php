<?php

namespace Walva\HafBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Walva\HafBundle\Entity\Article;
use Walva\HafBundle\Form\ArticleType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Article controller.
 *
 */
class PublicArticleController extends Controller {

    public function menuAction($nombre) {
        $repository = $this->getDoctrine()->getManager()->getRepository('WalvaHafBundle:Article');
        $entities = $repository->findBy(
                array(), // Pas de critÃ¨re
                array('dateCreation' => 'desc'), // On tri par date dÃ©croissante
                $nombre, // On sÃ©lectionne $nombre articles
                0 // A partir du premier
        );
        return $this->render('WalvaHafBundle:Article:public\menu.html.twig', array(
                    'entities' => $entities
                ));
    }

    /**
     * Lists all Article entities.
     *
     */
    public function indexAction($page = 1, $nombre = 10) {
        $session = new Session();
        $session->start();

        $em = $this->getDoctrine()->getManager();
        $lm = $this->container->get('walva_haf.langue');

        $entities = $em->getRepository('WalvaHafBundle:Article')->findBy(array(), array('dateCreation' => 'DESC'), $nombre, $nombre * ($page - 1 ));

        $qb = $em->createQueryBuilder();
        $qb->select('count(a.id)');
        $qb->from('WalvaHafBundle:Article', 'a');

        $pageCount = ceil($qb->getQuery()->getSingleScalarResult() / $nombre);
        if (($page + 1) > $pageCount)
            $next = false;
        else
            $next = true;

        return $this->render('WalvaHafBundle:Article:public/index.html.twig', array(
                    'entities' => $entities,
                    'page' => $page,
                    'next' => $next,
                ));
    }

    /**
     * Creates a new Article entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Article();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('article_show', array('id' => $entity->getId())));
        }

        return $this->render('WalvaHafBundle:Article:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Creates a form to create a Article entity.
     *
     * @param Article $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Article $entity) {
        $form = $this->createForm(new ArticleType(), $entity, array(
            'action' => $this->generateUrl('article_create'),
            'method' => 'POST',
                ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WalvaHafBundle:Article')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }

        return $this->render('WalvaHafBundle:Article:public/show.html.twig', array(
                    'entity' => $entity,));
    }

}
