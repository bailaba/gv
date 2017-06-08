<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcommerceBundle\Entity\Produits;
use EcommerceBundle\Form\TestType;

class TestController extends Controller
{
    
    public function testFormulaireAction()
    {
       $form = $this->createForm(TestType::class);
       
       return $this->render('EcommerceBundle:Default:test.html.twig', array('form'=> $form->createView()));
        //die('ici');
    }
    public function ajoutAction()
    {
        $em= $this->getDoctrine()->getManager();
        /*
        $produit = new Produits();
        $produit->setNom('Chapeau');
        $produit->setDescription("c'est troppp bien");
        $produit->setPrix('10,99');
        $produit->setCategorie('1');
        
        $em->persist($produit);
        $em->flush();
        
        $produit2 = new Produits();
        $produit2->setNom('Melon');
        $produit2->setDescription("okok c'est moi le bosse du game");
        $produit2->setPrix('4,36');
        $produit2->setCategorie('2');
        
        $em->persist($produit2);
        $em->flush();
        
        
                
        
        die('ok ok');*/
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits'=>$produits));
    }
    
   
}
