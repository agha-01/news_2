<div class="container">
<center>
	<div class="login">
		<h1>Register Page</h1>
		<form action="add_register" id="register_form" method="POST">
			<span class="error_message">*</span>
			<input type="email" name="email" id="email" class="in" placeholder="email.." >
			<br>
			<span class="error_message" id="email_error"></span>
			<br>
			<span class="error_message">*</span>
			<input type="text" name="name" id="username" class="in" placeholder="Name" >
			<br>
			<span class="error_message" id="user_error"></span>
			<br>
			<span class="error_message">*</span>
			<input type="text" name="lname" id="lastname" class="in" placeholder="Last Name" >
			<br>
			<span class="error_message" id="last_error"></span>
			<br>
			<span class="error_message">*</span>
			<input type="password" name="pass" id="pass" class="in" placeholder="password" >
			<br>
			<span class="error_message" id="pass_error"></span>
			<br>
			<span class="error_message">*</span>
			<input type="password" name="repass" id="repass" class="in" placeholder="Again password" >
			<br>
			<span class="error_message" id="repass_error"></span>
			<br>
			<span class="error_message">*</span>
			<input type="radio" name="gender" value="kisi" required><span> Kisi</span>
			<span class="error_message">*</span>
			<input type="radio" name="gender" value="Qadin" required><span> Qadin</span>
			<br>
			<br>
			<input type="submit" value="Gonder" class="sub">
		</form>
	</div>
</center>
</div>