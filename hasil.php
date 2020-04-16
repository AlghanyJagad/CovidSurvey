<?php
session_start();
error_reporting(0);
include 'config/koneksi.php';
include "library/oop.php";
if(isset($_POST['selesai'])){
    $redirect = "https://covidalghanyy.000webhostapp.com/";
}
$jumlah = count($_POST['checkboxyes']);

if($jumlah <=7){
    $hasil = "Rendah";
}elseif ($jumlah <=14) {
    $hasil = "Sedang";
}elseif ($jumlah <= 21) {
    $hasil = "Tinggi";
}
if(isset($_POST['cek'])){//to run PHP script on submit
  $perintah = new oop();
@$table = "user";
@$redirect = "hasil.php";
$field = array('id' => '', 'nama' => $_SESSION['nama'], 'jml_ya' => $jumlah, 'hasil' =>$hasil );    
$perintah->simpan($con, $table, $field, $redirect);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>SURVEY COVID | Alghany</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/radio.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
  <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/virus.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
					<h2 class="mb-4">Hasil</h2>
                    <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span><?php echo ''.$_SESSION['nama'].''?></span></li>
		            </ul>
					<p>RESIKO ANDA UNTUK TERKENA COVID-19 YAITU</p>
                    <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span><?php echo ''.$hasil.''?></span></li>
		            </ul>
                    <p>Ayo kurangi penyebaran virus covid-19 dengan mengurangin interaksi sosial #DIRUMAHAJA #TETAPSEHAT</p>
                            <div class = "container">
                                        <a href="https://covidalghanyy.000webhostapp.com/" class="btn btn-primary py-3 px-5">SELESAI</a>
                            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 M.Alghany Jagad.A | 2020 | SMK WIKRAMA BOGOR | GEN-16 RPL
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>