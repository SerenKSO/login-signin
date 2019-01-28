
	<?php

	if($_POST){

	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$email=$_POST['e-mail'];
	$username=$_POST['username'];
	$password=$_POST['password'];


		if($name=="" || $surname==""|| $email==""||
		 $username==""|| $password==""){
		 	echo "Lütfen boş alan bırakmanıyınız.";
		} else{
			$baglan = mysqli_connect('localhost', 'root', '', 'users');	
			//mysql_select_db("users", $baglan) or die("Baglantı kurulamadı");	
			error_reporting(0);

			$kayit = mysqli_query("INSERT INTO users (name, surname, email, username, password) VALUES ('$name', '$surname', '$email', '$username', '$password')");
			if($kayit){
				echo "oldu";
			}else{
				echo "olmadı";
			}

			



			}
		}

	?>