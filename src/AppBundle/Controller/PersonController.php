<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PersonController extends Controller
{
    /**
     * @Route("/person/{name}")
     */
    public function numberAction($name)
    {
        
        return $this->render('person/number.html.twig', array(
            'name' => $name,
        ));
    }
}