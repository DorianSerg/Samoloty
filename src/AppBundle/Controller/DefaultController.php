<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/mirage.html", name="mirage")
    */
    public function  mirageAction()
    {
        return $this->render('default/mirage.html.twig');
    }
    
    /**
     * @Route("/lincoln.html", name="lincoln")
    */
    public function  lincolnAction()
    {
        return $this->render('default/lincoln.html.twig');
    }
    
    /**
     * @Route("/panavia.html", name="panavia")
    */
    public function  panaviaAction()
    {
        return $this->render('default/panavia.html.twig');
    }

     /**
     * @Route("/eurofighter.html", name="eurofighter")
    */
    public function  eurofighterAction()
    {
        return $this->render('default/eurofighter.html.twig');
    }

    /**
     * @Route("/dromader.html", name="dromader")
    */
    public function  dromaderAction()
    {
        return $this->render('default/dromader.html.twig');
    }
}
