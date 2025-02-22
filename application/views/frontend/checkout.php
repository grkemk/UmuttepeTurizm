<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elemefav.png">
		<meta name="author" content="colorlib">
		<!-- Meta Description -->		<!-- Author Meta -->

		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Log on to codeastro.com for more projects -->
		<!-- Site Title -->
		<title>Bilet Kontrol</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
		<?php $this->load->view('frontend/include/base_css'); ?>
	</head>
	<body>
		<!-- navbar -->
		<?php $this->load->view('frontend/include/base_nav'); ?>
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-7">
						<!-- Default Card Example -->
						<div class="card">
					  <div class="card-header">
					   <i class="fas fa-info-circle"></i> Bookings Done, Continue Payment
					  </div>
					  <div class="card-body" align="center">
					  	<p class="card-text">Ticket Booking Code:</p>
					    <h1 class="card-title"><b><?php echo $tiket; ?></b></h1>
					    <p><img src="<?php echo base_url('assets/frontend/upload/qrcode/'.$tiket) ?>.png"></p>
					    	<a href="<?php echo base_url('assets/frontend/upload/qrcode/'.$tiket) ?>.png" class="btn btn-danger" download>Download Qr Code</a> 
					    	<a href="<?php echo base_url('tiket/payment/'.$tiket) ?>" class="btn btn-success">Check Payment</a>
					    <br>
					    <p class="card-text">Please Save Your Booking Code And QrCode To Continue The Payment Process.</p>
					  </div>
					</div>
					</div>
			</section>
			<!-- End banner Area -->
			<!-- start footer Area -->
			<?php $this->load->view('frontend/include/base_footer'); ?>
			<!-- js -->
			<?php $this->load->view('frontend/include/base_js'); ?>
		</body>
	</html>