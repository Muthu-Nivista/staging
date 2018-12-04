  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="<?php echo base_url();?>admin/home">
       <img src="<?php echo base_url();?>assets/slider/img/croplogowhite.png" class="logo-icon" alt="logo icon">
       
     </a>
	 </div>
	 <div class="user-details">
	  <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
	    <div class="avatar"><img class="mr-3 side-user-img" src="<?php echo base_url();?>assets/admin/images/user-female-alt-icon.png" alt="user avatar"></div>
	     <div class="media-body">
	     <h6 class="side-user-name">Admin</h6>
	    </div>
       </div>
	   <div id="user-dropdown" class="collapse">
		  <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
			<li><a href="<?php echo base_url();?>admin/logout"><i class="icon-power"></i>Logout</a></li>
		  </ul>
	   </div>
      </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="icon-home"></i><span>Admin Panel</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="<?php echo base_url();?>admin/home"><i class="fa fa-long-arrow-right"></i>Dashboard</a></li>

		  <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Add User</a></li>

		  <li><a href="<?php echo base_url();?>admin/user_list"><i class="fa fa-long-arrow-right"></i>User List</a></li>
     
    </ul>
 <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="fa fa-snowflake-o"></i><span>Academic</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/add_department"><i class="fa fa-long-arrow-right"></i>Add Department</a></li>
                    <li><a href="<?php echo base_url();?>admin/select_depart"><i class="fa fa-long-arrow-right"></i>Department List</a></li>
		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Add Class</a></li>
		   <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Add Section</a></li>
		    <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Add Subject</a></li>
		

     
    </ul>
</li>
 <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="fa fa-user-circle"></i><span>Student</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Create New Admission</a></li>

		  <li><a href="<?php echo base_url();?>admin/select_studentlist"><i class="fa fa-long-arrow-right"></i>View Student List</a></li>

                  <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Assign Roll No's</a></li>

                   <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Assign Elective Subjects</a></li>

		
     
    </ul>
</li>

 <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="fa fa-user-circle"></i><span>Teacher</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Add Teacher</a></li>

		  <li><a href="<?php echo base_url();?>admin/teacher_list"><i class="fa fa-long-arrow-right"></i>View Teacher List</a></li>
                <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Subject Allocation </a></li>
                <li><a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-long-arrow-right"></i>Assign Class Teacher </a></li>



		
     
    </ul>
</li>
 <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="icon-clock"></i><span>Time Table</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Set Time Table</a></li>

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Active Timetable</a></li>
		   <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>View Class Timetable</a></li>
		    <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>View Teacher Timetable</a></li>

		
     
    </ul>
</li>

      <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="fa fa-address-card"></i><span>Exams</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Mark Entry</a></li>

		  <li><a href="<?php echo base_url();?>admin/viewmark"><i class="fa fa-long-arrow-right"></i>Subject wise Marks</a></li>
      <li><a href="<?php echo base_url();?>admin/viewmark"><i class="fa fa-long-arrow-right"></i>Cumulative Report</a></li>
      <li><a href="<?php echo base_url();?>admin/viewmark"><i class="fa fa-long-arrow-right"></i>Section wise Rank</a></li>
     
 <li><a href="<?php echo base_url();?>admin/viewmark"><i class="fa fa-long-arrow-right"></i>Standard wise Rank </a></li>
     
    </ul>
</li>

      <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="fa fa-address-card"></i><span>Report Card</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/viewmark"><i class="fa fa-long-arrow-right"></i>View Report Card</a></li>

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Promotion Card Entry</a></li>
      <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Promotion Report Cards</a></li>
    </ul>
</li>
 <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="fa fa-bank"></i><span>Fees</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Add Fee Category</a></li>
    <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Assign Fees Structure </a></li>
		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>View Fees Structure</a></li>



	  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Fees Concession Report</a></li>
		
     
    </ul>
</li>
 <li>
        <a href="<?php echo base_url();?>admin" class="waves-effect">
          <i class="icon-envelope-letter"></i><span>SMS</span><i class="fa fa-angle-left pull-right"></i>
        </a>
	  <ul class="sidebar-submenu">
          

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Circular SMS </a></li>

		  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Login Details SMS</a></li>

  <li><a href="<?php echo base_url();?>admin/markentry"><i class="fa fa-long-arrow-right"></i>Emergency SMS</a></li>
 
		
     
    </ul>
</li>
   </div>
   <!--End sidebar-wrapper-->