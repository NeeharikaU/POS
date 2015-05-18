<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @author camaria
 *
 * @ORM\Entity
 * @ORM\Table(name="employee")
 */
class Employee extends Person
{
	/**
	 *
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id;
	
	/**
	 *
	 * @var Integer
	 *
	 * @ORM\Column(name="employeeID", type="integer")
	 */
	protected $employeeID;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="username", type="string", length=30)
	 */
	protected $username;
	
	/**
	 * 
	 * @var string 
	 * @ORM\Column(name="password", type="string")
	 */
	protected $password;
	
	
	/**
	 *
	 * @var string
	 * @ORM\Column(name="firstName", type="string", length=30)
	 */
	protected $firstName;
	
	/**
	 *
	 * @var string
	 * @ORM\Column(name="lastName", type="string", length=30)
	 */
	protected $lastName;
	
	/**
	 *
	 * @var string
	 * @ORM\Column(name="email", type="string", length=255)
	 */
	protected $email;
	
	/**
	 *
	 * @var string
	 * @ORM\Column(name="phoneNumber", type="string", length=30)
	 */
	protected $phoneNumber;
	
	/**
	 *
	 * @var boolean
	 * @ORM\Column(name="deleted", type="boolean")
	 */
	protected $deleted;
	
	public function __construct()
	{
		parent::__construct();
		$this->deleted = false;
	}
	
	/**
	 * @return integer
	 */
	public function getID()
	{
		return $this->id;
	}
	
	/**
	 * 
	 * @return number
	 */
	public function getEmployeeID()
	{
		return $this->employeeID;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	
	/**
	 * 
	 * @param string $password
	 * @return boolean
	 */
	public function matchPassword($password)
	{
		if ($this->password === $password) {
			return true;
		}
		return false;
	}
	
	public function getLastName()
	{
		return $this->lastName;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	

	public function isDeleted()
	{
		return $this->deleted;
	}
}