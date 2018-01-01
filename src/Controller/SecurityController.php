<?php

namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;


use App\Form\LoginForm;

class SecurityController extends Controller
{

    /**
     * @Route("/login", name="security_login")
     *
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils) {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render(
            'authentications/login_explicit.php.twig',
            array(
                'error' => $error,
                'username' => $lastUsername,
            )
        );

    /**
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
    */

    }


    /**
     * @Route("/logout", name="security_logout")
     *
     */
    public function logoutAction() {

    }



}