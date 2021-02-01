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
                                <h2 class="number">Dashboard All User</h2>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- WORKBOOK -->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Workbook</h3>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-earning">
                                        <thead>
                                            <tr>
                                                <td><font style="font-size: 15px; color: #000">No.</font></td>
                                                <td><font style="font-size: 15px; color: #000">Employee ID/NIP</font></td>
                                                <td><font style="font-size: 15px; color: #000">Empolyee Name</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 1.1</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 1.2</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 2.1</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 2.2</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 3.1</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 3.2</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 3.3</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 4.1</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 4.2</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 4.3</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 5.1</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 6.1</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 6.2</font></td>
                                                <td><font style="font-size: 15px; color: #000">Modul 6.3</font></td>
                                                <!-- <td><font style="font-size: 15px; color: #000">Progress</font></td> -->
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
                                        echo "<td>".$no.".</td>";
                                        echo "<td>".$row['employee_id'] . "</td>";
                                        echo "<td>".$row['name_employee'] . "</td>";
                                        // MODUL 1.1
                                        if ($row['module_1_1']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_1_1']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_1_1']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 1.2
                                        if ($row['module_1_2']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_1_2']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_1_2']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 2.1
                                        if ($row['module_2_1']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_2_1']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_2_1']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 2.2
                                        if ($row['module_2_2']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_2_2']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_2_2']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 3.1
                                        if ($row['module_3_1']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_3_1']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_3_1']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 3.2
                                        if ($row['module_3_2']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_3_2']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_3_2']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 3.3
                                        if ($row['module_3_3']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_3_3']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_3_3']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 4.1
                                        if ($row['module_4_1']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_4_1']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_4_1']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 4.2
                                        if ($row['module_4_2']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_4_2']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_4_2']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 4.3
                                        if ($row['module_4_3']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_4_3']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_4_3']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 5.1
                                        if ($row['module_5_1']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_5_1']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_5_1']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 6.1
                                        if ($row['module_6_1']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_6_1']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_6_1']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 6.2
                                        if ($row['module_6_2']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_6_2']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_6_2']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // MODUL 6.3
                                        if ($row['module_6_3']=='Not Yet Started.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-danger progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Not Yet Started.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_6_3']=='On Progress.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-warning progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>On Progress.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }elseif($row['module_6_3']=='Done. Acc.'){
                                        echo "
                                        <td>
                                            <div class='progress progress-bar-vertical'>
                                                <div class='progress-bar progress-bar-success progress-bar-striped active' role='progressbar' aria-valuenow='50' aria-valuemin='0' aria-valuemax='50' style='height: 100%;'>
                                                    <label class='text2'>Done. Acc.</label>
                                                </div>
                                            </div>
                                        </td>";
                                        }
                                        // echo "<td>On Progress</td>";
                                        echo "</tr>";
                                        ?>
                                        
                                        <?php
                                            }
                                            } else {
                                            echo "<tr>";
                                            echo "<td colspan='17' align='center'>"."<b>"."<i>" . "Tidak Ada Data" . "</i>". "</b>" . "</td>";
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
            <!-- END WORKBOOK CHART-->
            
            <!-- NILAI ASSESSMENT -->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nilai Assessment-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Nilai Assessment</h3>
                                <div class="table-responsive">
                                    <table class="table table-borderless table-earning">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Assessment</th>
                                                <th>Employee ID/NIP</th>
                                                <th>Employee Name</th>
                                                <th>Total Nilai Teori</th>
                                                <th>Total Nilai Praktik</th>
                                                <th>Total Standar Penilai</th>
                                                <th>Periode</th>
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
                                                                    SUM(a.defenisi + tujuan + a.proses) AS TotalTeori, 
                                                                    SUM(a.contoh + a.analisis + a.solusi) AS TotalPraktik,
                                                                    SUM(a.defenisi + tujuan + a.proses + a.contoh + a.analisis + a.solusi) AS Total
                                                                    FROM tb_penilaian a JOIN tb_user b
                                                                    ON a.NIP=b.NIP GROUP BY a.id_pen DESC");
                                        $no = 0;
                                        if(mysqli_num_rows($result)>0){

                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $no++;
                                                echo "<tr>";
                                                echo "<td>".$no.".</td>";
                                                echo "<td>".$row['id_pen'] . "</td>";
                                                echo "<td>".$row['NIP'] . "</td>";
                                                echo "<td>".$row['full_name'] . "</td>";
                                                echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['TotalTeori'] . "</b>%</td>";
                                                echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['TotalPraktik'] . "</b>%</td>";
                                                echo "<td style='background-color: #00c5ff'; color: #000;><b>".$row['Total'] . "</b>%</td>";
                                                echo "<td>".$row['periode'] . "</td>";
                                                echo "</tr>";
                                                ?>

                                            <?php
											}
											} else {
											echo "<tr>";
											echo "<td colspan='8' align='center'>"."<b>"."<i>" . "Tidak Ada Data" . "</i>". "</b>" . "</td>";
											echo "</tr>";
											} 
											mysqli_close($con);
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END Nilai assessment-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END NILAI ASSESSMENT -->


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

                                        $result = mysqli_query($con,"SELECT a.user_id,a.NIP,a.full_name,b.defenisi,b.tujuan,b.proses,b.contoh,b.analisis,b.solusi,c.score,
                                                                    SUM(b.defenisi + b.tujuan + b.proses) AS TotalTeori, 
                                                                    SUM(b.contoh + b.analisis + b.solusi) AS TotalPraktik,
                                                                    SUM(b.defenisi + b.tujuan + b.proses + b.contoh + b.analisis + b.solusi) AS Total
                                                                    FROM tb_user a 
                                                                    JOIN tb_penilaian b
                                                                    ON a.NIP=b.NIP
                                                                    JOIN tb_eppm c
                                                                    ON a.NIP=c.NIP GROUP BY a.user_id DESC");
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
<style>
.container { margin-top: 10px; }

.progress-bar-vertical {
  width: 20px;
  min-height: 200px;
  display: flex;
  align-items: flex-end;
  margin-right: 20px;
  float: left;
}

.progress-bar-vertical .progress-bar {
  width: 100%;
  height: 0;
  -webkit-transition: height 0.6s ease;
  -o-transition: height 0.6s ease;
  transition: height 0.6s ease;
}

.text2 {
  writing-mode:tb-rl;
  -webkit-transform:rotate(-90deg);
  -moz-transform:rotate(-90deg);
  -o-transform: rotate(-90deg);
  -ms-transform:rotate(-90deg);
  transform: rotate(-1deg);
  white-space:nowrap;
  float:right;
}
</style>
</body>
</html>
<!-- end document-->
