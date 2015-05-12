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
     * @Route("/product", name="product")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function productAction()
    {
    	return $this->render('default/products.html.twig', array('products' => array(
    			array(
    			'id' => 1234950305,
    			'name' => "dslkjkffkflsflflf",
    			'category' => '',
    			'quantity' => 7,
    					'price' => 10
    					),
    			array(
    					'id' => 1234950305,
    					'name' => "dslkjkffkflsflflf",
    					'category' => '',
    					'quantity' => 7,
    					'price' => 19
    			)
    	)));
    }
}
