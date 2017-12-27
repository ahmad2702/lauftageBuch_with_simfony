<?php
namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class Authentication_Login extends Controller
{

    /**
     * @Route("/login", name="login")
     * @Template("authentications/login.php.twig")
     */
    public function login() {

    }

}