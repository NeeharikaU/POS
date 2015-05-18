<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Address;

class CustomerController extends Controller
{
	/**
	 * @Route("/customer")
	 * @Method("POST")
	 * @param Request $request
	 */
	public function createAction(Request $request)
	{
		$customer = new Customer();
		$firstName = $request->get('firstName');
		$lastName = $request->get('lastName');
		$email = $request->get('email');
		$phone = $request->get('phoneNumber');
		$taxable = $request->get('taxable');
		$street = $request->get('street');
		$street2 = $request->get('street2');
		$city = $request->get('city');
		$state = $request->get('state');
		$zip = $request->get('zip');
		
		$em = $this->getDoctrine()->getEntityManager();
		$customer->setFirstName($firstName);
		$customer->setLastName($lastName);
		$customer->setEmail($email);
		$customer->setPhoneNumber($phone);
		$customer->setTaxable($taxable);
		
		$address = new Address();
		$address->setStreet($street);
		$address->setStreet2($street);
		$address->setCity($city);
		$address->setState($state);
		$address->setZip($zip);
		$address->setCountry('USA');
		$em->persist($address);
		$em->flush($address);
		$customer->setAddress($address);
		$em->persist($customer);
		$em->flush();
		$this->addFlash('success', 'Customer suuccessfully added');
		
		$list = $em->getRepository('AppBundle\Entity\Customer')->findAll();
		return $this->render('default/customer.html.twig', array('Customers' => $list));		
	}
	
	
	/**
	 * @Route("/customer/{id}")
	 * @Method("DELETE")
	 */
	public function deleteAction($id, Request $request)
	{
		return $this->render('default/customer.html.twig');
	}
	
	/**
	 * 
	 * @Route("/customer")
	 * @Method("GET")
	 */
	public function indexAction() 
	{
		$em = $this->getDoctrine()->getEntityManager();
		$customers = $em->getRepository('AppBundle\Entity\Customer')->findAll();
		
		return $this->render('default/customer.html.twig', array('Customers' => $customers));
	}
	
	/**
	 * @Route("/customer/{id}")
	 * @Method("PUT")
	 */
	public function updateAction($id, Request $request)
	{
		return $this->render('default/customer.html.twig');
	}
	
}
