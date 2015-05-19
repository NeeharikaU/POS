<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Address;
use AppBundle\Entity\Employee;

class EmployeeController extends Controller
{
	/**
	 * @Route("/employee")
	 * @Method("POST")
	 * @param Request $request
	 */
	public function createAction(Request $request)
	{
		$employee = new Employee();
		$firstName = $request->get('firstName');
		$lastName = $request->get('lastName');
		$email = $request->get('email');
		$phone = $request->get('phoneNumber');
		$employeeID = $request->get('employeeID');
		$username = $request->get('username');
		$password = md5($request->get('password'));
		$street = $request->get('street');
		$street2 = $request->get('street2');
		$city = $request->get('city');
		$state = $request->get('state');
		$zip = $request->get('zip');
		
		$em = $this->getDoctrine()->getEntityManager();
		$employee->setFirstName($firstName);
		$employee->setLastName($lastName);
		$employee->setEmail($email);
		$employee->setPhoneNumber($phone);
		$employee->setUsername($username);
		$employee->setPassword($password);
		$employee->setEmployeeID($employeeID);
		
		$address = new Address();
		$address->setStreet($street);
		$address->setStreet2($street);
		$address->setCity($city);
		$address->setState($state);
		$address->setZip($zip);
		$address->setCountry('USA');
		$em->persist($address);
		$em->flush($address);
		$employee->setAddress($address);
		$em->persist($employee);
		$em->flush();
		
		$request->getSession()->getFlashBag()->add('success', 'Employee successfully added.');		
		return new JsonResponse(array('success' => 'Employee successfully added.'));		
	}
	
	
	/**
	 * @Route("/employee/{id}")
	 * @Method("DELETE")
	 */
	public function deleteAction($id, Request $request)
	{
		return $this->render('default/employee.html.twig');
	}
	
	/**
	 * 
	 * @Route("/employee")
	 * @Method("GET")
	 */
	public function indexAction() 
	{
		$em = $this->getDoctrine()->getEntityManager();
		$employees = $em->getRepository('AppBundle\Entity\Employee')->findAll();
		
		return $this->render('default/employee.html.twig', array('Employees' => $employees));
	}
	
	/**
	 * @Route("/employee/{id}")
	 * @Method("PUT")
	 */
	public function updateAction($id, Request $request)
	{
		return $this->render('default/employee.html.twig');
	}
	
}
