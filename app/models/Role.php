<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 19.09.17
 * Time: 13:14
 */

namespace app\models;


class Role extends Model
{

	public $id;
	public $name;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}



}