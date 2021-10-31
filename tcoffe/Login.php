<?php

	SESSION_START();
	require 'function.php';
	if(isset($_POST['Login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$result = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username'");
		if(mysqli_num_rows($result)===1) {
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])) {
				
				$_SESSION["Login"] = $row["username"];
				echo "<script> alert('Selamat Datang Di Halaman TJAKS COFFEE');</script>";
				header("Location:index.php");
			exit;

			}
		}
		$error = true;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial=scalee=1.0">
		<title> Login </title>
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
	</head>
	
	<body>
	<center>
	<br><br><br><br>
	<h1>SELAMAT DATANG DI TJAKS COFFEE</h1>
		
	<?php
		if(isset($error)) { ?>
		<table cellpadding="4" cellspacing="1">
			<tr> 
				<th>
					<h2> <center> Username atau Password Salah <br> Coba Lagi </center> </h2>
				</th> 
			</tr>
		<table><br><br>
		<?php	}	?>
		
		<table border="1" cellpadding="4" cellspacing="1" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black; width:300px; height:350px;">
		<br><br><br>
		
		<tr> <th colspan="3" style="Text-align:center"> <h2 style="Text:bold"> Login </h2> </th> </tr>
		
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
			<td><label for="password"></label>
				<input type="password" id="password" name="password" autocomplete="off"><br>
			</td> 
		</tr>			
		
		<tr  style="height:50px;">	
			<td colspan="3">
                <center> <button type="submit" name="Login" style="font-size: 16px;"> Login </button> </center>
            </td> 
        </tr>
		
		<tr  style="height:10px;">
			<td colspan="3">
                <center> <h4> Belum Mempunyai Akun? <a href="Register.php"> Klik disini! </a> </h4> </center>
            </td> </tr>
		
		</form>
		</center>
	</body>
</html>