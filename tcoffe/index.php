<?php
  require 'function.php';
  $kopi = query("SELECT * FROM datakopi");

  if (isset($_POST["search"])){
  $kopi = search($_POST["keyword"]);
  }
  
  SESSION_START();
  	if(!isset($_SESSION["Login"])) {
  		header("Location:Login.php");
  		exit;
  	}
  	if(isset($_POST['submit'])) {
  		$kopi = search($_POST['search']);
  	}
  		
?>

<html lang="id">
<head>
    <title>TJAKS Coffee Roastery. Pabrik, Supplier dan Distributor Kopi. Jual biji kopi dari berbagai daerah di Indonesia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
        section{
            min-height: 300px;
        }
        body{
            color : white;
            background: url('img/bg4.jpg');
            background-size : cover;
            background-attachment : fixed;
            font-family: "Roboto";
            margin: auto;
        }
        .inner{
            text-align : center;
        }
        .data{
            text-align : center;
        }
     
        #footer{
            text-align : center;
            background: rgba(0,0,0,0.4);
        }
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        a {
            text-decoration: none;
            color: #FFF5EE;
        }
        .logo {
            text-align: center;
            line-height: 40px;
            padding-left: 20px;
            padding-right: 20px;
        }    
        ul {
            list-style: none inside;
            padding: 0;
            margin: auto;
        }
        nav {
            background-color: #A0522D;
            position: fixed;
            width: 100%;
            height: 40px;
        }
        nav > .logo {
            color: white;
        }
        nav > .menu {
            position: fixed;
            top: 20px;
            width: 100%;
            background-color: white;
            display: none;
        }
        nav > .menu > li {
            padding: 7px;
        }
    @media (min-width: 321px) {
        .toggle {
            display: none;
        }
        .logo {
            text-align: initial;
            display: inline-block;
            vertical-align: top;
        }  
        nav > .menu {
            position: static;
            display: inline-block !important;
            background-color: transparent;
            width: auto;
        }
        nav > .menu > li {
            float: left;
        }
        nav > .menu::after {
            clear: both;
            content: '';
            display: block;
        }
    }
</style>
</head>
<body>
    <!-- navbar -->
    <nav>
        <div class="logo"><img src="img/logo.jpg"></div>
        <div class="toggle"><span class="fa fa-bars"></span></div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="bio.php">About Me</a></li>
            </ul>
    </nav>			
    
    <!-- Banner -->
    
    <section id="banner"> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="inner">
	        <h2 class="banner">TJAKS COFFEE ROASTERY</h2>
	        <p>Palembang - Indonesia<br />
	    </div>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style1 special">
		<div class="inner"> <br><br><br><br><br><br><br><br><br><br><br><br><br>
		    <header class="major"> 
            <h2>TJAKS COFFEE </h2><h2>adalah website penyedia informasi berbagai jenis kopi  </h2><h2> untuk konsumsi 
          individu pecinta kopi, hotel, resto, cafe dan kebutuhan ekspor.</h2>
          
            <p>Menginformasikan berbagai macam varietas kopi yang memiliki kualitas yang bagus, mulai dari biji kopi mentah, roasted bean 
                sampai sachet siap minum.<br /></p>
            </header> 
        </div>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<div class="data" style="width:100%;">
    	<table border= 1 cellspacing="1" cellpadding="5" class="kopi" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black;">
    	<tr style="text-align:center;">
    	   <td>
    	    <h1>DATA KOPI</h1>
            <form action="" method="post">
            <input type="text" name="keyword" value="" size="40" >
            <button type="submit" name="search">search</button>
            </form><br>
            <a href="create.php">Tambahkan Data Kopi</a><br><br>
            </td>
        </tr>
        </table>
        <br><br>
        <table border =1 cellspacing="1" cellpadding="5" class="kopi" style="margin:auto;  background: rgba(0,0,0,0.5); border:3px solid black;">
            <tr>
                <th>No</th>
                <th style="width:200px;">Nama Kopi</th>
                <th style="width:150px;">Asal Kopi</th>
                <th style="width:100px;">Harga</th>
                <th style="width:200px;">Ditambahkan Oleh</th>
                <th style="width:100px;">Opsi</th>
                
            </tr>
        <?php  $i=1 ; ?>
          <?php foreach ($kopi as $coffee) :?>
            <input type="hidden" name="datakopi" value="<?= $coffee['datakopi'];?>">
            <tr>
                <td><?= $i;?></td>
                <td><?= $coffee["NamaKopi"];?></td>
                <td><?= $coffee["AsalKopi"];?></td>
                <td>Rp <?= $coffee['Harga'];?></td>
                <td><?= $coffee["User"];?></td>
                <td><a href="check.php?id=<?= $coffee["id"];?>&x=edit">Edit</a> | 
                <a href="check.php?id=<?= $coffee["id"];?>&x=delete" onclick="return confirm('Beneran nih??')";>Hapus</a></td> 
            </tr>
            
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
    </div>
	<br><br><br><br><br><br><br><br><br><br>

	<!-- Footer -->
	<footer id="footer">
		<ul class="icons">
		    <li><a href="Logout.php" target="_blank">LOGOUT!</a></li>
		    <li><a href="https://www.facebook.com/hardian.theja.3" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="https://www.instagram.com/hardiantheja/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
	    </ul>
		<ul class="copyright">
			 <p>Pabrik Kopi TJAKS |
			 Distributor Kopi | 
			 Supplier Kopi</p>
            
        </ul>
	</footer>

	
	
</body>
</html>