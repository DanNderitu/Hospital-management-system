<?php 


class Config{

	

	const DB_HOST = "localhost"; 
	const DB_NAME = "hospital"; 
	const DB_USER = "root"; 
	const DB_PASSWORD = ""; 


	

	const SYSTEM_NAME = "St Andrews Kabare Dispensary System";
	const SLOGAN = "St Andrews Kabare Dispensary System"; 


	
	public static function redir($page){
		header("Location: $page"); 
	}

	public static function includeD(){

	}


	public static function getMonth(){
		
		return 2419200;
	}


	public static function getWeek(){
		
		return 604800;
	}



}