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
    
    /**
     * @Route("/douglas.html", name="douglas")
    */
    public function  douglasAction()
    {
        return $this->render('default/douglas.html.twig');
    }

    /**
     * @Route("/A320.html", name="A320")
    */
    public function  A320Action()
    {
        return $this->render('default/A320.html.twig');
    }
    
    /**
     * @Route("/boeing737.html", name="boeing737")
    */
    public function  boeing737Action()
    {
        return $this->render('default/boeing737.html.twig');
    }
}
