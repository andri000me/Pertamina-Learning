<!DOCTYPE html>
<html lang="en">

<?php require ('include/head.php'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- <div class="page-content--bge5" style="background-image: url('assets/images/company/1.jpg');"> -->
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                        <font style="color: orange; font-size: 30px">4<i class="fa fa-smile-o"></i>4 Access Denied!</font>
                        <div class="login-logo">
                            <!-- <h1>Login Failed</h1> -->
                        </div>
                        <div align="center">
                            <strong>Please check <u>Username</u> or <u>Password!!</u></strong><hr>
                        <div class="login-form">
                           <span class="au-btn au-btn--orange">
                                <a class="read fourth" href="<?php echo base_url()."index.php/Login"; ?>"> Back to Login </button>
                            </span> 
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