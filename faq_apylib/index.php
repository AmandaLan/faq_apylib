<?php
session_start();

// Configuration
require_once("system/config.php");

// Database
require_once("system/db.php");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

$page = "home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
	$page = $_GET["page"];
}

$data = array(
	"home" => array("model" => "HomeModel", "view" => "HomeView", "controller" => "HomeController"),
	"login" => array("model" => "LoginModel", "view" => "LoginView", "controller" => "LoginController"),
	"create-account" => array("model" => "CreateAccountModel", "view" => "CreateAccountView", "controller" => "CreateAccountController"),
	"new-topic" => array("model" => "NewTopicModel", "view" => "NewTopicView", "controller" => "NewTopicController"),
	"topics" => array("model" => "TopicsModel", "view" => "TopicsView", "controller" => "TopicsController"),
	"topic-details" => array("model" => "TopicDetailsModel", "view" => "TopicDetailsView", "controller" => "TopicDetailsController"),
);

$find = false;
foreach($data as $key => $components){
	if ($page == $key) {
		$find = true;
		
		$model = $components["model"];
		$view = $components["view"];
		$controller = $components["controller"];

		// Pas besoin d'aller plus loin on sort de la boucle :)
		break;
	}
}

if ($find) {
	require_once(DIR_MODEL.$page.".php");
	require_once(DIR_CONTROLLER.$page.".php");
	require_once(DIR_VIEW.$page.".php");
	$pageModel = new $model($db);
	$pageController = new $controller($pageModel);
	$pageView = new $view($pageController);
	$pageView->render();
}
