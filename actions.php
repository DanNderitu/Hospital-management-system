<?php 

require_once "importance.php"; 

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if(isset($_POST['action'])){
	$action = $_POST['action'];
}

if($action == "remove-doc"){
	$doc = $_GET['token'];
	Doctor::delete($doc);
	Config::redir("doctors-record.php?message=Doctor removed"); 
}

