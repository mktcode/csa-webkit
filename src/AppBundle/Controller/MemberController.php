<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/member")
 */
class MemberController extends Controller
{
    /**
     * @Route("/", name="member")
     */
    public function indexAction()
    {
        return $this->render('member/index.html.twig');
    }
}
