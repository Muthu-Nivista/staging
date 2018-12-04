<!DOCTYPE html>
<html lang="en">

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
                                    <img class="logo-size" src="<?php echo base_url();?>assets/slider/images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to Nivista</p>
                        <form action="<?php echo base_url();?>admin/forget_reset" method="post">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                        </form>
<div class="page-links"><i class="detail-nav flaticon-arrow_left nostyle"></i>
<a href="<?php echo base_url();?>admin/" class="active">Login</a>

                        <div class="tick-holder">
<?php if (isset($email_confirm)) { ?>
<h6 style="color:white;margin-top:30px;"><?php echo $email_confirm;?></h6><br>
<?php } ?>
                          
                        </div>
                    </div>
 </div>
                    <div class="form-sent">
                        <div class="website-logo-inside">
                            <a href="<?php echo base_url();?>admin/">
                                <div class="logo">
                                    <img class="logo-size" src="<?php echo base_url();?>assets/slider/img/croplogowhite.png" alt="">
                                </div>
                            </a>
                        </div>

                        <h3>Password link sent</h3>
                        <p>Please check your inbox <a href="http://brandio.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="335a5c55415e735a5c55415e47565e435f5247561d5a5c">[email&#160;protected]</a></p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/slider/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/slider/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/slider/js/main.js"></script>
</body>

