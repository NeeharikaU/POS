<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @author camaria
 *
 * @ORM\Entity
 * @ORM\Table(name="address")
 */
class Address
{
	/**
	 * 
	 * @var int
	 * 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="street", type="string")
	 */
	protected $street;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="street2", type="string")
	 */
	protected $street2;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="city", type="string", length=100)
	 */
	protected $city;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="state", type="string", length=2)
	 */
	protected $state;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="zip", type="string", length=20)
	 */
	protected $zip;
	
	/**
	 * 
	 * @var string 
	 * 
	 * @ORM\Column(name="country", type="string", length=100)
	 */
	protected $country;
	
	public function getID()
	{
		return $this->id;
	}
	
	public function getStreet()
	{
		return $this->street;
	}
	
	public function setStreet($street)
	{
		$this->street = $street;
	}
	
	public function getStreet2()
	{
		return $this->street2;
	}
	
	public function setStreet2($street)
	{
		$this->street2 = $street;
	}
	
	public function getCity()
	{
		return $this->city;
	}
	
	public function setCity($city)
	{
		$this->city = $city;
	}
	
	public function getState()
	{
		return $this->state;
	}
	
	public function setState($state)
	{
		$this->state = $state;
	}
	
	public function getZip()
	{
		return $this->zip;
	}
	
	public function setZip($zip)
	{
		$this->zip = $zip;
	}
	
	public function getCountry()
	{
		return $this->country;
	}
	
	public function setCountry($country)
	{
		$this->country = $country;
	}
}

