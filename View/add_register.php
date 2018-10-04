<?php 
$desen1="#^[a-z]+[0-9]+@[a-z]?#";
if (preg_match($desen1,@$_POST["email"])==null) {
		// echo "emaili dogru simvolla giriniz";
		echo "<script>
				alert('emaili dogru simvolla giriniz');
				location.replace('register');
			</script>";
}
else{
	$desen2="#[a-z]+[0-9]?#";
	if (preg_match($desen2,@$_POST["pass"])==null) {
		// echo "parolu dogru simvolla giriniz";
		echo "<script>
				alert('parolu dogru simvolla giriniz');
				location.replace('register');
			</script>";
	}
	else{	

				if ($_POST["email"]==null) {
					echo "bele seyfe yoxdur";
				}
				else{
				$name=$_POST["name"];
				$lname=$_POST["lname"];
				$email=$_POST["email"];
				$pass=md5(sha1($_POST["pass"]));
				$repass=md5(sha1($_POST["repass"]));
				$gender=$_POST["gender"];
				if ($pass!=$repass) {
					// echo "parol sehvdir";
					echo "<script>
							alert('parol sehvdir');
					location.replace('register');
					</script>";
					
				}
					else{
						$res=Controller::$db->uSelect($email);
						if (mysqli_num_rows($res)!=0) {
							// echo "Bu email qeydiyyatdan kecib";
							echo "<script>
							alert('Bu email qeydiyyatdan kecib');
							location.replace('register');
							</script>";
						}
						else{
							$sql=Controller::$db->uInsert($name,$lname,$email,$pass,$gender);
							if (!$sql) {
								echo "error";
							}
							else{
								$_SESSION["newsemail"]=$email;
								require "home.php";
								echo " <script>
 										setTimeout(function(){
 											location.replace('home');
 											});
 										</script>"	;
 								echo " <script>
 										alert('Qeydiyydan ugurla kecdiniz')
 										</script>"	;

							}
						}
					}
				}
			}


}










 ?>
