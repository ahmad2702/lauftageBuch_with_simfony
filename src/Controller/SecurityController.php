<?php

namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use App\Form\LoginForm;

class SecurityController extends Controller
{

    /**
     * @Route("/login", name="security_login")
     *
     */
    public function loginAction() {

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        //Login Form
        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername,
        ]);



        return $this->render(
            'authentications/login.php.twig',
            array(
                'form'          => $form->createView(),
                'error'         => $error,
            )
        );

    }



}