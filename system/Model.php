<?php 

class Model{
	public $host="localhost";
	public $username="root";
	private $password="";
	public $dbname="dashboard";
	public $conn;
	public $nSelect;
	public function GetPass(){
		return $this->password;
	}
	public function __construct(){
			$this->conn=mysqli_connect($this->host,$this->username,$this->GetPass(),$this->dbname);
			if ($this->conn) {
				mysqli_set_charset($this->conn,"utf8");
				// echo "success";
			}
			else{

				echo "db error";
			}
		
	}
	public $uInsert;
	public function uInsert($name,$lname,$email,$pass,$gender){
		$this->uInsert=mysqli_query($this->conn,"INSERT INTO `users`(`name`, `lname`, `email`, `pass`, `gender`) VALUES ('$name','$lname','$email','$pass','$gender')");
		return $this->uInsert;
	}
	public $uSelect;
	public function uSelect($email){
		$this->uSelect=mysqli_query($this->conn,"SELECT * FROM users WHERE email='$email'");
		return $this->uSelect;
	}
	public $Select;
	public function Select($strr){
		$this->Select=mysqli_query($this->conn,"SELECT * FROM ".$strr."");
		return $this->Select;
	}
	public $elaveSelect;
	public function elaveSelect(){
		$this->elaveSelect=mysqli_query($this->conn,"SELECT * FROM elavenews ORDER BY id DESC LIMIT 5");
		return $this->elaveSelect;
	}
	public $sliderSelect;
	public function sliderSelect($lng){
		$this->sliderSelect=mysqli_query($this->conn,"SELECT * FROM slidernews WHERE  lng='$lng' ORDER BY id DESC");
		return $this->sliderSelect;
	}
	public $updateSliderNews;
	public function updateSliderNews($id,$count){
		$this->updateSliderNews=mysqli_query($this->conn,"UPDATE `slidernews` SET `baxis`='$count' WHERE id = '$id'");
		$this->updateSliderNews=mysqli_query($this->conn,"UPDATE `slidernews` SET `baxis`='$count' WHERE n_id = '$id'");
		return $this->updateSliderNews;
	}
	public $strSelect;
	public function strSelect($id){
		$this->strSelect=mysqli_query($this->conn,"SELECT * FROM news WHERE id='$id'");
		return $this->strSelect;
	}

	public $kateSelect;
	public function kateSelect($lng="az"){
		$this->kateSelect=mysqli_query($this->conn,"SELECT * FROM kateqoriya WHERE lng='".$lng."'");
		return $this->kateSelect;
	}
	public $newslimitSelect;
	public function newslimitSelect($strr,$lng="az"){
		$this->newslimitSelect=mysqli_query($this->conn,"SELECT * FROM news WHERE kate_id='".$strr."' AND lng='".$lng."' ORDER BY id DESC LIMIT 6");
		return $this->newslimitSelect;
	}
	public $newsSelect;
	public function newsSelect($strr,$lng="az"){
		$this->newsSelect=mysqli_query($this->conn,"SELECT * FROM news WHERE kate_id='".$strr."' AND lng='".$lng."' ORDER BY id DESC");
		return $this->newsSelect;
	}
	public $newsLentSelect;
	public function newsLentSelect($lng="az"){
		$this->newsLentSelect=mysqli_query($this->conn,"SELECT * FROM news WHERE lng='".$lng."' ORDER BY id DESC LIMIT 23");
		return $this->newsLentSelect;
	}
	public $search;
	public function search($str){
		$this->search=mysqli_query($this->conn,"SELECT * FROM `news` WHERE `text` LIKE '".$str."'");
		return $this->search;
	}

	public $sidebar;
	public function sidebar($lng){
		$this->sidebar=mysqli_query($this->conn,"SELECT * FROM newspages WHERE l_id='$lng'");
					while ($row=mysqli_fetch_assoc($this->sidebar)) {
				echo '<li><a class="page-scroll" href="'.'http://localhost/news/'.$row["url"].$lng.'">'.$row["name"].'</a></li>';
			}
	}


	public $updateNews;
	public function updateNews($id,$count){
		$this->updateNews=mysqli_query($this->conn,"UPDATE `news` SET `baxis`='$count' WHERE id = '$id'");
		$this->updateNews=mysqli_query($this->conn,"UPDATE `news` SET `baxis`='$count' WHERE n_id = '$id'");
		return $this->updateNews;
	}


}

?>