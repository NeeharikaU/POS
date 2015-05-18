<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @author camaria
 * 
 * @ORM\Entity
 * @ORM\Table(name="customer")
 */
class Customer extends Person
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
	 * @ORM\Column(name="taxable", type="boolean")
	 */
	protected $taxable;
	
	/**
	 *
	 * @var boolean
	 * @ORM\Column(name="deleted", type="boolean")
	 */
	protected $deleted;
	
	public function __construct()
	{
		parent::__construct();
		$this->deleted = 0;
	}
	
	public function getID()
	{
		return $this->id;
	}
	
	public function isTaxable()
	{
		return $this->taxable;
	}
	
	public function setTaxable($taxable)
	{
		$this->taxable = $taxable;
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
	
}
