<!DOCTYPE html>
<html lang="en">

<?php require('include/head.php'); ?>
<?php require('include/sidebar.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
    
<body class="animsition">
    <div class="wrapper">
        <!-- 'MAIN CONTENT' -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- <div class="row" style="background-image: url('assets/images/company/3.jpg');"> -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div align="center">
                                <h1>PT. PERTAMINA</h1>
                                <h5>Aplikasi Monitoring System untuk Program EPPM pada Dit. Megaproyek Pengolahan dan Petrokimia</h5><br><br>
                                <p>Excel in collaborative learning using a world-class online learning management system.</p><br><br><br><br><br><br>
                                <!-- <a href="#section2">
                                    <button type="button" id="section1" class="btn btn-outline-secondary">
                                    Watch Vidio &nbsp;<i class="fa fa-arrow-right"></i>
                                    </button>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div align="center">
                                <img src="<?php echo base_url('assets/images/company/hp-lady.jpg');?>" width="50%" height="50%"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

        <!-- 'MAIN CONTENT' -->
        <!-- <div class="main-content" style="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div align="center">
                                <h1><i class="fa fa-video-camera"></i><u> Watch Vidio</u></h1>
                                <div class="page-wrapper" id="section2">
                                    <div class="map-wrap m-t-45 m-b-20">
                                        <video src="<?php echo base_url('assets/vidio/videoplayback.mp4'); ?>" controls preload="auto" width="100%" height="100%">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END MAIN CONTENT -->


            <!-- COPYRIGHT-->
            <?php require('include/footer.php'); ?>
            <!-- END COPYRIGHT-->
        </div>
    </div>

<?php require('include/foot.php'); ?>
</body>
</html>
<!-- end document-->
