<?php 
class Model{
	public $conn;
	public $host="localhost";
	public $username ="root";
	public $pass = "";
	public $dbname="dashboard";
	public $nSelect;


	public function __construct(){
		$this->conn = mysqli_connect($this->host,$this->username,$this->pass,$this->dbname);

		if (!$this->conn) {

			echo "xeta";
		}
		else{
			 mysqli_set_charset($this->conn,"utf8");

			return $this->conn;


			
		}
	}
	public function a_login($email,$pass){
		$sql = mysqli_query($this->conn,"SELECT * FROM admin WHERE email = '$email'");
		if (mysqli_num_rows($sql)==0) {
			echo "<h1>bele istifaci yoxdur</h1>";
			echo '<script type="text/javascript">
				setTimeout(function(){
					location.replace("index.php");
				},1000);
			</script>';
				}
		else{
			$row = mysqli_fetch_assoc($sql);
			if (md5(sha1($pass)) != $row["password"]) {
				echo "<h1>parol sehvdir</h1>";
				echo '<script type="text/javascript">
				setTimeout(function(){
					location.replace("index.php");
				},1000);
			</script>';
			}
			else{

				$_SESSION["Dashboardemail"]=$email;
				
				echo "<script>
        location.replace('home/az');
    </script>";
    return true;
			}

		}
	}
	
	public $nInsert;
	public function nInsert($name,$sname,$email,$pass,$status){
		$this->nInsert=mysqli_query($this->conn,"INSERT INTO `admin`(`name`, `sname`, `email`, `password`, `r_date`, `status`, `save_me`, `lng`) VALUES ('$name','$sname','$email','$pass','".date("Y-m-d h:i:s")."','$status','1','az')");
		return $this->nInsert;
	}
	
	public $select;
	public function select($strr,$lng="az",$id=1){
		$this->select=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE ".$id." AND lng = '$lng'");
		return $this->select;
	}
	public $selectPages;
	public function selectPages($strr,$lng="az"){
		$this->selectPages=mysqli_query($this->conn,"SELECT * FROM pages WHERE l_id = '$lng' AND type=0");
		return $this->selectPages;
	}
	public $sliderNews;
	public function sliderNews($str,$lng){
		$this->sliderNews=mysqli_query($this->conn,"SELECT * FROM ".$str." WHERE lng='".$lng."'");
		return $this->sliderNews;
	}
	public $elaveSelect;
	public function elaveSelect(){
		$this->elaveSelect=mysqli_query($this->conn,"SELECT * FROM elavenews");
		return $this->elaveSelect;
	}

	public $Userselect;
	public function Userselect($strr,$id=1){
		$this->Userselect=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE ".$id."");
		return $this->Userselect;
	}

	public $selectForEditt;
	public function selectForEdit($strr,$id){
		$this->selectForEditt=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE id ='$id'");

		return $this->selectForEditt;
	}



	public $selectOrder;
	public function selectOrder($strr,$id1,$id2){
		$this->selectOrder=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE page_id ='$id1' AND admin_id = '$id2'");

		return $this->selectOrder;
	}
	public $SliderInsert;
	public function SliderInsert($basliq,$text,$filename,$basliqr,$textr,$basliqen,$texten){
		$this->SliderInsert=mysqli_query($this->conn,"INSERT INTO `slidernews`(`basliq`, `text`,`image`, `lng`, `n_id`) VALUES ('$basliq','$text','$filename','az','0')");
		$n_id = mysqli_insert_id($this->conn);

		$this->SliderInsert=mysqli_query($this->conn,"INSERT INTO `slidernews`(`basliq`, `text`, `image`, `lng`, `n_id`) VALUES ('$basliqr','$textr','$filename','ru','$n_id')");

		$this->SliderInsert=mysqli_query($this->conn,"INSERT INTO `slidernews`(`basliq`, `text`, `image`, `lng`, `n_id`) VALUES ('$basliqen','$texten','$filename','en','$n_id')");
			
		return $this->SliderInsert;
	}
	public $sliderUpdate;
	public function sliderUpdate($basliq,$text,$filename,$id,$basliqr,$textr,$basliqen,$texten){
		$this->sliderUpdate=mysqli_query($this->conn,"UPDATE `slidernews` SET `basliq`='$basliq',`text`='$text',`image`='$filename' WHERE id='$id'");
		$id+=1;
		$this->sliderUpdate=mysqli_query($this->conn,"UPDATE `slidernews` SET `basliq`='$basliqr',`text`='$textr' WHERE id='$id'");
		$id+=1;
		$this->sliderUpdate=mysqli_query($this->conn,"UPDATE `slidernews` SET `basliq`='$basliqen',`text`='$texten' WHERE id='$id'");
		return $this->sliderUpdate;
	}


	public function nSelect($email){
		$this->nSelect=mysqli_query($this->conn,"SELECT * FROM admin WHERE email='$email'");
		return $this->nSelect;
	}

	public $Insert;
	public function Insert($filename,$basliq,$text,$status,$kate,$basliqr,$textr,$basliqen,$texten){
		$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`,`lng`,`n_id`,`kate_id`) VALUES ('$filename','$basliq','$text','".date("Y-m-d")."','$status','az',0,'$kate')");
		$n_id = mysqli_insert_id($this->conn);

			$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`,`lng`,`n_id`,`kate_id`) VALUES ('$filename','$basliqr','$textr','".date("Y-m-d")."','$status','ru','$n_id','$kate')");

