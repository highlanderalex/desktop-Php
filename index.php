<?php
	require_once('controllers/postController.php');
	
	$posts = new postController();
	$result = $posts->getLast();
	require_once('resources/templates/index.php');
?>