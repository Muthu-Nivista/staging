      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <form  action="<?php  echo base_url()."admin/save_markentrylist";?>" id="form1" method="post">  
            <div class="card-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered">
                <thead>
                    <tr>
             <th>S.No.</th>
                        <th>Student ID</th>
                        <th>Name</th>
<th>Marks</th>
                        <th>Remarks</th>

                    </tr>
                </thead>
                <tbody>
                    
                      <?php  
if(validation_errors() != false) { echo 'error'; }
$i=1;
         foreach ($h->result() as $row)  
         {  
            ?><tr>  <td><?php echo $i;?></td>  
            <td> <input type="hidden" form="form1" class="form-control" id="input-10" name="studentid[]" value="<?php echo $row->student_id;?>"><?php echo $row->student_id;?> <input form="form1" type="hidden" class="form-control" id="input-10" name="class" value="<?php echo $row->course;?>"> <input form="form1" type="hidden" class="form-control" id="input-10" name="section" value="<?php echo $row->batch;?>"><input form="form1" type="hidden" class="form-control" id="input-10" name="acdyear" value="<?php echo $row->acdyear;?>"></td>  
            <td> <input form="form1" type="hidden" class="form-control" id="input-10" name="name[]" value="<?php echo $row->name;?>"><?php echo $row->name;?></td> 
 <td> <input form="form1" type="text" class="form-control" id="input-10" name="mark[]" value=""></td>   
 <td> <input form="form1" type="text" class="form-control" id="input-10" name="remark[]" value=""></td>  

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
                        <th>Remarks</th>
                      
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
		   <div class="form-group row">
		  <div class="col-sm-1">
					<button form="form1" type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>Save Marks</button>
			 </div>
		  </div>
        </div>
		</form>
      </div><!-- End Row-->
    
   