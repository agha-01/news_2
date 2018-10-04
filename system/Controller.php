<?php 
class Controller{
	public static $view;
	public static $db;
	public function __construct(){
		self::$view = new Viewer();
		session_start();
		self::$db = new Model();
	}
}

?>