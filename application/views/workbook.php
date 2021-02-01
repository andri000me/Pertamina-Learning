<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<body class="animsition">
<div class="page-wrapper">
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
<!-- WORKBOOK -->
<section class="statistic-chart">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<?php echo $this->session->flashdata('notif') ?>
			<!-- form input workbook -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">[Workbook Page] Add Workbook</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- <form action="" method="POST"> -->
							<?php echo form_open_multipart(site_url('Workbook/create'));?>
								<div class="form-group">
									<label><b>Timestamp</b></label>
									<input type="hidden" name="status_upload" class="form-control" value="<?php echo $this->session->userdata("fullname"); ?>"/>
									<input type="hidden" name="tgl_upload" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
									<input type="datetime-local" class="form-control" name="timestamp">
								</div>
								<div class="form-group">
									<label><b>EMployee ID/NIP</b></label>
									<input type="number" class="form-control" placeholder="EMployee ID/NIP..." name="employee_id">
								</div>
								<div class="form-group">
									<label><b>Fullname</b></label>
									<input type="text" class="form-control" placeholder="Fullname..." name="name_employee">
								</div>
								<div class="form-group">
									<label><b>1.1 Work Breakdown Structure</b></label>
									<!-- <input type="text" class="form-control" placeholder="1.1 Work Breakdown Structure..." name="module_1_1"> -->
									<select class="form-control" name="module_1_1">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>1.2 Cost Breakdown Structure</b></label>
									<!-- <input type="text" class="form-control" placeholder="1.2 Cost Breakdown Structure..." name="module_1_2"> -->
									<select class="form-control" name="module_1_2">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>2.1 Concept & Business Case Optimization</b></label>
									<!-- <input type="text" class="form-control" placeholder="2.1 Concept & Business Case Optimization..." name="module_2_1"> -->
									<select class="form-control" name="module_2_1">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>2.2 Cost Estimation & Capital Budgeting</b></label>
									<!-- <input type="text" class="form-control" placeholder="2.2 Cost Estimation & Capital Budgeting..." name="module_2_2"> -->
									<select class="form-control" name="module_2_2">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>3.1 Project KPI</b></label>
									<!-- <input type="text" class="form-control" placeholder="3.1 Project KPI..." name="module_3_1"> -->
									<select class="form-control" name="module_3_1">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>3.2 Visual Dashboard</b></label>
									<!-- <input type="text" class="form-control" placeholder="3.2 Visual Dashboard..." name="module_3_2"> -->
									<select class="form-control" name="module_3_2">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>3.3 Risk Management</b></label>
									<!-- <input type="text" class="form-control" placeholder="3.3 Risk Management..." name="module_3_3"> -->
									<select class="form-control" name="module_3_3">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>4.1 High Level Contracting & Procurement Strategy</b></label>
									<!-- <input type="text" class="form-control" placeholder="4.1 High Level Contracting & Procurement Strategy..." name="module_4_1"> -->
									<select class="form-control" name="module_4_1">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>4.2 Detailed Contracting & Procurement Strategy</b></label>
									<!-- <input type="text" class="form-control" placeholder="4.2 Detailed Contracting & Procurement Strategy..." name="module_4_2"> -->
									<select class="form-control" name="module_4_2">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>4.3 Level of Owner Integration</b></label>
									<!-- <input type="text" class="form-control" placeholder="4.3 Level of Owner Integration..." name="module_4_3"> -->
									<select class="form-control" name="module_4_3">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>5.1 Contract Structure, Terms & Condition</b></label>
									<!-- <input type="text" class="form-control" placeholder="5.1 Contract Structure, Terms & Condition..." name="module_5_1"> -->
									<select class="form-control" name="module_5_1">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>6.1 Crisis Response System</b></label>
									<!-- <input type="text" class="form-control" placeholder="6.1 Crisis Response System..." name="module_6_1"> -->
									<select class="form-control" name="module_6_1">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>6.2 Cross Functional Commissioning Teams</b></label>
									<!-- <input type="text" class="form-control" placeholder="6.2 Cross Functional Commissioning Teams..." name="module_6_2"> -->
									<select class="form-control" name="module_6_2">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>6.3 Integrated Commissioning Planning</b></label>
									<!-- <input type="text" class="form-control" placeholder="6.3 Integrated Commissioning Planning..." name="module_6_3"> -->
									<select class="form-control" name="module_6_3">
										<option value="">-- Select Progress Employee --</option>
										<option value="Not Yet Started.">Not Yet Started.</option>
										<option value="On Progress.">On Progress.</option>
										<option value="Done. Acc.">Done. Acc.</option>
									</select>
								</div>
								<div class="form-group">
									<label><b>Upload Scan Lembar Pengesahan</b></label>
									<input type="file" class="form-control" name="scan_lp" required>
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
			<!-- end form input workbook -->

			<!-- form upload csv workbook -->
			<div class="modal fade" id="uploadmediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">[Workbook Page] Upload Data Ecxel Workbook</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="<?php echo base_url() ?>index.php/Workbook/upload" enctype="multipart/form-data">
								<div class="form-group">
									<label><b>Upload Workbook</b></label>
									<input type="hidden" name="status_upload" class="form-control" value="<?php echo $this->session->userdata("fullname"); ?>"/>
									<input type="hidden" name="tgl_upload" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
									<input type="file" name="userfile" class="form-control" name="" />
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
			<!-- end form upload csv workbook -->

					
			<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong>Workbook</strong> Form
						<div class="box-tools pull-right">
							<button class="btn bg-olive btn-flat" stt data-toggle="modal" data-target="#mediumModal"><i class="fa fa-plus"></i> Input Penilian Employee</button>
							<button class="btn bg-olive btn-flat" data-toggle="modal" data-target="#uploadmediumModal"><i class="fa fa-file-excel-o"></i>  Import Data Workbook</button>
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
										<th>Workbook ID</th>
										<th>Timestamp</th>
										<th>Employee ID/NIP</th>
										<th>Fullname</th>
										<th>Modul</th>
										<th>Lembar Pengesahan</th>
										<th>Tanggal Upload</th>
										<th>Status Upload</th>
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

								$result = mysqli_query($con,"SELECT * FROM tb_workbook ORDER BY workbook_id DESC");
								$no = 0;
								if(mysqli_num_rows($result)>0){

									while($row = mysqli_fetch_array($result))
									{
										$no++;
										echo "<tr>";
										echo "<td align= ''>
										<a href='#' data-toggle='modal' data-target='#update$row[workbook_id]' title='Edit'><span class='btn btn-outline-warning'><i class='fa fa-edit'></i></span></a>
										<a href='#' data-toggle='modal' data-target='#delete$row[workbook_id]' title='Delete'><span class='btn btn-outline-danger'><i class='fa fa-trash'></i></span></a>
										</td>";
										echo "<td>".$no.".</td>";
										echo "<td>".$row['workbook_id'] . "</td>";
										echo "<td>".$row['timestamp'] . "</td>";
										echo "<td>".$row['employee_id'] . "</td>";
										echo "<td>".$row['name_employee'] . "</td>";
										echo "<td align= ''>
										<a href='#' data-toggle='modal' data-target='#modul$row[workbook_id]' title='View Modul'><span class='btn btn-outline-primary'><i class='fa fa-eye'></i></span></a>
										</td>";
										if ($row['scan_lp']=='No Action'){
										echo "<td><a href='#' data-toggle='modal' data-target='#scan$row[workbook_id]' title='Upload File'><span class='btn btn-outline-success'><i class='fa fa-plus'></i></span></a></td>";
										}else{
										echo "<td><a href='./assets/PDF/$row[scan_lp]' target='_blank' title='View Lembar Pengesahan'><span class='btn btn-outline-danger'><i class='fa fa-file'></i></span></a></td>";
										}
										echo "<td>".$row['tgl_upload'] . "</td>";
										echo "<td>".$row['status_upload'] . "</td>";
										echo "</tr>";
										?>
									<!-- Workbook Edit Workbook -->
									<div class="modal fade" id="update<?php echo $row['workbook_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">[Workbook Page] Update Workbook</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- <form action="" method="POST"> -->
													<?php echo form_open_multipart(site_url('Workbook/update/'.$row['workbook_id'])); ?>
														<div class="form-group">
															<label><b>Timestamp</b></label>
															<input type="hidden" name="status_upload" class="form-control" value="<?php echo $this->session->userdata("fullname"); ?>"/>
															<input type="hidden" name="tgl_upload" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
															<input type="datetime-local" class="form-control" name="timestamp" value="<?php echo $row['timestamp']; ?>">
														</div>
														<div class="form-group">
															<label><b>Employee ID/NIP</b></label>
															<input type="text" class="form-control" placeholder="Employee ID/NIP..." value="<?php echo $row['employee_id']; ?>" readonly disabled>
														</div>
														<div class="form-group">
															<label><b>Fullname</b></label>
															<input type="text" class="form-control" placeholder="Fullname..." value="<?php echo $row['name_employee']; ?>" readonly disabled>
														</div>
														<div class="form-group">
															<label><b>1.1 Work Breakdown Structure</b></label>
															<select class="form-control" name="module_1_1">
																<option value="<?php echo $row['module_1_1']; ?>"><?php echo $row['module_1_1']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>1.2 Cost Breakdown Structure</b></label>
															<select class="form-control" name="module_1_2">
																<option value="<?php echo $row['module_1_2']; ?>"><?php echo $row['module_1_2']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>2.1 Concept & Business Case Optimization</b></label>
															<select class="form-control" name="module_2_1">
																<option value="<?php echo $row['module_2_1']; ?>"><?php echo $row['module_2_1']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>2.2 Cost Estimation & Capital Budgeting</b></label>
															<select class="form-control" name="module_2_2">
																<option value="<?php echo $row['module_2_2']; ?>"><?php echo $row['module_2_2']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>3.1 Project KPI</b></label>
															<select class="form-control" name="module_3_1">
																<option value="<?php echo $row['module_3_1']; ?>"><?php echo $row['module_3_1']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>3.2 Visual Dashboard</b></label>
															<select class="form-control" name="module_3_2">
																<option value="<?php echo $row['module_3_2']; ?>"><?php echo $row['module_3_2']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>3.3 Risk Management</b></label>
															<select class="form-control" name="module_3_3">
																<option value="<?php echo $row['module_3_2']; ?>"><?php echo $row['module_3_2']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>4.1 High Level Contracting & Procurement Strategy</b></label>
															<select class="form-control" name="module_4_1">
																<option value="<?php echo $row['module_4_1']; ?>"><?php echo $row['module_4_1']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>4.2 Detailed Contracting & Procurement Strategy</b></label>
															<select class="form-control" name="module_4_2">
																<option value="<?php echo $row['module_4_2']; ?>"><?php echo $row['module_4_2']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>4.3 Level of Owner Integration</b></label>
															<select class="form-control" name="module_4_3">
																<option value="<?php echo $row['module_4_3']; ?>"><?php echo $row['module_4_3']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>5.1 Contract Structure, Terms & Condition</b></label>
															<select class="form-control" name="module_5_1">
																<option value="<?php echo $row['module_5_1']; ?>"><?php echo $row['module_5_1']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>6.1 Crisis Response System</b></label>
															<select class="form-control" name="module_6_1">
																<option value="<?php echo $row['module_6_1']; ?>"><?php echo $row['module_6_1']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>6.2 Cross Functional Commissioning Teams</b></label>
															<select class="form-control" name="module_6_2">
																<option value="<?php echo $row['module_6_2']; ?>"><?php echo $row['module_6_2']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<div class="form-group">
															<label><b>6.3 Integrated Commissioning Planning</b></label>
															<select class="form-control" name="module_6_3">
																<option value="<?php echo $row['module_6_3']; ?>"><?php echo $row['module_6_3']; ?></option>
																<option value="">-- Select Progress Employee --</option>
																<option value="Not Yet Started.">Not Yet Started.</option>
																<option value="On Progress.">On Progress.</option>
																<option value="Done. Acc.">Done. Acc.</option>
															</select>
														</div>
														<!-- <div class="form-group">
															<label><b>Upload Scan Lembar Pengesahan</b></label>
															<input type="file" class="form-control" name="scan_lp" value="<?php echo $row['scan_lp']; ?>">
														</div> -->
														<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
														<button type="submit" class="btn btn-success" name="update">Update</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- end Edit Workbook -->

									<!-- Workbook upload "No Action" Workbook -->
									<div class="modal fade" id="scan<?php echo $row['workbook_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">[Workbook Page] Upload File Workbook</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- <form action="" method="POST"> -->
													<?php echo form_open_multipart(site_url('Workbook/uploadfile/'.$row['workbook_id'])); ?>
														<div class="form-group">
															<label><b>Employee ID/NIP</b></label>
															<input type="text" class="form-control" placeholder="Employee ID/NIP..." value="<?php echo $row['employee_id']; ?>" readonly disabled>
														</div>
														<div class="form-group">
															<label><b>Fullname</b></label>
															<input type="text" class="form-control" placeholder="Fullname..." value="<?php echo $row['name_employee']; ?>" readonly disabled>
														</div>
														<div class="form-group">
															<label><b>Upload Scan Lembar Pengesahan</b></label>
															<input type="file" class="form-control" name="scan_lp" value="<?php echo $row['scan_lp']; ?>">
														</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
														<button type="submit" class="btn btn-success" name="uploadfile">Upload</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- end upload "No Action" Workbook -->

									<!-- View Modul -->
									<div class="modal fade" id="modul<?php echo $row['workbook_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">[Workbook Page] View Modul</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="form-group">
															<label><b>Employee ID/NIP</b></label>
															<input type="text" class="form-control" placeholder="Employee ID/NIP..." value="<?php echo $row['employee_id']; ?>" readonly disabled>
														</div>
														<div class="form-group">
															<label><b>Fullname</b></label>
															<input type="text" class="form-control" placeholder="Fullname..." value="<?php echo $row['name_employee']; ?>" readonly disabled>
														</div>
													<div class="form-group">
														<label>1.1 Work Breakdown Structure</label>
														<input type="text" class="form-control" value="<?php echo $row['module_1_1']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>1.2 Cost Breakdown Structure</label>
														<input type="text" class="form-control" value="<?php echo $row['module_1_2']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>2.1 Concept & Business Case Optimization</label>
														<input type="text" class="form-control" value="<?php echo $row['module_2_1']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>2.2 Cost Estimation & Capital Budgeting</label>
														<input type="text" class="form-control" value="<?php echo $row['module_2_2']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>3.1 Project KPI</label>
														<input type="text" class="form-control" value="<?php echo $row['module_3_1']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>3.2 Visual Dashboard</label>
														<input type="text" class="form-control" value="<?php echo $row['module_3_2']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>3.3 Risk Management</label>
														<input type="text" class="form-control" value="<?php echo $row['module_3_3']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>4.1 High Level Contracting & Procurement Strategy</label>
														<input type="text" class="form-control" value="<?php echo $row['module_4_1']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>4.2 Detailed Contracting & Procurement Strategy</label>
														<input type="text" class="form-control" value="<?php echo $row['module_4_2']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>4.3 Level of Owner Integration</label>
														<input type="text" class="form-control" value="<?php echo $row['module_4_3']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>5.1 Contract Structure, Terms & Condition</label>
														<input type="text" class="form-control" value="<?php echo $row['module_5_1']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>6.1 Crisis Response System</label>
														<input type="text" class="form-control" value="<?php echo $row['module_6_1']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>6.2 Cross Functional Commissioning Teams</label>
														<input type="text" class="form-control" value="<?php echo $row['module_6_2']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>6.3 Integrated Commissioning Planning</label>
														<input type="text" class="form-control" value="<?php echo $row['module_6_3']; ?>" readonly/>
													</div>
													<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End View Modul -->
										
									<!-- Delete Workbook -->
									<div class="modal fade" id="delete<?php echo $row['workbook_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="mediumModalLabel">[Workbook Page] Delete Workbook</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
												<?php echo form_open_multipart(site_url('Workbook/delete/'.$row['workbook_id'])); ?>
													<div class="form-group">
														<label>ID</label>
														<input type="text" class="form-control" value="<?php echo $row['workbook_id']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>Employee ID/NIP</label>
														<input type="text" class="form-control" value="<?php echo $row['employee_id']; ?>" readonly/>
													</div>
													<div class="form-group">
														<label>Fullname</label>
														<input type="text" class="form-control" value="<?php echo $row['name_employee']; ?>" readonly/>
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
									<!-- End Delete Workbook -->
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
		<!-- END WORKBOOK-->

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
