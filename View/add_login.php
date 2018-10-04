<div class="login-container">
<?php 
$sql=Controller::$db->Select('users');
	$row=mysqli_fetch_assoc($sql);
if ($row["status"]==2) {
	echo "Girisiniz sistemimiz terefinden Bloklandi";
	}
	else{
		if ($_POST["email"]==null) {
			echo "<center><h1 class='text-danger'>Giris edin</h1></center>";
			?>
				<script>
					setTimeout(function(){
						location.replace('<?php echo "$site_url"."login/$lng"; ?>');
					},1500);
					</script>
					<?php
		}
		else{
			$email=$_POST["email"];
			$pass=md5(sha1($_POST["pass"]));
			$login=Controller::$db->uSelect($email);
			if (mysqli_num_rows($login)==0) {
				echo "<center><h1 class='text-danger'>Bele istifadeci yoxdur</h1></center>";

				?>
				<script>
					setTimeout(function(){
						location.replace('<?php echo "$site_url"."login/$lng"; ?>');
					},1500);
					</script>
					<?php
			}
			else{
				$row=mysqli_fetch_assoc($login);
				if ($row["pass"]!=$pass) {
					echo "<center><h1 class='text-danger'>Email ve ya Parol sehvdir</h1></center>";
					?>
					<script>
					setTimeout(function(){
						location.replace('<?php echo "$site_url"."login/$lng"; ?>');
					},1500);
					</script>
					<?php
				}
				else{
					$_SESSION["newsemail"]=$email;
					require "home.php";?>

					<script>
						location.replace('<?php echo "$site_url"."home/$lng"; ?>');
					</script>
					<?php


				}
			}
		}
	}

 ?>
 </div>
 <style>
 	.login-container{
 		min-height: 400px;
 	}
 </style>