
	<?php

	if($_POST){

	
	$username=$_POST['username'];
	$password=$_POST['password'];


		if($username==""|| $password==""){
		 	echo "Lütfen boş alan bırakmanıyınız.";
		} else{
			error_reporting(0);
			$baglan = mysql_connect('localhost', 'root', '', 'users');	
			mysql_select_db("users", $baglan) or die("Baglantı kurulamadı");	

			$kontrol = msql_query("SELECT* FROM users WHERE username='$username'");

			if(mysql_num_rows($kontrol) >0 ){
				$par = mysql_fetch_array($kontrol);
				$gsifre = $par['password'];

				if($gsifre==$password){
					echo "girdi";
				}else{
					echo "yanlış şifre";
				}

			}else{
				echo "no user";
			}


			

			}
		}

	?>