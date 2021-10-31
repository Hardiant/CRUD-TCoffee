<?php
	require 'function.php';
	if(isset($_POST["Register"])) {
		if(Register($_POST) > 0) {
			print "<script> alert('Kamu Telah mengregistrasi akunmu!')</script>";
		} 
			else {
			print mysqli_error($koneksi);
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial=scalee=1.0">
		<title> Register </title>
	</head>
	<style>
		 body{
            color : white;
            background: url('img/bg4.jpg');
            background-size : cover;
            background-attachment : fixed;
            font-family: "Roboto";
            margin: auto;
        }
	</style>
	
	<body>
	<center>
		<br><br><br><br>
		<h1>SELAMAT DATANG DI TJAKS COFFEE</h1>
		<br><br><br>
		<table border="1" cellpadding="4" cellspacing="1" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black; width:300px; height:350px;">
		<tr> <th colspan="3" style="Text-align:center"> <h3 style="Text:bold"> Register Sekarang! </h3> </th> </tr>
		<form method="POST" action="">
		<tr style="height:10px;">	
			<td> Username </td> 
			<td> : </td>
			<td><label for="username"> </label>
				<input type="text" id="username" name="username" autocomplete="on" required><br>
			</td> 
		</tr>			
	
		<tr style="height:10px;">	
			<td> Password </td> 
			<td> : </td>  
			<td>	<label for="password"></label>
				<input type="password" id="password" name="password" autocomplete="off"><br>
			</td>
		</tr>
				
		<tr style="height:10px;">	
			<td> Confirm Password </td> 
			<td> : </td>  
			<td><label for="password2"></label>
				<input type="password" id="password2" name="password2" autocomplete="off"><br>
			</td>
		</tr>
				
		<tr style="height:50px;">	
			<td colspan="3">
                <center> <button type="submit" name="Register" style="font-size: 16px;">Kirim</button> </center>
            </td>
        </tr>
		
		<tr>	
			<td colspan="3" style="height:10px;">
                <center> <h4> Sudah Mempunyai Akun? <a href="Login.php"> Klik Disini! </a> </h4> </center>
            </td> 
        </tr>
        
		
		</form>
	</center>
	</body>
</html>