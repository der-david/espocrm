<?php

namespace Espo\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="users")
 */
class User
{
	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $username;
	
	protected $password;
	
	protected $isAdmin;

	public function __construct()
	{
	}

	public function getId()
	{
		return $this->id;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getPassword()
    {
        return $this->password;
    }

	public function isAdmin()
	{
		return $this->isAdmin;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	
	
}