			$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`,`lng`,`n_id`,`kate_id`) VALUES ('$filename','$basliqen','$texten','".date("Y-m-d")."','$status','en','$n_id','$kate')");
			
		return $this->Insert;
	}
	public $adminUpdate;
	public function adminUpdate($name,$sname,$email,$pass,$status,$id){
		$this->adminUpdate=mysqli_query($this->conn,"UPDATE `admin` SET `name`='$name',`sname`='$sname',`email`='$email',`password`='$pass',`status`='$status',`save_me`='1' WHERE id='$id'");
		return $this->adminUpdate;
	}

	public $newsUpdate;
	public function newsUpdate($filename,$basliq,$text,$status,$kate,$id,$basliqr,$textr,$basliqen,$texten){
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `image`='$filename',`basliq`='$basliq',`text`='$text',`status`='$status',`kate_id`='$kate' WHERE id='$id'");
		$id+=1;
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `basliq`='$basliqr',`text`='$textr',`status`='$status',`kate_id`='$kate' WHERE id='$id'");
		$id+=1;
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `basliq`='$basliqen',`text`='$texten',`status`='$status',`kate_id`='$kate' WHERE id='$id'");
		return $this->newsUpdate;
	}
	public $elaveInsert;
	public function elaveInsert($filename){
		$this->elaveInsert=mysqli_query($this->conn,"INSERT INTO `elavenews`(`image`) VALUES ('$filename')");
		return $this->elaveInsert;
	}
	public $elaveUpdate;
	public function elaveUpdate($filename,$id){
		$this->elaveUpdate=mysqli_query($this->conn,"UPDATE `elavenews` SET `image`='$filename' WHERE id='$id'");
		return $this->elaveUpdate;
	}


	public $delete;
	public function delete($table,$id){
		$this->delete=mysqli_query($this->conn,"DELETE FROM ".$table." WHERE id = '$id'");
		$this->delete=mysqli_query($this->conn,"DELETE FROM ".$table." WHERE n_id = '$id'");
		return true;
	}
	public $cixis;
	public function cixis(){
		$this->cixis=mysqli_query($this->conn,"UPDATE `admin` SET `cixis`=now() WHERE email='".@$_SESSION["email"]."'");
		return $this->cixis;
	}

	public $giris;
	public function giris(){
		$this->cixis=mysqli_query($this->conn,"UPDATE `admin` SET `giris`=now() WHERE email='".@$_SESSION["email"]."'");
		return $this->giris;
	}
	public $update_admin_status;
	public function update_admin_status($status,$id){
		$this->update_admin_status=mysqli_query($this->conn,"UPDATE `admin` SET status ='$status'  WHERE id='$id'");
		return $this->update_admin_status;
	}

	public $usersUpdate;
	public function usersUpdate($name,$sname,$b_day,$email,$phone,$filename,$gender,$confirm,$status,$id){
		$this->usersUpdate=mysqli_query($this->conn,"UPDATE `users` SET  	`name`='$name',`lname`='$sname', `email`='$email',`gender`='$gender',`status`='$status' WHERE id ='$id' ");
		return $this->usersUpdate;
	}
	public $order;
	public function Order($pages,$id){
		$sql = mysqli_query($this->conn,"DELETE FROM `order_pages` WHERE  admin_id = '$id'");
			foreach ($pages as $key ) {

				$insert = mysqli_query($this->conn,"INSERT INTO `order_pages`(`admin_id`, `page_id`) VALUES ('$id','$key')");
				$sql = mysqli_query($this->conn,"SELECT * FROM pages WHERE p_id = '$key'");
				while($row = mysqli_fetch_assoc($sql)){
					$insert = mysqli_query($this->conn,"INSERT INTO `order_pages`(`admin_id`, `page_id`) VALUES ('$id','".$row["id"]."')");
				}
			}
	}
	public $checkOrder;
	public function checkOrder($p_id){
		$sadmin = mysqli_query($this->conn,"SELECT  * FROM admin WHERE email = '".$_SESSION["Dashboardemail"]."'");
		$row= mysqli_fetch_assoc($sadmin);
		$id = $row["id"];
		$sql = mysqli_query($this->conn,"SELECT * FROM order_pages WHERE page_id = '$p_id' AND admin_id = '$id'");
		if (mysqli_num_rows($sql)>0) {
			return true;
		}
		else{
			return false;
		}
	}

	public $sidebar;
	public function sidebar($lng){

		$this->sidebar = mysqli_query($this->conn,"SELECT * FROM pages WHERE l_id = '$lng' AND s_id=0");
		while($row = mysqli_fetch_assoc($this->sidebar)){
			$sql2 = mysqli_query($this->conn,"SELECT * FROM pages WHERE l_id='$lng' AND s_id = '".$row["id"]."'");
				
				if ($this->checkOrder($row["id"])) {
					

					if (mysqli_num_rows($sql2)==0) {

				echo '<li>
                        <a href="'.'http://localhost/news/dashboard/'.$row["url"].$lng.'"> <i class="menu-icon '.$row["icons"].'"></i>'.$row["name"].'</a>
                    </li>';
			}
			else{
				
					
				
				echo '<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon  fa fa-newspaper-o"></i>'.$row["name"].'</a>
                        <ul class="sub-menu children dropdown-menu">';
                        while ($row2 = mysqli_fetch_assoc($sql2)) {
                         echo   '<li><i class="menu-icon '.$row2["icons"].'"></i><a href="http://localhost/news/dashboard/'.$row2["url"].$lng.'/'.$row2["type"].'">'.$row2["name"].'</a></li>';
                     }
                           echo  '                                                      
                        </ul>
                    </li>';
                    
			}
				}
			
		}

	}
	


}


?>