<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashrock/color-admin/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 13:56:52 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
   <title>Nivista-MIS</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url();?>assets/admin/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="<?php echo base_url();?>assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url();?>assets/admin/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url();?>assets/admin/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url();?>assets/admin/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url();?>assets/admin/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <?php include('sidebar.php');?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<?php include('header.php');?>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Add User</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">User Details</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add User Information</li>
         </ol>
	   </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="signupForm" action="<?php if(isset($this->form_data->username))
{
 echo base_url()."admin/update_user";
}
else
{
 echo base_url()."admin/insert_user";
}
?>" method="post">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   User Profile
                </h4>
                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-10" name="firstname" value="<?php if(isset($this->form_data->firstname))
{echo $this->form_data->firstname;
}?>">
                  </div>
                  <label for="input-11" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-11" name="lastname" value="<?php if(isset($this->form_data->lastname))
{echo $this->form_data->lastname;
}?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-12" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-12" name="username" value="<?php if(isset($this->form_data->username))
{echo $this->form_data->username;
}?>">
 <input type="hidden" class="form-control" id="input-12" name="userid" value="<?php if(isset($this->form_data->id))
{echo $this->form_data->id;
}?>">
                  </div>
                  <label for="input-13" class="col-sm-2 col-form-label">Company Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-13" name="company" value="<?php if(isset($this->form_data->company))
{echo $this->form_data->company;
}?>">
                  </div>
                </div>
                <h4 class="form-header text-uppercase">
                <i class="fa fa-envelope-o"></i>
                  Contact Info & Bio
                </h4>

                <div class="form-group row">
                  <label for="input-14" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" id="input-14" name="email" value="<?php if(isset($this->form_data->email))
{echo $this->form_data->email;
}?>">
                  </div>
                  <label for="input-15" class="col-sm-2 col-form-label">Website</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-15" name="website" value="<?php if(isset($this->form_data->website))
{echo $this->form_data->website;
}?>">
                  </div>
                </div>

<div class="form-group row">
                  <label for="input-14" class="col-sm-2 col-form-label">Contact Number</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-16" name="contact" value="<?php if(isset($this->form_data->mobile))
{echo $this->form_data->mobile;
}?>">
                  </div>
                  <label for="input-15" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-4">
                   <textarea class="form-control" rows="4" id="input-17" name="address"><?php if(isset($this->form_data->address))
{echo $this->form_data->address;
}?></textarea>
                  </div>
                </div>


                
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <?php if(isset($this->form_data->username))
{
?>
<button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>Update</button>
<?php
}
else
{
?>
<button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
<?php
}?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<?php include('footer.php');?>
	<!--End footer-->
   
  </div><!--End wrapper-->

	
</body>

</html>
