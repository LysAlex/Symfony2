<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Link;
use AppBundle\Entity\entity;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LinkController extends Controller {



    /**
     * @Route("/links", name="links")
     * @Template("links.html.twig")
     */
    public function ShowLinktAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Link');

        $query = $repository->createQueryBuilder('l')
                ->orderBy('l.date', 'ASC')
                ->getQuery();

        $links = $query->getResult();
        return array('links' => $links);
    }

    /**
     * @Route("/newlink", name="addlink")
     * @Template("newLink.html.twig")
     */
    public function addLinkAction(Request $request) {
        $link = new Link();

        $form = $this->createFormBuilder($link)
                ->add('link', TextType::class, array('label' => 'URL'))
                ->add('description', TextType::class, array('label' => 'description'))
                ->add('date', DateType::class, array('data' => new \DateTime(), 'widget' => 'choice'))
                ->add('tags', EntityType::class, array('class' => 'AppBundle:Tag', 'choice_label' => 'nom', 'multiple' => true, 'expanded' => true))
                ->add('save', SubmitType::class, array('label' => 'Ajouter'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $task = $form->getData();

            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($task);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            return $this->redirectToRoute('links');
        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/updates/{id}", name="updates")
     * @Template("formUpdate.html.twig")
     */
    public function updateLinkAction($id, Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Link');
        $link = $repository->find($id);

        $form = $this->createFormBuilder($link)
                ->add('link', TextType::class)
                ->add('description', TextType::class, array('label' => 'description'))
                ->add('date', DateType::class, array('data' => new \DateTime(), 'widget' => 'choice'))
                ->add('tags', EntityType::class, array('class' => 'AppBundle:Tag', 'choice_label' => 'nom', 'multiple' => true, 'expanded' => true))
                ->add('save', SubmitType::class, array('label' => 'Valider'))
                ->getForm();



        $form->handleRequest($request);

        if ($form->isValid()) {
            $task = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('links');
        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/links/{id}", name="deletes")
     * @Template("links.html.twig")
     */
    public function DeleteLinkAction($id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Link');
        $link = $repository->find($id);

        if (!$id) {
            throw $this->createNotFoundException('No id found');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($link);
        $em->flush();

        return $this->redirectToRoute('links');
    }



    /**
     * @Route("/links/order/date/desc", name="order_date_desc")
     * @Template("links.html.twig")
     */
    public function OrderByDateDescAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Link');

        $query = $repository->createQueryBuilder('l')
                ->orderBy('l.date', 'DESC')
                ->getQuery();

        $links = $query->getResult();
        return array('links' => $links);
    }


     /**
     * @Route("/links/order/alph/desc", name="order_link_alph_desc")
     * @Template("links.html.twig")
     */
    public function OrderLinkAlphDescAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Link');

        $query = $repository->createQueryBuilder('l')
                ->orderBy('l.link', 'DESC')
                ->getQuery();

        $links = $query->getResult();
        return array('links' => $links);
    }


}
