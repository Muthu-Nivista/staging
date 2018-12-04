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
                            <a href="<?php echo base_url();?>admin/">
                                <div class="logo">
                                    <img class="logo-size" src="<?php echo base_url();?>assets/slider/img/croplogowhite.png"  alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="<?php echo base_url();?>admin/" class="active">Welcome</a>
                        </div>
                        <form action="<?php echo base_url();?>admin/login" method="post">
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="<?php echo base_url();?>admin/forget_page">Forget password?</a>
                            </div>
                        </form>
<p><?php if (isset($message_display)) { ?>
<h6 style="color:white;margin-top:30px;"><?php echo $message_display;?></h6><br>
<?php } ?></p>
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
</html>