<?php 
class Viewer{
	public function __construct(){

	}
	public function view($str,$lng,$param=null){
		$fileName = 'View/'.$str.'.php';
		if ($str=="login") {
			include $fileName;
			return true;
		}
		elseif (file_exists($fileName)) {
			if (@$_SESSION["Dashboardemail"]==null) {
				echo "bele bir sehife yoxdur.";
			}
			else{
				include 'View/header.php';
				include $fileName;
				include 'View/footer.php';
				return true;
			}
		}

		else{
			echo "Bele seyfe yoxdur";
			return false;
		}
	}
}
?>