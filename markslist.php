<head>
  <!--Data Tables -->
  <link href="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
</head>
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
             <th>S.No.</th>
                        <th>Student ID</th>
                        <th>Name</th>
<th>Marks</th>
                        

                    </tr>
                </thead>
                <tbody>
                    
                      <?php  
if(validation_errors() != false) { echo 'error'; }
$i=1;
         foreach ($h->result() as $row)  
         {  
            ?><tr>  <td><?php echo $i;?></td>  
            <td> <input type="hidden" form="form1" class="form-control" id="input-10" name="studentid[]" value="<?php echo $row->student_id;?>"><?php echo $row->student_id;?></td>  
            <td> <input form="form1" type="hidden" class="form-control" id="input-10" name="name[]" value="<?php echo $row->name;?>"><?php echo $row->name;?></td> 
 <td><?php echo $row->mark;?></td>   
 

 </tr>  
         <?php $i++;}  
         ?>  
                   
                </tbody>
                <tfoot>
                <tr>
           <th>S.No.</th>
                        <th>Student ID</th>
                        <th>Name</th>
<th>Marks</th>
                       
                      
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>

        </div>
		</form>
      </div><!-- End Row-->
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
 
   