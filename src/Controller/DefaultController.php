<?php
namespace App\Controller;

use App\Entity\TrackerLine;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{


    /**
     * @Route("/", name="start")
     * @Template("gesamt.php.twig")
     */
    public function index(EntityManagerInterface $doctrine) {
        $users = $doctrine->getRepository('App:User')->findAll();

        $data = $doctrine->getRepository('App:TrackerLine')->findAll();

        foreach ($users as $user){

        }




        return ['lines' => $users];
    }





    /**
     * @Route("/a", name="starta")
     * @Template("gesamt.php.twig")
     */
    public function indexa(EntityManagerInterface $doctrine) {
        $all = $doctrine->getRepository('App:TrackerLine')->findBy([], ['day' => 'ASC']);

        $first= $all[0];
        $last = $all[sizeof($all)-1];

        return ['lines' => $all, 'first' => $first, 'last' => $last];
    }

}