<div class="container">
	<center>
	<div class="login">
		<h1>Login Page</h1>
		<form action="<?php echo $site_url.'add_login/'.$lng?>" method="POST">
			<input type="email" name="email" class="in" placeholder="email.."  required>
			<br>
			<br>
			<input type="password"  name="pass" class="in" placeholder="password" required>
			<br>
			<br>
			<input type="checkbox" name="confirm" value="1">
			<span>Beni unutma</span>
			<br>
			<br>
			<input type="submit" value="Gonder" class="sub">
			<br>
			<br>
			<a href="register"><h3>Qeydiyyatdan kec</h3></a>
		</form>
		<a href="">
			<button class="btn btn-success"><i class="fa fa-facebook fa-fw"></i>Login with Facebook</button>
		</a>
	</div>
	</center>



</div>
<style>
	.login span{
		color:white;
		margin-right: 15px;
	}
	.btn-success{
		background: #4267b2 !important;
		border: none;
		width: 250px;
		height: 30px;
		word-spacing: 2px;
	}
</style>
