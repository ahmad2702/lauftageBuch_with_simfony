<?php
namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends Controller
{

    /**
     * @Route("profile-{name}", name="profile")
     * @Template("profile.php.twig")
     */
    public function profile(EntityManagerInterface $doctrine, $name) {
        $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'ASC']);

        //$first= $all[0];
        //$last = $all[sizeof($all)-1];

        return ['lines' => $all, 'profileName' => $name];
    }

}