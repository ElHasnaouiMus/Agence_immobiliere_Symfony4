<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PropertyController extends AbstractController{

    /**
     * @Route("/biens", name="property_index")
     */
    public function index() : Response
    {
        return $this->render('property/index.html.twig');
        # code...
    }

}