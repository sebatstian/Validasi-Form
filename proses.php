<?php
	foreach ($_POST as $post){
		echo $post."<br />";
	}
	if ($_POST["pass"]==$_POST["cfmpass"]) {
		echo "Kata sandi anda benar <br />";
	}
	else {
		echo "Password anda salah! <br />";
	}
