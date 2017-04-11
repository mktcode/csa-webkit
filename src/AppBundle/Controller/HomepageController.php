<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('homepage/index.html.twig');
    }

    /**
     * @Route("/{page}", name="page", requirements={"page"=".+"})
     */
    public function pageAction($page)
    {
        $templating = $this->get('templating');

        $template = 'homepage/' . $page . '.html.twig';
        if ($templating->exists($template)) {
            return $this->render($template);
        }

        if ($templating->exists('homepage/404.html.twig')) {
            return $this->render('homepage/404.html.twig', ['page' => $page]);
        }

        return new RedirectResponse($this->generateUrl('homepage'));
    }
}
