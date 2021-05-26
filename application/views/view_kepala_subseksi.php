<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<!-- load file head -->
	<?php $this->load->view('_template/head.php'); ?>
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
	  var OneSignal = window.OneSignal || [];
	  OneSignal.push(function() {
	    OneSignal.init({
	      appId: "35eb7a86-1d06-4462-8afc-7d726f1ca919",
	    });
	  });
	</script>
	<!-- ========================== -->
</head>

<!-- load file navbar  -->
<?php $this->load->view('_template/navbar.php'); ?>
<!-- ==========================  -->

<body id="page-top">

	<div id="wrapper">

		<!-- load file sidebar  -->
		<?php $this->load->view('_template/sidebar.php'); ?>
		<!-- =======================   -->

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- load file Breadcrumbs-->
				<?php $this->load->view('_template/breadcrumbs.php'); ?>
				<!-- ========================== -->

				<div class="card">
					<div class="card-header">
					</div>
					<div class="card-body">
						<h2 class="card-title">
						SELAMAT DATANG DI SISTEM INFORMASI REGISTER DAN DIPOSISI SURAT BPN (BADAN PERTANAHAN NASIONAL)
						</h2>						
					</div>
				</div>
					

			</div>
			<!-- /.container-fluid -->

			<!-- load file Sticky Footer -->
			<?php $this->load->view('_template/footer.php'); ?>
			<!-- ------------------------- -->

			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- load file Scroll to Top Button-->
		<?php $this->load->view('_template/scrolltop.php'); ?>
		<!-- ---------------------------- -->

		<!-- load file Modal-->
		<?php $this->load->view('_template/modal.php'); ?>
		<!-- ------------------------- -->

		<!-- Bootstrap core JavaScript-->
		<?php $this->load->view('_template/js.php'); ?>
		<!-- ------------------------------  -->

</body>

</html>
