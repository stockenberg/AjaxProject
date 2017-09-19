<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 19.09.17
 * Time: 12:27
 */

namespace app;


use app\helpers\GETValidator;
use app\models\Page;
use app\models\PageContent;

class App
{
	/**
	 * @var array $pages
	 */
	public $pages;
	/**
	 * @var PageContent $content
	 */
	public $content;


	public function boot()
	{
		$this->pages = (new Page())->getAll();

		$validate = new GETValidator($_GET['p'] ?? "", PAGES);
		$currentPage = $validate->getValidatedPage();

		$page = new Page();

		/**
		 * @var Page $pageObj
		 */
		$pageObj = $page->getPageBySlug($currentPage);

		$pageContentId = $pageObj->getPageContentsId();

		$pageContent = new PageContent();
		$this->content = $pageContent->getById($pageContentId);


		switch ($currentPage){
			case 'home':

				break;

			case '404':

				break;

			default:

				break;
		}
	}

}