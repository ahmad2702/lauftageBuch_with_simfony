<?php
namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends Controller
{
    private $datum = "";
    private $strecke = "";
    private $zeit = "";

    /**
     * @Route("profile-{name}", name="profile")
     * @Template("profile.php.twig")
     */
    public function profile(EntityManagerInterface $doctrine, $name) {
        $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'DESC']);

        $last= $all[0];
        $first = $all[sizeof($all)-1];

        return ['lines' => $all, 'profileName' => $name, 'first'=> $first, 'last' => $last, 'datum' => $this->datum, 'strecke' => $this->strecke, 'zeit' => $this->zeit];
    }

}