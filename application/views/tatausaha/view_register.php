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
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-table"></i>
						Data Register | <a href="<?php echo site_url('tata_usaha/add_register') ?>"><i class='fas fa-plus'></i>Tambah</a></div>
					<div class="card-body">
						 <?php
                            if ($this->session->alert) {?>
                                <div class="alert alert-success" role="alert">
                                 <?= $this->session->alert; ?>
                                </div>
                               <?php  
                            }?>
						<div class="table-responsive">
							<table class="table table-bordered table-sm table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead class="thead-inverse text-center">
									<tr>
										<th class="bg-primary text-light">No Surat</th>
										<th class="bg-primary text-light">Tanggal</th>
										<th class="bg-primary text-light">Perihal</th>
										<th class="bg-primary text-light">Pengirim</th>
										<th class="bg-primary text-light">tujuan</th>
										<th class="bg-primary text-light">aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										foreach ($register as $key) {?>
											<tr>
												<td><?= $key ['no_surat'];?></td>
												<td><?= $key ['tanggal'];?></td>
												<td><?= $key ['perihal'];?></td>	
												<td><?= $key ['pengirim'];?></td>
												<td><?= $key ['tujuan'];?></td>	
												<td><a href="<?php echo site_url('tata_usaha/update_register/'.$key ['id_register']) ?>"><i 	class='fas fa-pencil-alt'></i>Update</a>
												<br>
												<a href="<?php echo site_url('tata_usaha/delete_register/'.$key ['id_register']) ?>" class="text-danger"><i class='fas fa-trash-alt '></i>Delete</a>
												<br>
													<a href="<?php echo site_url('assets/file_surat/'.$key ['upload']) ?>" class="text-success"><i class='fas fa-pencil-alt'></i>Lihat Surat</a>
												</td>
												
											</tr>
										<?php }
									?>
								</tbody>
							</table>
						</div>
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
        
        <script>
            function deleteConfirm(url){
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>

</body>

</html>
