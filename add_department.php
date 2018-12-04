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
 <link rel="icon" href="<?php echo base_url();?>assets/admin/images/f.jpg" type="image/x-icon">
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
		    <h4 class="page-title">Add Department</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Academic</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Department </li>
         </ol>
	   </div>

     </div>

              <form id="signupForm" action="<?php if(isset($this->form_data->username))
{
 echo base_url()."admin/update_depart";
}
else
{
 echo base_url()."admin/insert_depart";
}
?>" method="post">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   Department 
                </h4>
                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Department Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="input-10" name="depart_name" value="<?php if(isset($this->form_data->firstname))
{echo $this->form_data->department;
}?>" required placeholder="English/Maths/Science/others">
                  </div>

                </div>

            </div>
          </div>
		  
		  
		  
        </div>
		
		        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   Designation
                </h4>

                  <div class="col-sm-4">
                  
<label for="md_checkbox_16">Success</label>                 
                <input type="checkbox"  name="designation[]"  checked  >
                  </div>
<br>

                  <div class="col-sm-4">
<label for="md_checkbox_16">Teaching Staff</label>                 
                <input type="checkbox"  name="designation[]" >
                                      </div>
<br>

                  <div class="col-sm-4">
<label for="md_checkbox_16">Success</label>                 
                <input type="checkbox" name="designation[]" >
                    
                  </div>
                </div>
      </div><!--End Row-->
                <div class="form-footer">
                    <a href="<?php  echo base_url()."admin/add_department";?>" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</a>
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
<?php if (isset($message)) { ?><script>alert('<?php echo $message;?>');</script>
<?php } ?>
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
<script>
        function addElement(elId,e) {
            var holder = document.getElementById(elId),
                num = e.currentTarget.dataset.count++,
                divIdName = elId + num,
                newdiv = document.createElement('div');
 
            newdiv.setAttribute("id", divIdName);
      
           
            newdiv.innerHTML = "<br><textbox cols=\"10\" rows=\"5\" maxlength=\"160\" placeholder=\"Describe Message here...\"  name=\"message" + num + "\"></textarea><a href=\"javascript:;\" onclick=\"removeElement(\'" + divIdName + "\',\'" + elId + "\')\">Remove</a>";
 
            holder.appendChild(newdiv);
            setTimeout(function() {
                newdiv.className += "show";
            }, 10);
        }
 
        function removeElement(divNum,elId) {
            var holder = document.getElementById(elId);
            var olddiv = document.getElementById(divNum);
            olddiv.className = "";
            
            setTimeout(function() {
                holder.removeChild(olddiv);
            }, 600);
        }
    </script>
    <style>
       
        .swingX,.swingY {
            perspective: 200px;
        }
        .swingX div {
          opacity: 0;
          transform: rotateX(-90deg);
          transition: all 0.5s cubic-bezier(.36,-0.64,.34,1.76);
        }
        .swingY div {
          opacity: 0;
          transform: rotateY(-90deg);
          transition: all 0.5s cubic-bezier(.36,-0.64,.34,1.76);
        }
 
        .swingX div.show,.swingY div.show {
          opacity: 1;
          transform: none;
          transition: all 0.5s cubic-bezier(.36,-0.64,.34,1.76);
        }
    </style>	


</html>
