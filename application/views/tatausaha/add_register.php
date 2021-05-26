<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<!-- load file head -->
	<?php $this->load->view('_template/head.php'); ?>
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
				<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-plus"></i>
						Tambah Register
					</div>

					<div class="card-body">
						<form action="<?php base_url('tata_usaha/add_register') ?>" method="post" enctype="multipart/form-data">


						<!-- ================= -->

							<div class="form-group col-6">
								<label for="">No surat</label>
								<input type="text" class="form-control" name="no_surat"
								 id="no_surat" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan No Surat</small>
								<div class="invalid-feedback">
									<?php echo form_error('no_surat') ?>
								</div>
							</div>
							<div class="form-groupn col-6 mb-3">
								<label for="">Tanggal</label>
								<input type="date" class="form-control" name="tanggal"
								 id="tanggal" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan Tanggal</small>
								<div class="invalid-feedback "> 
									<?php echo form_error('tanggal') ?>
								</div>
							</div>
							<div class="form-group col-6">
								<label for="">Perihal</label>
								<input type="text" class="form-control" name="perihal"
								 id="perihal" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Perihal</small>
								<div class="invalid-feedback">
									// <?php echo form_error('perihal') ?>
								</div>
							</div>
							<div class="form-group col-6">
								<label for="">Pengirim</label>
								<input type="text" class="form-control" name="pengirim"
								 id="pengirim" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan Pengirim</small>
								<div class="invalid-feedback">
									// <?php echo form_error('pengirim') ?>
								</div>
							</div>
							<div class="form-group col-6">
								<label for="">Tujuan</label>
								<input type="text" class="form-control" name="tujuan"
								 id="tujuan" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan Tujuan</small>
								<div class="invalid-feedback">
									<?php echo form_error('tujuan') ?>
								</div>
							</div>
							<div class="form-group col-6">
								<label for="">Upload</label>
								<input type="file" class="form-control" name="upload"
								 id="tujuan" aria-describedby="helpId" placeholder="">
								<small id="helpId" class="form-text text-muted">Masukkan surat</small>
							</div>
							<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button> 
							<a href="<?php echo site_url('admin/tampil_user') ?>"
							 class="btn btn-primary"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>

							<!-- ============== -->

						</form>
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
