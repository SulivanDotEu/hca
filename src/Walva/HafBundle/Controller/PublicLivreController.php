<?php

namespace Walva\HafBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Walva\HafBundle\Entity\Livre;
use Walva\HafBundle\Form\LivreType;

/**
 * Livre controller.
 *
 */
class PublicLivreController extends Controller {

    public function menuAction($nombre) {
        $repository = $this->getDoctrine()->getManager()->getRepository('WalvaHafBundle:Livre');
        $entities = $repository->findBy(
                array(), array('dateCreation' => 'desc'), // On tri par date dÃ©croissante
                $nombre, // On sÃ©lectionne $nombre articles
                0 // A partir du premier
        );
        return $this->render('WalvaHafBundle:Livre:public\menu.html.twig', array(
                    'entities' => $entities
                ));
    }

    /**
     * Lists all Livre entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WalvaHafBundle:Livre')->findAll();

        return $this->render('WalvaHafBundle:Livre:index.html.twig', array(
                    'entities' => $entities,
                ));
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

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WalvaHafBundle:Article:public/show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

}
