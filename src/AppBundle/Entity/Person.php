<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * 
 * @author camaria
 *
 * @ORM\Entity
 * @ORM\Table(name="person")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="personType", type="string")
 * @ORM\DiscriminatorMap({"person" = "Person", "employee" = "Employee", "customer" = "Customer"})
 */
class Person 
{
	/**
	 *
	 * @var integer
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id;
	
	
	
	/**
	 * 
	 * @var Address
	 * @ORM\ManyToMany(targetEntity="Address")
     * @ORM\JoinTable(name="person_address",
     *      joinColumns={@ORM\JoinColumn(name="personID", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="addressID", referencedColumnName="id", unique=true)}
     *      )
	 */
	protected $addresses;
	
	public function __construct()
	{
		$this->addresses = new ArrayCollection();
		
	}
	
	
	public function getID()
	{
		return $this->id;
	}
	
	public function getAddresses()
	{
		return $this->addresses;
	}
	
	public function setAddress($address)
	{
		$this->addresses[] = $address;
	}
}