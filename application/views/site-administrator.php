<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<body class="animsition">
<div class="page-wrapper">
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
<!-- USER PAGE -->
<section class="statistic-chart">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<?php echo $this->session->flashdata('notif') ?>
			<!-- form input user -->
			<div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">[User Page] New user</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="<?php echo base_url() ?>index.php/SiteAdministrator/create">
								<div class="form-group">
									<label><b>Employee ID/NIP</b></label>
									<input type="number" name="username" class="form-control" placeholder="Employee ID/NIP..."/>
									<input type="hidden" name="user_create" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
									<input type="hidden" name="foto" class="form-control" value="default.png"/>
								</div>
								<div class="form-group">
									<label><b>Fullname</b></label>
									<input type="text" name="full_name" class="form-control" placeholder="Fullname..."/>
								</div>
								<div class="form-group">
									<label><b>Password</b></label>
									<input type="text" name="password" class="form-control" value="1234" placeholder="Password..." readonly/>
								</div>
								<div class="form-group">
									<label><b>Role</b></label>
									<select class="form-control" name="user_role">
										<option value="">-- Select Role --</option>
										<option value="Administrator">Administrator</option>
										<option value="Employee">Employee</option>
									</select>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="submit" name="submit" class="btn btn-success">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end form input user -->
						
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong>Site Adimistrator</strong> User
							<div class="box-tools pull-right">
								<button class="btn bg-olive btn-flat" stt data-toggle="modal" data-target="#inputdata"><i class="fa fa-plus"></i> New user</button>
							</div>
						</div>
						<div class="card-body card-block">
							<div class="table-responsive table--no-card m-b-30">
								<table id="example" class="table table-borderless table-striped table-earning" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Action</th>
											<th>No.</th>
											<th>User ID</th>
											<th>Employee ID/NIP</th>
											<th>Fullname</th>
											<th>Password</th>
											<th>Role</th>
											<th>User Create</th>
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

									$result = mysqli_query($con,"SELECT * FROM tb_user WHERE username !='NIP' ORDER BY user_id DESC");
									$no = 0;
									if(mysqli_num_rows($result)>0){

										while($row = mysqli_fetch_array($result))
										{
											$no++;
											echo "<tr>";
											echo "<td align= ''>
											<a href='#' data-toggle='modal' data-target='#update$row[user_id]' title='Edit'><span class='btn btn-outline-warning'><i class='fa fa-edit'></i></span></a>
											<a href='#' data-toggle='modal' data-target='#delete$row[user_id]' title='Delete'><span class='btn btn-outline-danger'><i class='fa fa-trash'></i></span></a>
											</td>";
											echo "<td>".$no.".</td>";
											echo "<td>".$row['user_id'] . "</td>";
											echo "<td>".$row['NIP'] . "</td>";
											echo "<td>".$row['full_name'] . "</td>";
											// echo "<td>".$row['username'] . "</td>";
											echo "<td align= ''>
											<a href='#' data-toggle='modal' data-target='#updatepass$row[user_id]' title='Edit'><span class='btn btn-outline-primary'><i class='fa fa-edit'></i>Change Password</span></a>
											</td>";
											if ($row['user_role']=='Employee'){
											echo "<td><span class='role user'>".$row['user_role'] . "</span></td>";
											}else{
											echo "<td><span class='role admin'>".$row['user_role'] . "</span></td>";
											}
											echo "<td>".$row['user_create'] . "</td>";
											echo "</tr>";
											?>

											<!-- Update user -->
											<div class="modal fade" id="update<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="mediumModalLabel">[User Page] Update User</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
														<?php echo form_open_multipart(site_url('SiteAdministrator/update/'.$row['user_id'])); ?>
															<div class="mx-auto d-block">
																<img class="rounded-circle mx-auto d-block" src="<?php echo base_url().'assets/images/users/'.$row['foto']; ?>" />
															</div>
															<div class="form-group">
																<label><b>Employee ID/NIP</b></label>
																<input type="text" class="form-control" value="<?php echo $row['username']; ?>" readonly disabled/>
																<input type="hidden" name="user_create" class="form-control" value="<?php echo date('Y-m-d'); ?>"/>
																<input type="hidden" name="foto" class="form-control" value="default.png"/>
															</div>
															<div class="form-group">
																<label><b>Fullname</b></label>
																<input type="text" class="form-control" value="<?php echo $row['full_name']; ?>" readonly disabled/>
															</div>
															<div class="form-group">
																<label><b>Role</b></label>
																<select class="form-control" name="user_role">
																	<option value="<?php echo $row['user_role']; ?>"><?php echo $row['user_role']; ?></option>
																	<option value="">-- Select Role --</option>
																	<option value="Administrator">Administrator</option>
																	<option value="Employee">Employee</option>
																</select>
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
											<!-- End Update user -->

											<!-- Update Password user -->
											<div class="modal fade" id="updatepass<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="mediumModalLabel">[User Page] Change Password user</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
														<?php echo form_open_multipart(site_url('SiteAdministrator/updatepassword/'.$row['user_id'])); ?>
															<div class="form-group">
																<label><b>New Password</b></label>
																<input type="password" class="form-control" placeholder="New Password..."/>
															</div>
															<div class="form-group">
																<label><b>Write Password again</b></label>
																<input type="password" name="password" class="form-control" placeholder="Write Password again..."/>
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
											<!-- End Update password user -->

											<!-- Delete Workbook -->
											<div class="modal fade" id="delete<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="mediumModalLabel">[User Page] Delete user</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
														<?php echo form_open_multipart(site_url('SiteAdministrator/delete/'.$row['user_id'])); ?>
															<div class="form-group">
																<label>Employee ID/NIP</label>
																<input type="text" class="form-control" value="<?php echo $row['NIP']; ?>" readonly/>
															</div>
															<div class="form-group">
																<label>Fullname</label>
																<input type="text" class="form-control" value="<?php echo $row['full_name']; ?>" readonly/>
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
	<!-- END DATA USER -->
<!-- COPYRIGHT-->
<?php require('include/footer.php'); ?>
<!-- END COPYRIGHT-->
</div>
</div>
<?php require('include/foot.php'); ?>
<?php require('include/jstable.php'); ?>
</body>
</html>