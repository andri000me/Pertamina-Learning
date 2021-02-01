<!DOCTYPE html>
<html lang="en">
<?php require ('include/head.php'); ?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- <div class="page-content--bge5" style="background-image: <?php echo base_url('assets/images/company/2.png');?>"> -->
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url('assets/images/company/Pertamina-1.png');?>" width="250px" height="250px">
                            </a>
                        </div>
                        <div align="center">
                            <strong>PT. PERTAMINA (Persero) Tbk.</strong>
                            <h5>Aplikasi Monitoring <i>System</i> untuk Program EPPM pada Dit. Megaproyek Pengolahan dan Petrokimia</h5>
                        </div><hr>
                        <div class="login-form">
                            <!-- <form action="" method="post"> -->
                            <?php echo form_open_multipart(site_url('login/aksi_login')); ?>
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="NIP..." required="required"/>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password..." required="required"/>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('include/foot.php'); ?>
</body>
</html>
<!-- end document-->