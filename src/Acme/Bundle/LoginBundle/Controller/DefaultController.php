<?php

namespace Acme\Bundle\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/signup")
     */
    public function signupAction()
    {
        return $this->render('AcmeBundleLoginBundle:Default:signup.html.twig');
    }
    
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
    	return $this->render('AcmeBundleLoginBundle:Default:login.html.twig');
    }
}
