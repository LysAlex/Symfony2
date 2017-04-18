<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Link;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request) {
        $user = $this->getUser();
        if ($user instanceof UserInterface) {
            return $this->redirect('tags');
        }

        /** @var AuthenticationException $exception */
        $exception = $this->get('security.authentication_utils')
                ->getLastAuthenticationError();

        return $this->render('login.html.twig', [
                    'error' => $exception ? $exception->getMessage() : NULL,
        ]);
    }

}
