<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">Raport, <?php echo $this->session->userdata("fullname"); ?></h2>
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Profile Card</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="<?php echo base_url().'assets/images/users/'. $this->session->userdata("profile"); ?>" />
                                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $this->session->userdata("fullname"); ?></h5>
                                            <div class="location text-sm-center">
                                                <span class="email"><?php echo $this->session->userdata("nip"); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->


            <!-- RAPORT -->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Raport</h3>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-earning">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Employee ID/NIP</th>
                                                <th>Employee Name</th>
                                                <th>Nilai EPPM</th>
                                                <th>Total Nilai Teori</th>
                                                <th>Total Nilai Praktik</th>
                                                <th>Total Standar Penilai</th>
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

                                        
                                        $roles = $this->session->userdata("nip");
                                        $result = mysqli_query($con,"SELECT a.user_id,a.NIP,a.full_name,b.defenisi,b.tujuan,b.proses,b.contoh,b.analisis,b.solusi,c.score,
                                                                    SUM(b.defenisi + b.tujuan + b.proses) AS TotalTeori, 
                                                                    SUM(b.contoh + b.analisis + b.solusi) AS TotalPraktik,
                                                                    SUM(b.defenisi + b.tujuan + b.proses + b.contoh + b.analisis + b.solusi) AS Total
                                                                    FROM tb_user a 
                                                                    JOIN tb_penilaian b
                                                                    ON a.NIP=b.NIP
                                                                    JOIN tb_eppm c
                                                                    ON a.NIP=c.NIP WHERE a.NIP='$roles' GROUP BY a.user_id DESC");
                                        $no = 0;
                                        if(mysqli_num_rows($result)>0){

                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $no++;
                                                echo "<tr>";
                                                echo "<td>".$no.".</td>";
                                                echo "<td>".$row['NIP'] . "</td>";
                                                echo "<td>".$row['full_name'] . "</td>";
                                                echo "<td style='background-color: yellow'; color: #000;><b>".$row['score'] . "</b></td>";
                                                echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['TotalTeori'] . "</b>%</td>";
                                                echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['TotalPraktik'] . "</b>%</td>";
                                                echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['Total'] . "</b>%</td>";
                                                echo "</tr>";
                                                ?>

                                            <?php
											}
											} else {
											echo "<tr>";
											echo "<td colspan='7' align='center'>"."<b>"."<i>" . "Tidak Ada Data" . "</i>". "</b>" . "</td>";
											echo "</tr>";
											} 
											mysqli_close($con);
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
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
</body>
</html>
<!-- end document-->
