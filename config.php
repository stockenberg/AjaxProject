<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 20.06.17
 * Time: 17:03
 */

/**
 * Common paths
 */
define('BASE_PATH', __DIR__."/");
define('PAGES', __DIR__ . '/pages/');
define('APP', __DIR__ . '/app/');
define('API', __DIR__ . '/api/');

/**
 * DB Environment
 */
define('DSN', 'mysql:host=localhost;dbname=ajax_projects;charset=utf8');
define('DBUSER', 'root');
define('DBPASS', 'admin');

/**
 * Rights Definition
 */
define('ADMIN', 1);
define('AUTHOR', 2);
define('USER', 3);