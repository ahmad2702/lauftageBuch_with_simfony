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

        $user_alex = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => 'alex']);
        $user_jan = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => 'jan']);
        $user_tim = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => 'tim']);



        return [
                'lines' => $users,
                'alex' => $user_alex, 'jan' => $user_jan, 'tim' => $user_tim
            ];
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