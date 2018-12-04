<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 06:38:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nivista-MIS</title>
    <!--favicon-->
 <link rel="icon" href="<?php echo base_url();?>assets/admin/images/f.jpg" type="image/x-icon">
  <!-- Bootstrap core CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slider/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slider/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slider/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/slider/css/iofrm-theme9.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>WHY NIVISTA? Take a second and explore it!</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="<?php echo base_url();?>assets/slider/images/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index-2.html">
                                <div class="logo">
                                    <img class="logo-size" src="<?php echo base_url();?>assets/slider/img/croplogowhite.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="#">Reset Password</a><a href="<?php echo base_url();?>admin/" class="active">Login</a>
                        </div>
<?php if (isset($message)) { ?>
<h6 style="color:white;margin-top:30px;"><?php echo $message." Go to Signin";?></h6><br>
<?php } ?>
                        <form action="<?php echo base_url();?>admin/pass_reset" method="post">
                    
                            <input class="form-control" type="hidden" name="userid" value="<?php echo $this->session->userdata('userid');?>">
                            <input class="form-control" type="password" name="new_password" placeholder="New Password" required>
                            <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Reset Password</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <p>© Nivista. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="<?php echo base_url();?>assets/slider/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/slider/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/slider/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/slider/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register9.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Nov 2018 06:38:59 GMT -->
</html>