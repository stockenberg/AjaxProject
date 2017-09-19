<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 19.09.17
 * Time: 12:04
 */

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/vendor/autoload.php";

$app = new \app\App();
$app->boot();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<header>
    <nav>
        <?php
		/**
		 * @var \app\models\Page $page
		 */
        foreach ($app->pages as $index => $page) : ?>

            <a href="?p=<?= $page->getSlug() ?>">
                <?= $page->getNicename() ?>
            </a>

        <?php endforeach; ?>
    </nav>
</header>

<h1><?= $app->content->getHeadline() ?></h1>

<p><?= $app->content->getContent() ?></p>

</body>
</html>



