<?php

namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Validator\Constraints\DateTime;

class AddController extends Controller
{

    private $error_datum = "";
    private $error_strecke = "";
    private $error_zeit = "";

    private $datum = "";
    private $strecke = "";
    private $zeit = "";

    /**
     * @Route("profil-{name}", name="add_newData")
     * @Template("profile.php.twig")
     */
    public function add(EntityManagerInterface $doctrine, $name, Request $request, ObjectManager $manager) {

        $this->datum = $request->get('datum');
        $this->strecke = $request->get('strecke');
        $this->zeit = $request->get('zeit');


        $this->datum = trim(strip_tags($this->datum));
        $this->strecke = trim(strip_tags($this->strecke));
        $this->zeit = trim(strip_tags($this->zeit));

            if(strtotime($this->datum) == FALSE or strtotime($this->datum)>strtotime(date('Y-m-d').' 00:00:00')){
                $this->error_datum = "Error: Datum leer oder nicht korrekt!";
                $this->datum = "";
            }
            if(is_numeric($this->strecke)==FALSE or $this->strecke<0 or $this->strecke==0){
                $this->error_strecke = "Error: Laufstrecke leer oder nicht korrekt!";
                $this->strecke = "";
            }
            if(strtotime("1970-01-01 ".$this->zeit) == FALSE or strtotime("1970-01-01 ".$this->zeit)<0 or strtotime("1970-01-01 ".$this->zeit) ==0){
                $this->error_zeit = "Error: Laufzeit leer oder nicht korrekt!";
                $this->zeit = "";
            }


        if($this->error_datum=="" and $this->error_strecke == "" and $this->error_zeit == ""){
            //$newData = new TrackerLine($name, new DateTime($this->datum), $this->strecke, strtotime("1970-01-01 ".$this->zeit));
            $newData = new TrackerLine();
            $newData->setUsername($name);
            $newData->setDay(new \DateTime($this->datum));
            $newData->setStrecke($this->strecke);
            $newData->setZeit(strtotime("1970-01-01 ".$this->zeit));

            $manager->persist($newData);

            $manager->flush();

            $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'DESC']);
            return $this->redirect('/profile-'.$name);

        }else{
            $all = $doctrine->getRepository('App:TrackerLine')->findBy(['username' => $name], ['day' => 'DESC']);
            return ['lines' => $all, 'profileName' => $name, 'datum' => $this->datum, 'strecke' => $this->strecke, 'zeit' => $this->zeit];
        }


    }


    /**
     * @Route("profiler-{name}", name="remove_newData")
     * @Template("profile.php.twig")
     */
    public function remove(EntityManagerInterface $doctrine, $name, Request $request, ObjectManager $manager) {

        $id = $request->get('id_toRemove');

        $findElement = $doctrine->getRepository('App:TrackerLine')->findOneBy(['id' => $id]);

        $manager->remove($findElement);
        $manager->flush();

        return $this->redirect('/profile-'.$name);

    }



}