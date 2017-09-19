<?php

namespace app\helpers;

use app\models\Page;

class GETValidator
{

	public $page;
	public $defaultPage = 'home';
	public $errorPage = '404';
	public $path;

	public function __construct(String $getParam, String $path) {
		$this->page = $getParam;
		$this->path = $path;
	}

	public function getValidatedPage(): String
	{

		if ($this->page !== '') {

			$page = new Page();

			/**
			 * @var Page $result
			 */
			$result = $page->getPageBySlug($this->page);


			if(!empty($result)){
				return $result->getSlug();
			}

			return $this->errorPage;

		}

		return $this->defaultPage;

	}

}
