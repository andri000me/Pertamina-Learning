<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- Profile-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">Hello, <?php echo $this->session->userdata("fullname"); ?></h2>
                                <div class="icon">
                                    <i class="zmdi zmdi-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Profile Card</strong>
                                    </div>
                                    <div class="card-body" style="background-image: <?php echo base_url().'assets/images/users/'. $this->session->userdata("profile"); ?>">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="<?php echo base_url().'assets/images/users/'. $this->session->userdata("profile"); ?>" />
                                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $this->session->userdata("fullname"); ?></h5>
                                            <div class="location text-sm-center">
                                                <span class="email"><?php echo $this->session->userdata("nip"); ?></span>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="file" name="userfile" class="form-control" placeholder="Upload Scan Lembar Pengesahan..." name="" />
                                            <div> -->
                                        </div>
                                        <hr>
                                        <div class="card-body" align="center">
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editprofile">Edit Profile</button> -->
                                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#change">Change Password</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
           

            <!-- COPYRIGHT-->
			<?php require('include/footer.php'); ?>
            <!-- END COPYRIGHT-->
        </div>
    </div>
<?php require('include/foot.php'); ?>
</body>
</html>
<!-- end document-->
