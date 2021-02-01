<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<body class="animsition">
<div class="page-wrapper">
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
<!-- EPPM -->
<section class="statistic-chart">
	<div class="container">
		<div class="row">
		<div class="col-lg-12">
		<?php echo $this->session->flashdata('notif') ?>
		<!-- form input EPPM -->
		<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mediumModalLabel">[EPPM Page] Add EPPM</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo form_open_multipart(site_url('AssignEmployee/create'));?>
							<div class="form-group">
								<label><b>Employee ID/NIP</b></label>
								<input type="number" class="form-control" placeholder="Employee ID/NIP..." name="NIP">
							</div>
							<div class="form-group">
								<label><b>Full Name</b></label>
								<input type="text" class="form-control" placeholder="Full Name..." name="username">
							</div>
							<div class="form-group">
								<label><b>Email</b></label>
								<input type="email" class="form-control" placeholder="Email..." name="email">
							</div>
							<div class="form-group">
								<label><b>Start Time</b></label>
								<input type="datetime-local" class="form-control" placeholder="Email..." name="start_time">
							</div>
							<div class="form-group">
								<label><b>Score</b></label>
								<input type="text" class="form-control" placeholder="Score..." name="score">
							</div>
							<div class="form-group">
								<label><b>Status</b></label>
								<input type="text" class="form-control" placeholder="Status..." name="status">
							</div>
							<div class="form-group">
								<label><b>Dateline Crouse</b></label>
								<input type="datetime-local" class="form-control" placeholder="Email..." name="deadline_course">
							</div>
							<div class="form-group">
								<label><b>Cleare Time</b></label>
								<input type="datetime-local" class="form-control" placeholder="Email..." name="clear_time">
							</div>
							<div class="form-group">
								<label><b>Directorate</b></label>
								<input type="text" class="form-control" placeholder="Directorate..." name="directorate">
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-success" name="submit">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end form input EPPM -->

		<!-- form upload csv -->
		<div class="modal fade" id="uploadmediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mediumModalLabel">[EPPM Page] Upload EPPM</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="<?php echo base_url() ?>index.php/AssignEmployee/upload" enctype="multipart/form-data">
							<div class="form-group">
								<label><b>Upload</b></label>
								<input type="hidden" name="status_upload" class="form-control" value="<?php echo $this->session->userdata("fullname"); ?>"/>
								<input type="hidden" name="tgl_upload" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
								<input type="file" name="userfile" class="form-control" placeholder="Upload Scan Lembar Pengesahan..." name="" />
								<p>
									<font style="font-size: 12px">Upload extension ".xlsx & xls" max 1000MB</font>
								</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-success">Upload</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end form upload csv -->
					
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong>EPPM</strong> Form
						<div class="box-tools pull-right">
							<button class="btn bg-olive btn-flat" stt data-toggle="modal" data-target="#mediumModal"><i class="fa fa-plus"></i> Input EPPM</button>
							<button class="btn bg-olive btn-flat" data-toggle="modal" data-target="#uploadmediumModal"><i class="fa fa-file-excel-o"></i>  Import Data EPPM</button>
							<!-- <a href="<?php echo base_url()."index.php/Excel"; ?>"><span class="btn bg-olive btn-flat"><i class="fa fa-download"></i>  Download Templete Excel</span></a> -->
						</div>
					</div>
					<div class="card-body card-block">
						<div class="table-responsive table--no-card m-b-30">
							<table id="example" class="table table-borderless table-striped table-earning" cellspacing="0" width="100%">
							<!-- <table class="table table-borderless table-striped table-earning"> -->
								<thead>
									<tr>
										<th>Action</th>
										<th>No.</th>
										<th>Employee ID/NIP</th>
										<th>Full Name</th>
										<th>Email</th>
										<th>Start Time</th>
										<th>Posttest Score</th>
										<th>Status</th>
										<th>Deadline Course</th>
										<th>clear Time</th>
										<th>Directorate</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$con=mysqli_connect("localhost","root","","db_riandaka");
										// Check connection
								if (mysqli_connect_errno())
								{
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$result = mysqli_query($con,"SELECT * FROM tb_eppm ORDER BY employee_id DESC");
								$no = 0;
								if(mysqli_num_rows($result)>0){

									while($row = mysqli_fetch_array($result))
									{
										$no++;
										echo "<tr>";
										echo "<td align= ''>
										<a href='#' data-toggle='modal' data-target='#update$row[employee_id]' title='Edit'><span class='btn btn-outline-warning'><i class='fa fa-edit'></i></span></a>
										<a href='#' data-toggle='modal' data-target='#delete$row[employee_id]' title='Delete'><span class='btn btn-outline-danger'><i class='fa fa-trash'></i></span></a>
										</td>";
										echo "<td>".$no.".</td>";
										echo "<td>".$row['NIP'] . "</td>";
										echo "<td>".$row['username'] . "</td>";
										echo "<td>".$row['email'] . "</td>";
										echo "<td>".$row['start_time'] . "</td>";
										echo "<td>".$row['score'] . "</td>";
										echo "<td>".$row['status'] . "</td>";
										echo "<td>".$row['deadline_course'] . "</td>";
										echo "<td>".$row['clear_time'] . "</td>";
										echo "<td>".$row['directorate'] . "</td>";
										echo "</tr>";
										?>
									<!-- Edit EPPM -->
									<div class="modal fade" id="update<?php echo $row['employee_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">[EPPM Page] Update EPPM</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- <form action="" method="POST"> -->
													<?php echo form_open_multipart(site_url('AssignEmployee/update/'.$row['employee_id'])); ?>
														<div class="form-group">
															<label><b>Employee ID/NIP</b></label>
															<input type="number" class="form-control" value="<?php echo $row['NIP']; ?>" placeholder="Employee ID/NIP..." name="NIP">
														</div>
														<div class="form-group">
															<label><b>Full Name</b></label>
															<input type="text" class="form-control" value="<?php echo $row['username']; ?>" placeholder="Full Name..." name="username">
														</div>
														<div class="form-group">
															<label><b>Email</b></label>
															<input type="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email..." name="email">
														</div>
														<div class="form-group">
															<label><b>Start Time</b></label>
															<input type="datetime-local" class="form-control" value="<?php echo $row['start_time']; ?>" placeholder="Email..." name="start_time">
														</div>
														<div class="form-group">
															<label><b>Score</b></label>
															<input type="text" class="form-control" value="<?php echo $row['score']; ?>" placeholder="Score..." name="score">
														</div>
														<div class="form-group">
															<label><b>Status</b></label>
															<input type="text" class="form-control" value="<?php echo $row['status']; ?>" placeholder="Status..." name="status">
														</div>
														<div class="form-group">
															<label><b>Dateline Crouse</b></label>
															<input type="datetime-local" class="form-control" value="<?php echo $row['deadline_course']; ?>" placeholder="Email..." name="deadline_course">
														</div>
														<div class="form-group">
															<label><b>Cleare Time</b></label>
															<input type="datetime-local" class="form-control" value="<?php echo $row['deadline_course']; ?>" placeholder="Email..." name="clear_time">
														</div>
														<div class="form-group">
															<label><b>Directorate</b></label>
															<input type="text" class="form-control" value="<?php echo $row['directorate']; ?>" placeholder="Directorate..." name="directorate">
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
														<button type="submit" class="btn btn-success" name="update">Update</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- end form Edit EPPM -->
										
									<!-- Delete EPPM -->
									<div class="modal fade" id="delete<?php echo $row['employee_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">[EPPM Page] Delete Employee</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
												<?php echo form_open_multipart(site_url('AssignEmployee/delete/'.$row['employee_id'])); ?>
													<div class="form-group">
														<label>Employee ID/NIP</label>
														<input type="text" class="form-control" value="<?php echo $row['employee_id']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>Full Name</label>
														<input type="text" class="form-control" value="<?php echo $row['username']; ?>" readonly/>
													</div>
													<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													<button type="submit" class="btn btn-success" name="delete">Delete</button>
													</div>
												</form>
												</div>
											</div>
										</div>
									</div>
									<!-- End Delete EPPM-->
									<?php
										}
										} else {
										echo "<tr>";
										echo "<td colspan='11' align='center'>"."<b>"."<i>" . "Tidak Ada Data" . "</i>". "</b>" . "</td>";
										echo "</tr>";
										} 
										mysqli_close($con);
									?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END RAPORT CHART-->

<!-- COPYRIGHT-->
<?php require('include/footer.php'); ?>
<!-- END COPYRIGHT-->
</div>
</div>
<?php require('include/foot.php'); ?>
<?php require('include/jstable.php'); ?>
</body>
</html>
<!-- end document-->
