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
		    <h4 class="page-title">Mark Entry</h4>
		    <ol class="breadcrumb">
  <li class="breadcrumb-item active" aria-current="page">Academic</li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Mark Entry</a></li>
          
         </ol>
	   </div>

     </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="signupForm" action="<?php  echo base_url()."admin/show_markentrylist";?>" method="post">
                <h5 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   Mark Entry Panel
                </h5>
                <div class="form-group row">
            <label style="text-align: right;" for="input-11" class="col-sm-2 col-form-label">Academic Year</label>
            
                     <div class="col-sm-2">
					<select class="form-control" id="acdyear" name="acdyear" >
                          <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        </select>
			 </div>
                  <label style="text-align: right;" for="input-10" class="col-sm-1 col-form-label">Class</label>
         	  <div class="col-sm-2">
					<select class="form-control" name="class" id="class">
                       
                          <option value="I">I</option>
                        <option value="II">II</option>
                        </select>
			 </div>
                  <label style="text-align: right;" for="input-11" class="col-sm-2 col-form-label">Section</label>
            
                     <div class="col-sm-2">
					<select class="form-control" name="section" id="section">
                           <option value="A">A</option>
                        <option value="B">B</option>
                       
                        </select>
			 </div>
</div>
 <div class="form-group row">
            <label style="text-align: right;" for="input-11" class="col-sm-2 col-form-label">Select Subject</label>
            
                     <div class="col-sm-2">
					<select class="form-control" id="subject">
                          <option value="English">English</option>
                        <option value="Maths">Maths</option>
                       
                        </select>
			 </div>
                  <label style="text-align: right;" for="input-10" class="col-sm-2 col-form-label">Select Exam</label>
         	  <div class="col-sm-3">
					<select class="form-control" id="basic-select">
                          <option>First Assessment</option>
                            <option>First Term Exam/Unit Test</option>
  <option>Second Term Unit Test</option>
  <option>Final Term Exam </option>
                        </select>
			 </div>
                 
            
                     <div class="col-sm-1">
<input type="hidden" value="entry" name="type">
					
  <a id="button" href="#" class="btn btn-success" ><i class="fa fa-check-square-o"></i>Go</a>
			 </div>
</div>

                 </div>
              </form>
            </div>
          </div>
		  
		 

		  
        </div>
		
		      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-address-book-o"></i>
                   Entry Panel
                </h4>
<div>
<div id="div_result">

</div>

<?php if (isset($message)) { ?>
<script>alert('<?php echo $message;?>');</script>
<?php } ?>

<center><a id="button" href="<?php  echo base_url()."admin/viewmark";?>" class="btn btn-success" ><i class="fa fa-check-square-o"></i>Show Marks</a></center>

</div>
    
                 </div> 
              
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
<script>
$('#button').click(function(){


$.ajax({
   type:'POST',
   url:"<?php echo base_url(); ?>admin/show_markentrylist/",
   data: {class: $('#class').val(),section: $('#section').val(),acdyear: $('#acdyear').val()},
               
   success:function(msg){
    $("#div_result").html(msg);
   },
   error: function(result)
   {
      $("#div_result").html("Error"); 
   },
   fail:(function(status) {
      $("#div_result").html("Fail");
   }),
   beforeSend:function(d){
    $('#div_result').html("<center><strong style='color:red'>Please Wait...<br><img height='25' width='25' src='<?php echo base_url();?>img/ajax-loader.gif' /></strong></center>");
   }

  }); 
});
</script>
	
</body>

</html>
