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
	
	public function setEmployeeID($employeeID)
	{
		$this->employeeID = $employeeID;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	
	public function setUsername($username)
	{
		$this->username = $username;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
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
	
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	
	public function setPhoneNumber($phone)
	{
		$this->phoneNumber = $phone;
	}

	public function isDeleted()
	{
		return $this->deleted;
	}
	
	public function delete()
	{
		$this->deleted = true;
	}
	
	public function restore()
	{
		$this->deleted = false;
	}
}