	$(function(){
		$("#user_error").hide();
		$("#last_error").hide();
		$("#pass_error").hide();
		$("#repass_error").hide();
		$("#email_error").hide();

		var user_error = false;
		var last_error = false;
		var pass_error = false;
		var repass_error = false;
		var email_error = false;

		$("#username").focusout(function(){
			check_username();
		});
		$("#lastname").focusout(function(){
			check_lastname();
		});
		$("#pass").focusout(function(){
			check_pass();
		});
		$("#repass").focusout(function(){
			check_repass();
		});
		$("#email").focusout(function(){
			check_email();
		});

		function check_username(){
			var username_length = $("#username").val().length;
			if (username_length < 3 || username_length >20) {
				$("#user_error").html("xarakter 3-20 arasi olmalidi");
				$("#user_error").show();
				user_error=true;
			}else{
				$("#user_error").hide();
			}
		}
		function check_lastname(){
			var lastname_length = $("#lastname").val().length;
			if (lastname_length < 5 || lastname_length >20) {
				$("#last_error").html("xarakter 5-20 arasi olmalidi");
				$("#last_error").show();
				last_error=true;
			}else{
				$("#last_error").hide();
			}
		}
		function check_pass(){
			var pass_length = $("#pass").val().length;
			if (pass_length < 8 ) {
				$("#pass_error").html("parol en az 8 simvol ola biler");
				$("#pass_error").show();
				pass_error=true;
			}else{
				$("#pass_error").hide();
			}
		}
		function check_repass(){
			var pass = $("#pass").val();
			var repass_length = $("#repass").val();
			if (pass!=repass_length) {
				$("#repass_error").html("parollar eyni deyil");
				$("#repass_error").show();
				repass_error=true;
			}else{
				$("#repass_error").hide();
			}
		}
		function check_email(){
			var pattern=new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
			if (pattern.test($("#email").val())) {
				$("#email_error").hide();
			}
			else{
				$("#email_error").html("Email dogru girin");
				$("#email_error").show();
				email_error=true;
			}
		}
		$("#register_form").submit(function(){
			user_error=false;
			last_error=false;
			pass_error=false;
			repass_error=false;
			email_error=false;

			check_username();
			check_lastname();
			check_pass();
			check_repass();
			check_email();

			if (user_error==false && last_error==false && pass_error==false && repass_error==false && email_error==false) {
				return true;
			}
			else{
				return false;
			}
		});
	});
