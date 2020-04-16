<?php
session_start();
include 'config/koneksi.php';
include "library/oop.php";
$_SESSION['nama'] = ($_POST['nama']);
$nama = ($_POST['nama']);
$umur = ($_POST['umur']);
$perintah = new oop();
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

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row no-gutters block-9">
            <form action="hasil.php" class="bg-light p-4 p-md-5 contact-form" method="post">
              <table border="0"></table>
          <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">A. POTENSI TERTULAR DILUAR RUMAH</h2>
          </div>
        </div>
        <label class="container">*JANGAN Dipilih jika Tidak</label>
        <div class="col-md-9">
					  <div id="page-1" class= "page one">
    <h1 class="heading">1. SAYA PERGI KELUAR RUMAH</h1>
        <label class="container">YA
            <input type="checkbox" id="y1" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">2. SAYA MENGGUNAKAN TRANSPORTASI UMUM: ONLINE,ANGKOT, BUS, TAKSI, KERETA API</h1>
        <label class="container">YA
            <input type="checkbox" id="y2" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">3. SAYA TIDAK MEMAKAI MASKER PADA SAAT BERKUMPUL DENGAN ORANG LAIN</h1>
        <label class="container">YA
            <input type="checkbox" id="y3" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">4. SAYA BERJABAT TANGAN DENGAN ORANG LAIN</h1>
    <label class="container">YA
            <input type="checkbox" id="y4" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">5. SAYA TIDAK MEMBERSIHKAN TANGAN DENGAN HAND SANITIZER / TISSUE BASAH SEBELUM PEGANG KEMUDI MOTOR/MOBIL</h1>
    <label class="container">YA
            <input type="checkbox" id="y5" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">6. SAYA MENYENTUH BENDA/UANG YANG DISENTUH ORANG LAIN</h1>
    <label class="container">YA
            <input type="checkbox" id="y6" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">7. SAYA TIDAK MENJAGA JARAK 1,5 M DENGAN ORANG LAIN KETIKA: BELANJA, BEKERJA, BELAJAR, IBADAH.</h1>
    <label class="container">YA
            <input type="checkbox" id="y7" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">8. SAYA MAKAN DILUAR RUMAH (WARUNG / RESTAURANT)</h1>
    <label class="container">YA
            <input type="checkbox" id="y8" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">9. SAYA TIDAK MINUM AIR HANGAT & CUCI TANGAN DENGAN SABUN SETELAH TIBA DI TUJUAN.</h1>
    <label class="container">YA
            <input type="checkbox" id="y9" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">10. SAYA BERADA DI WILAYAH KELURAHAN TEMPAT PASIEN TERTULAR.</h1>
    <label class="container">YA
            <input type="checkbox" id="y10" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
      </div>
      </div>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">B. POTENSI TERTULAR DIDALAM RUMAH</h2>
          </div>
        </div>
        <label class="container">*JANGAN Dipilih jika Tidak</label>
        <div class="col-md-9">
					  <div id="page-1" class= "page one">
    <h1 class="heading">11. SAYA TIDAK PASANG HAND SANITIZER DI DEPAN PINTU MASUK UNTUK BERSIHKAN TANGAN SEBELUM PEGANG GAGANG PINTU MASUK</h1>
    <label class="container">YA
            <input type="checkbox" id="y11" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">12. SAYA TIDAK MENCUCI TANGAN DENGAN SABUN SETELAH TIBA DI RUMAH</h1>
    <label class="container">YA
            <input type="checkbox" id="y12" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">13. SAYA TIDAK MENYEDIAKAN : TISSUE BASAH / ANTISEPTIC, MASKER, SABUN ANTISEPTIC, BAGI KELUARGA DI RUMAH</h1>
    <label class="container">YA
            <input type="checkbox" id="y13" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">14. SAYA TIDAK SEGERA MERENDAM BAJU & CELANA BEKAS PAKAI DI LUAR RUMAH KEDALAM AIR PANAS / SABUN</h1>
    <label class="container">YA
            <input type="checkbox" id="y14" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">15. SAYA TIDAK SEGERA MANDI KERAMAS SETELAH SAYA TIBA DIRUMAH</h1>
    <label class="container">YA
            <input type="checkbox" id="y15" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">16. SAYA TIDAK MENSOSIALISASI KAN CHECK LIST PENILAIAN RESIKO PRIBADI INI KEPADA KELUARGA DIRUMAH</h1>
    <label class="container">YA
            <input type="checkbox" id="y16" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    </div>
    </div>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">C. DAYA TAHAN TUBUH (IMUNITAS)</h2>
          </div>
        </div>
        <label class="container">*JANGAN Dipilih jika Tidak</label>
        <div class="col-md-9">
					  <div id="page-1" class= "page one">
    <h1 class="heading">17. SAYA DALAM SEHARI TIDAK KENA CAHAYA MATAHARI MIN. 15 MENIT</h1>
    <label class="container">YA
            <input type="checkbox" id="y17" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">18. SAYA TIDAK JALAN KAKI / BEROLAH RAGA MIN. 30 MENIT SEHARI</h1>
    <label class="container">YA
            <input type="checkbox" id="y18" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">19. SAYA JARANG MINUM VITAMIN C & E, DAN KURANG TIDUR</h1>
    <label class="container">YA
            <input type="checkbox" id="y19" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">20. USIA SAYA DIATAS 60 TAHUN</h1>
    <label class="container">YA
            <input type="checkbox" id="y20" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
    <h1 class="heading">21. SAYA MEMPUNYAI PENYAKIT: JANTUNG/DIABETES/GANGGUAN PERNAFASAN KRONIK</h1>
    <label class="container">YA
            <input type="checkbox" id="y21" name="checkboxyes[]" onClick="sum()" value="1">
            <span class="checkmark"></span>
        </label>
        <label class="btn btn-primary py-3 px-5">CEK HASIL
            <input type="submit" name="cek" value="cek">
            <span class=""></span>
        </label>
       </div>
            </div>    
    </div>
              </table>
            </form>


          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/);"></div>
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