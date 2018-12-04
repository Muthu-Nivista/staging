<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashrock/color-admin/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 10:28:04 GMT -->
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
  <!--Data Tables -->
  <link href="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
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

<?php include('header.php');?>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Student List</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Academic</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">New Academic Students</a></li>
            <li class="breadcrumb-item active" aria-current="page">List of Students</li>
         </ol>
	   </div>

     </div>



      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
  <th>S.No.</th>
                        <th>Name</th>
                     
                        <th>Student ID</th>
<th>Class/Section</th>
                        
                        <th>Stay Type</th>
                        
<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                      <?php  
if(validation_errors() != false) { echo 'error'; }
$i=1;
         foreach ($std->result() as $row)  
         {  
            ?><tr>    <td><?php echo $i;?></td> 
            <td><?php echo $row->name;?></td>  
          
 <td><?php echo $row->student_id;?></td>   
 <td><?php echo $row->stclass;?>-<?php echo $row->crsection;?></td>  
  
 <td><?php echo $row->stay_type;?></td>  
 <td><a href="<?php echo base_url();?>admin/edit_user?id=<?php echo $row->id;?>">Edit</a>&emsp;
<a href="<?php echo base_url();?>admin/delete_user?id=<?php echo $row->id;?>">Delete</a></td>
            </tr>  
         <?php

$i++; }  
         ?>  
                   
                </tbody>
                <tfoot>
                    <tr>
 <th>S.No.</th>
           <th>Name</th>
                    
                        <th>Student ID</th>
<th>Class/Section</th>
                        
                        <th>Stay Type</th>
<th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

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


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
	
	<!-- simplebar js -->
	<script src="<?php echo base_url();?>assets/admin/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->

	<!-- sidebar-menu js -->
	<script src="<?php echo base_url();?>assets/admin/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="<?php echo base_url();?>assets/admin/js/app-script.js"></script>

  <!--Data Tables js-->
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	
</body>

<!-- Mirrored from codervent.com/dashrock/color-admin/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Oct 2018 10:28:35 GMT -->
</html>
