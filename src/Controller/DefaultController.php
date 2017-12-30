<?php
namespace App\Controller;

use App\Entity\TrackerLine;
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
        $all = $doctrine->getRepository('App:TrackerLine')->findBy([], ['day' => 'ASC']);

        $first= $all[0];
        $last = $all[sizeof($all)-1];

        return ['lines' => $all, 'first' => $first, 'last' => $last];
    }

}