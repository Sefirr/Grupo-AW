<?php 
	
	require_once __DIR__ .'/social.php';
	
	$id_friend = $_GET['id'];
	
	deleteFriend($id_friend);
	
	header('Location:'.$_SERVER['HTTP_REFERER']);

?>