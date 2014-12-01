<!DOCTYPE html>
<html>
<head>
	<title>Rumah Sehat Online</title>
		<script src="javascripts/jquery-2.1.1.min.js"></script> 			<!-- javascript -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 	<!-- css bootstrap -->
  		<script src="bootstrap/js/bootstrap.min.js"></script> 			<!-- js bootstrap -->
  		<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="banner">
					<tr><td>Rumah Sehat Online</td></tr>
			     </table>
			</div>
						<!-- Navigator Menu -->
			<div class="col-md-12">
				<div class="col-md-3">
				<ul class="nav nav-pills nav-justified">
					<li class="active"><a href="#">10 Top Disease</a></li>
					<li><a href="#">10 New Disease</a></li>
					<li><a href="#">10 Top Doctor</a></li>
				</ul>
				</div>
				<div class="col-md-9">
				<ul class="nav nav-tabs">
				   	<li><a href="index.html">Home</a></li>
				   	<li><a href="cek_kesehatan.html">Cek Kesehatan</a></li>
				   	<li class="active"><a href="login_dokter.html">Login Dokter</a></li>
				   	<nav class="" role="navigation">
						<form class="navbar-form navbar-right" role="search">
					        <div class="form-group input-group-sm"><input type="text" class="form-control" placeholder="Search Penyakit"></div>
					        <button type="submit" class="btn btn-default btn-sm">Submit</button>
					    </form>
			  		</nav>
				</ul>
				</div>
			</div>
			<!-- End of Navigator Menu -->

			<!----------------------------- Container ----------------------------->
			<!-- Left Side -->
				<div class="left_bar" id="left_bar">
					<div class="col-md-3">
						<div id="left_title" class="left_bar_title">
							10 Top Penyakit !!!
						</div>
						<div class="left_bar_text">
							<ul><a href="#">Demam		<li>12/01/14</li></a></ul>
							<ul><a href="#">DBD 		<li>13/01/14</li></a></ul>
							<ul><a href="#">DBD			<li>14/01/14</li></a></ul>
							<ul><a href="#">Jantung		<li>15/01/14</li></a></ul>
							<ul><a href="#">Gagal Ginjal<li>16/01/14</li></a></ul>
							
							<ul><a href="#">Asma		<li>16/01/14</li></a></ul>
							<ul><a href="#">Kencing batu<li>17/01/14</li></a></ul>
							<ul><a href="#">Masuk angin	<li>18/01/14</li></a></ul>
							<ul><a href="#">Tipes		<li>19/01/14</li></a></ul>
							<ul><a href="#">Osteoporosis<li>20/01/14</li></a></ul>
							<ul><a href="#">HIV			<li>21/01/14</li></a></ul>
						</div>
					</div>
			<!-- End of Left Side -->

			<!-- Right Side -->
				<table border="1">
					<tr>
						<td align="center">Nama</td>
						<td align="center">NID</td>
						<td align="center">E-mail</td>
						<td align="center">Password</td>
						<td align="center">Tempat Praktek</td>
					</tr>
					<?php 
					$myfile = fopen("Database Dokter.txt", "r") or die("Unable to open file!");
					// Output one line until end-of-file
					
					while(!feof($myfile)) { ?>
					<tr> <?php
						for($x=0; $x<5; $x++){
							?><td><?php echo fgets($myfile) . "<br>";?></td><?php
					}?>
					</tr><?php					  
					}
					fclose($myfile);
					?>
					<tr>
				</table>
			<!-- End of Right Side -->
					<!-- Footer -->
					<table class="col-md-12">
						<tr><td><div  id="footer">Copy right by Ivan & Syailendra</div></td></tr>
					</table>
					<!-- End of Footer -->	
				</table>
			</div>
		</div>
	</div>

</body>
</html>