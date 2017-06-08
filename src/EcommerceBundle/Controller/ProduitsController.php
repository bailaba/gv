<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }
    
    public function produitsAction()
    {
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig');
    }
    
    public function produitAction($id)
    {
        return $this->render('EcommerceBundle:Default:produits/layout/produit.html.twig', array ('id' => $id));
    }
}
