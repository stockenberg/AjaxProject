<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 19.09.17
 * Time: 12:32
 */

namespace app\models;


class Page extends Model
{

	public $id;
	public $slug;
	public $nicename;
	public $created_at;
	public $updated_at;
	public $page_contents;

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
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * @param mixed $slug
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

	/**
	 * @return mixed
	 */
	public function getNicename()
	{
		return $this->nicename;
	}

	/**
	 * @param mixed $nicename
	 */
	public function setNicename($nicename)
	{
		$this->nicename = $nicename;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt()
	{
		return $this->created_at;
	}

	/**
	 * @param mixed $created_at
	 */
	public function setCreatedAt($created_at)
	{
		$this->created_at = $created_at;
	}

	/**
	 * @return mixed
	 */
	public function getUpdatedAt()
	{
		return $this->updated_at;
	}

	/**
	 * @param mixed $updated_at
	 */
	public function setUpdatedAt($updated_at)
	{
		$this->updated_at = $updated_at;
	}

	/**
	 * @return mixed
	 */
	public function getPageContents()
	{
		return $this->page_contents;
	}

	/**
	 * @param mixed $page_contents
	 */
	public function setPageContents($page_contents)
	{
		$this->page_contents = $page_contents;
	}



}