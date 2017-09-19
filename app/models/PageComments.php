<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 19.09.17
 * Time: 13:16
 */

namespace app\models;


class PageComments extends Model
{

	public $id;
	public $author;
	public $comment;
	public $created_at;
	public $updated_at;
	public $page_id;

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
	public function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @param mixed $author
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	/**
	 * @return mixed
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * @param mixed $comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
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
	public function getPageId()
	{
		return $this->page_id;
	}

	/**
	 * @param mixed $page_id
	 */
	public function setPageId($page_id)
	{
		$this->page_id = $page_id;
	}



}