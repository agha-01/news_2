<?php 
$id=$_POST["hidden"];
$file=$_FILES["image"];
$uImage=$_POST["uImage"];
$type=["image/jpg","image/png","image/jpeg","image/psd","image/bmp"];
if (in_array($file["type"],$type)) {
	$rand=rand(999,10000000000);
	$mode=end(explode(",",$file["name"]));
	$filename='images/uploads/'.$rand.".".$mode;
	$size=$file["size"]/1024;
	if ($size<=1024*5) {
		if (move_uploaded_file($file["tmp_name"],$filename)) {
			$sql=Controller::$conn->elaveUpdate($filename,$id);
			echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
			echo "<script>
					setTimeout(function(){
						location.replace(".$site_url."'news/'".$lng.");
						},1000);
			</script>";
		}
		else{
			echo "<center><h1 class='text-danger'>Yuklediyiniz sekilde problem var</center></h1>";
			echo "<script>
			setTimeout(function(){
				location.replace('".$site_url."news/'".$lng.");
						},1000);
		</script>";
		}
	}else{
		echo "<center><h1 class='text-success'>Sekilin yaddasi 5mb cox olmamalidir</center></h1>";
		echo "<script>
			setTimeout(function(){
				location.replace('".$site_url."news/'".$lng.");
						},1000);
		</script>";
	}


}else{
		$sql=Controller::$conn->elaveUpdate($uImage,$id);
	echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
	echo "<script>
			setTimeout(function(){
				location.replace('".$site_url."news/'".$lng.");
						},1000);
		</script>";
}

















 ?>





