<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<body class="animsition">
<div class="page-wrapper">
<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
<!-- RAPORT -->
<section class="statistic-chart">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<?php echo $this->session->flashdata('notif') ?>
			<!-- form input assessment -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">[Assessment Page] Add Penilaian Assessment</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- <form action="" method="POST"> -->
							<?php echo form_open_multipart(site_url('Assessment/create'));?>
								<div class="form-group">
									<label><b>Pilih Employee Name</b></label>
									<select class="form-control" name="NIP">
										<option>-- Select Employee name ---</option>
										 <?php
										$con=mysqli_connect("localhost","root","","db_riandaka");
										if (mysqli_connect_errno())
										{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}

										$get_reviewer = mysqli_query($con,"SELECT NIP,full_name FROM tb_user WHERE user_role !='Administrator' AND username!='NIP'");
										while($row_reviewer = mysqli_fetch_array($get_reviewer)) {
										?>
										<option value="<?= $row_reviewer['NIP'] ?>"><b><?= $row_reviewer['NIP'] ?></b> | <?= $row_reviewer['full_name'] ?></option>';
										<?php } ?>
									</select>
								</div>
								<div align="center">
								<h1>Teori</h1>
								</div>
								<div class="form-group">
									<label><b>Definisi</b></label>
									<div class="input-group">
										<span class="input-group-addon">%</span>
										<input type="text" class="form-control" placeholder="Definisi..." name="defenisi">
										<input type="hidden" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="periode">
									</div>
								</div>
								<div class="form-group">
									<label><b>Tujuan</b></label>
									<div class="input-group">
										<span class="input-group-addon">%</span>
										<input type="text" class="form-control" placeholder="Tujuan..." name="tujuan">
									</div>
								</div>
								<div class="form-group">
									<label><b>Proses Penyusunan / Pelaksanaan</b></label>
									<div class="input-group">
										<span class="input-group-addon">%</span>
										<input type="text" class="form-control" placeholder="Proses Penyusunan / Pelaksanaan..." name="proses">
									</div>
								</div>
								<div align="center">
								<h1>Praktik</h1>
								</div>
								<div class="form-group">
									<label><b>Contoh praktik modul di Pertamina</b></label>
									<div class="input-group">
										<span class="input-group-addon">%</span>
										<input type="text" class="form-control" placeholder="Contoh praktik modul di Pertamina..." name="contoh">
									</div>
								</div>
								<div class="form-group">
									<label><b>Analisis Masalah / <i>Gap</i></b></label>
									<div class="input-group">
										<span class="input-group-addon">%</span>
										<input type="text" class="form-control" placeholder="Analisis Masalah / Gap..." name="analisis">
									</div>
								</div>
								<div class="form-group">
									<label><b>Solusi / <i>Improvement</i></b></label>
									<div class="input-group">
										<span class="input-group-addon">%</span>
										<input type="text" class="form-control" placeholder="Solusi / Improvement..." name="solusi">
									</div>
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
			<!-- end form input assessment workbook -->
					
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<strong>Konsep Penilaian Assessment EPPM</strong> Form
							<div class="box-tools pull-right">
								<button class="btn bg-olive btn-flat" stt data-toggle="modal" data-target="#mediumModal"><i class="fa fa-plus"></i> Input Penilaian Assessment</button>
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
											<th>ID Assessment</th>
											<th>Employee ID/NIP</th>
											<th>Fullname</th>
											<th>Periode</th>
											<!-- <th>Defenisi</th>
											<th>Tujuan</th>
											<th>Proses Penyusunan / Pelaksanaan</th>
											<th>Contoh praktik modul di Pertamina</th>
											<th>Analisis Masalah / Gap</th>
											<th>Solusi / Improvement</th>
											<th>Total Bobot Teori</th>
											<th>Total Bobot Praktik</th>
											<th>Standar Nilai Kelulusan</th> -->
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

									$result = mysqli_query($con,"SELECT a.id_pen,a.defenisi,a.tujuan,a.proses,a.contoh,a.analisis,a.solusi,a.periode,b.NIP,b.full_name,
																SUM(a.defenisi + a.tujuan + a.proses) AS TotalTeori, 
																SUM(a.contoh + a.analisis + a.solusi) AS TotalPraktik,
																SUM(a.defenisi + a.tujuan + a.proses + a.contoh + a.analisis + a.solusi) AS Total
																FROM tb_penilaian a JOIN tb_user b
																ON a.NIP=b.NIP GROUP BY a.id_pen DESC");
									$no = 0;
									if(mysqli_num_rows($result)>0){

										while($row = mysqli_fetch_array($result))
										{
											$no++;
											echo "<tr>";
											echo "<td align= ''>
											<a href='#' data-toggle='modal' data-target='#detail$row[id_pen]' title='Detail'><span class='btn btn-outline-primary'><i class='fa fa-eye'></i></span></a>
											<a href='#' data-toggle='modal' data-target='#update$row[id_pen]' title='Edit'><span class='btn btn-outline-warning'><i class='fa fa-edit'></i></span></a>
											<a href='#' data-toggle='modal' data-target='#delete$row[id_pen]' title='Delete'><span class='btn btn-outline-danger'><i class='fa fa-trash'></i></span></a>
											</td>";
											echo "<td>".$no.".</td>";
											echo "<td>".$row['id_pen'] . "</td>";
											echo "<td>".$row['NIP'] . "</td>";
											echo "<td>".$row['full_name'] . "</td>";
											echo "<td>".$row['periode'] . "</td>";
											// echo "<td>".$row['defenisi'] . "%</td>";
											// echo "<td>".$row['tujuan'] . "%</td>";
											// echo "<td>".$row['proses'] . "%</td>";
											// echo "<td>".$row['contoh'] . "%</td>";
											// echo "<td>".$row['analisis'] . "%</td>";
											// echo "<td>".$row['solusi'] . "%</td>";
											// echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['TotalTeori'] . "</b>%</td>";
											// echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['TotalPraktik'] . "</b>%</td>";
											// echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['Total'] . "</b>%</td>";
											echo "</tr>";
											?>
										<!-- Workbook Edit Assessment -->
										<div class="modal fade" id="update<?php echo $row['id_pen'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="mediumModalLabel">[Assessment Page] Update Penilaian Assessment</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<!-- <form action="" method="POST"> -->
														<?php echo form_open_multipart(site_url('Assessment/update/'.$row['id_pen'])); ?>
															<div class="form-group">
																<label><b>NIP</b></label>
																<input type="text" class="form-control" value="<?php echo $row['NIP']; ?>" readonly>
															</div>
															<div class="form-group">
																<label><b>Employee name</b></label>
																<input type="text" class="form-control" value="<?php echo $row['full_name']; ?>" readonly>
															</div>
															<div align="center">
															<h1>Teori</h1>
															</div>
															<div class="form-group">
																<label><b>Definisi</b></label>
																<div class="input-group">
																	<span class="input-group-addon">%</span>
																	<input type="text" class="form-control" value="<?php echo $row['defenisi']; ?>" name="defenisi">
																</div>
															</div>
															<div class="form-group">
																<label><b>Tujuan</b></label>
																<div class="input-group">
																	<span class="input-group-addon">%</span>
																	<input type="text" class="form-control" value="<?php echo $row['tujuan']; ?>" name="tujuan">
																</div>
															</div>
															<div class="form-group">
																<label><b>Proses Penyusunan / Pelaksanaan</b></label>
																<div class="input-group">
																	<span class="input-group-addon">%</span>
																	<input type="text" class="form-control" value="<?php echo $row['proses']; ?>" name="proses">
																</div>
															</div>
															<div align="center">
															<h1>Praktik</h1>
															</div>
															<div class="form-group">
																<label><b>Contoh praktik modul di Pertamina</b></label>
																<div class="input-group">
																	<span class="input-group-addon">%</span>
																	<input type="text" class="form-control" value="<?php echo $row['contoh']; ?>" name="contoh">
																</div>
															</div>
															<div class="form-group">
																<label><b>Analisis Masalah / <i>Gap</i></b></label>
																<div class="input-group">
																	<span class="input-group-addon">%</span>
																	<input type="text" class="form-control" value="<?php echo $row['analisis']; ?>" name="analisis">
																</div>
															</div>
															<div class="form-group">
																<label><b>Solusi / <i>Improvement</i></b></label>
																<div class="input-group">
																	<span class="input-group-addon">%</span>
																	<input type="text" class="form-control" value="<?php echo $row['solusi']; ?>" name="solusi">
																</div>
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
										<!-- end form Edit assessment -->
											
										<!-- Delete Assessment -->
										<div class="modal fade" id="delete<?php echo $row['id_pen'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="mediumModalLabel">[Assessment Page] Delete Penilaian Assessment</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
													<?php echo form_open_multipart(site_url('Assessment/delete/'.$row['id_pen'])); ?>
														<div class="form-group">
															<label>Assessment ID</label>
															<input type="text" class="form-control" value="<?php echo $row['id_pen']; ?>" readonly/>
														</div>
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
										<!-- End Delete Assessment -->

										<!-- Workbook Detail Assessment -->
										<div class="modal fade" id="detail<?php echo $row['id_pen'];?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="mediumModalLabel">[Assessment Page] Update Penilaian Assessment</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body"> -->
														<div class="form-group">
															<label><b>NIP</b></label>
															<input type="text" class="form-control" value="<?php echo $row['NIP']; ?>" readonly>
														</div>
														<div class="form-group">
															<label><b>Employee name</b></label>
															<input type="text" class="form-control" value="<?php echo $row['full_name']; ?>" readonly>
														</div>
														<div align="center">
														<h1>Teori</h1>
														</div>
														<div class="form-group">
															<label><b>Definisi</b></label>
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['defenisi']; ?>" readonly>
															</div>
														</div>
														<div class="form-group">
															<label><b>Tujuan</b></label>
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['tujuan']; ?>" readonly>
															</div>
														</div>
														<div class="form-group">
															<label><b>Proses Penyusunan / Pelaksanaan</b></label>
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['proses']; ?>" readonly>
															</div>
														</div>
														<div align="center">
														<h1>Praktik</h1>
														</div>
														<div class="form-group">
															<label><b>Contoh praktik modul di Pertamina</b></label>
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['contoh']; ?>" readonly>
															</div>
														</div>
														<div class="form-group">
															<label><b>Analisis Masalah / <i>Gap</i></b></label>
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['analisis']; ?>" readonly>
															</div>
														</div>
														<div class="form-group">
															<label><b>Solusi / <i>Improvement</i></b></label>
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['solusi']; ?>" readonly>
															</div>
														</div>
														<div align="left">
														<h4>Total Bobot Teori</h4>
														</div>
														<div class="form-group">
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['TotalTeori']; ?>" readonly>
															</div>
														</div>
														<div align="left">
														<h4>Total Bobot Praktik</h4>
														</div>
														<div class="form-group">
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['TotalPraktik']; ?>" readonly>
															</div>
														</div>
														<div align="left">
														<h4>Standar Nilai Kelulusan</h4>
														</div>
														<div class="form-group">
															<div class="input-group">
																<span class="input-group-addon">%</span>
																<input type="text" class="form-control" value="<?php echo $row['Total']; ?>" readonly>
															</div>
														</div>
															<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
										<!-- end Detail Nilai assessment -->
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
			<!-- END ASSESSMENT-->
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
