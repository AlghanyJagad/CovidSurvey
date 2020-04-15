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
    <link rel="stylesheet" href="css/buttontengah.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
						  <h2>SURVEY COVID-19</h2>
              <span class="subheading">PENILAIAN RESIKO PRIBADI TERKAIT COVID-19</span>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
        <div class="row no-gutters block-9">
            <form action="survey.php" class="bg-light p-4 p-md-5 contact-form" method="post">
              <table border="0"></table>
              <div class="form-group">
                <tr>
                  <td><input type="text" class="form-control" name="nama" placeholder="Nama" required pattern="[A-Za-z ]+" id="input_nama" title = "ISI DENGAN HURUF SAJA"></td>
                </tr>
              </div>
              <div class="form-group">
                <tr>
                  <td><input type="text" class="form-control" onkeypress="return hanyaAngka(event)" name="umur" placeholder="Umur" maxlength="2" required pattern = "[0-9]+" title = "ISI DENGAN ANGKA SAJA"></td>
                </tr>
              </div>
              <div class="tengah">
              <div class="form-group">
                  <input type="submit" name="mulai" value="mulai" class="btn btn-primary center-block py-3 px-5">
              </div>
              </div>
                </div>
              </div>
            </div>
<script>
var input = document.getElementById('input_nama');
input.onInvalid = function(event) {
  event.target.setCustomValidity('Nama Hanya Boleh Huruf');
}
</script>
<script>
function hanyaAngka(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</script>
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