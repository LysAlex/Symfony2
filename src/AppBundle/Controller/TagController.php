<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Tag;

class TagController extends Controller {


    /**
     * @Route("/tags", name="tags")
     * @Template("tags.html.twig")
     */
    public function showTagAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Tag');

        $query = $repository->createQueryBuilder('t')
                ->orderBy('t.nom', 'ASC')
                ->getQuery();

        $tags = $query->getResult();
        return array('tags' => $tags);
    }


    /**
     * @Route("/newtag", name="addtag")
     * @Template("newTag.html.twig")
     */
    public function addTagAction(Request $request) {

        $tag = new Tag();

        $form = $this->createFormBuilder($tag)
                ->add('nom', TextType::class)
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
            return $this->redirectToRoute('tags');
        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/update/{id}", name="update")
     * @Template("formUpdate.html.twig")
     */
    public function updateTagAction($id, Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Tag');
        $tag = $repository->find($id);

        $form = $this->createFormBuilder($tag)
                ->add('nom', TextType::class)
                ->add('save', SubmitType::class, array('label' => 'Valider'))
                ->getForm();



        $form->handleRequest($request);

        if ($form->isValid()) {
            $task = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('tags');
        }
        return array('form' => $form->createView());
    }

    /**
     * @Route("/delete/{id}", name="delete")
     * @Template("tags.html.twig")
     */
    public function DeleteTagAction($id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Tag');
        $tag = $repository->find($id);

        if (!$id) {
            throw $this->createNotFoundException('No id found');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($tag);
        $em->flush();

        return $this->redirectToRoute('tags');
    }


    /**
     * @Route("/tags/order/desc", name="order_tag_alph_desc")
     * @Template("tags.html.twig")
     */
    public function OrderByAlphDescAction(Request $request) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Tag');

        $query = $repository->createQueryBuilder('t')
                ->orderBy('t.nom', 'DESC')
                ->getQuery();

        $tags = $query->getResult();
        return array('tags' => $tags);
    }

}
