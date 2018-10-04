<?php 
class pageController extends Controller{
	public function __construct(){
		Controller::__construct();
	}
	public function home($lng,$str = null){
		Controller::$view->view('home',$lng,$str);
	}
	public function olke($lng){
		Controller::$view->view('olke',$lng);
	}
	public function siyaset($lng){
		Controller::$view->view('siyaset',$lng);
	}
	public function kriminal($lng){
		Controller::$view->view('kriminal',$lng);
	}
	public function sou_biznes($lng){
		Controller::$view->view('sou_biznes',$lng);
	}
	public function Idman($lng){
		Controller::$view->view('Idman',$lng);
	}
	public function maraqli($lng){
		Controller::$view->view('maraqli',$lng);
	}
	public function login($lng){
		Controller::$view->view('login',$lng);
	}
	public function register($lng){
		Controller::$view->view('register',$lng);
	}
	public function add_login($lng){
		Controller::$view->view('add_login',$lng);
	}
	public function add_register($lng){
		Controller::$view->view('add_register',$lng);
	}
	public function single($lng,$str){
		Controller::$view->view('single',$lng,$str);
	}
	public function exitt($lng){
		Controller::$view->view('exitt',$lng);
	}
	public function search($lng,$str=null){
		Controller::$view->view('search',$lng,$str);
	}
	public function singles($lng,$str=null){
		Controller::$view->view('singles',$lng,$str);
	}
	public function news($lng){
		Controller::$view->view('news',$lng);
	}

	public function like(){
		Controller::$view->view('like');
	}
	
	public function existsMethod($str){
		if (method_exists($this, $str)) {
			return true;
		}
		else{
			return false;
		}
	}
}


?>