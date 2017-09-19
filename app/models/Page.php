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
	public $page_contents_id;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
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
	private function setCreatedAt($created_at)
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
	private function setUpdatedAt($updated_at)
	{
		$this->updated_at = $updated_at;
	}

	/**
	 * @return mixed
	 */
	public function getPageContentsId()
	{
		return $this->page_contents_id;
	}

	/**
	 * @param mixed $page_contents_id
	 */
	public function setPageContentsId($page_contents_id)
	{
		$this->page_contents_id = $page_contents_id;
	}


	/**
	 * @return void
	 */
	public function save()
	{

		$SQL
			= "INSERT INTO pages (slug, nicename, page_contents_id, created_at) 
				VALUES (:slug, :nicename, :page_contents_id, :created_at)";

		$stmt = $this->db->prepare($SQL);
		$stmt->execute(
			[
				':slug'             => $this->slug,
				':nicename'         => $this->nicename,
				':page_contents_id' => $this->page_contents_id ?? null,
				':created_at'       => date("Y-m-d H:i:s", time()),
			]
		);

	}

	/**
	 * @param String $slug
	 *
	 * @return mixed
	 */
	public function getPageBySlug(String $slug)
	{
		$SQL = 'SELECT * FROM pages WHERE slug = :slug';
		$stmt = $this->db->prepare($SQL);
		$stmt->execute(
			[":slug" => $slug]
		);

		$res = $stmt->fetchObject(Page::class);
		return $res;
	}

	/**
	 * @return array
	 */
	public function getAll()
	{
		$SQL = 'SELECT * FROM pages';
		$stmt = $this->db->prepare($SQL);
		$stmt->execute();

		$res = $stmt->fetchAll(\PDO::FETCH_CLASS, Page::class);
		return $res;
	}


}