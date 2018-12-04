<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashrock/color-admin/ui-checkbox-radio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 13:52:37 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>DashRock - Bootstrap 4 Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url();?>assets/admin/assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->

  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url();?>assets/admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url();?>assets/admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url();?>assets/admin/assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url();?>assets/admin/assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="<?php echo base_url();?>assets/admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text"> DashRock</h5>
     </a>
	 </div>
	 <div class="user-details">
	  <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
	    <div class="avatar"><img class="mr-3 side-user-img" src="<?php echo base_url();?>assets/admin/assets/images/avatars/avatar-4.png" alt="user avatar"></div>
	     <div class="media-body">
	     <h6 class="side-user-name">Mark Jhonsan</h6>
	    </div>
       </div>
	   <div id="user-dropdown" class="collapse">
		  <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
			<li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
		  </ul>
	   </div>
      </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i><span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="index.html"><i class="fa fa-long-arrow-right"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-long-arrow-right"></i> Dashboard v2</a></li>
          <li><a href="index3.html"><i class="fa fa-long-arrow-right"></i> Dashboard v3</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
        <i class="icon-handbag"></i><span>UI Elements</span> 
		   <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
      		  <li><a href="ui-typography.html"><i class="fa fa-long-arrow-right"></i> Typography</a></li>
      		  <li><a href="ui-buttons.html"><i class="fa fa-long-arrow-right"></i> Buttons</a></li>
      		  <li><a href="ui-cards.html"><i class="fa fa-long-arrow-right"></i> Cards</a></li>
      		  <li><a href="ui-checkbox-radio.html"><i class="fa fa-long-arrow-right"></i> Checkboxes & Radios</a></li>
      		  <li><a href="ui-tabs-accordions.html"><i class="fa fa-long-arrow-right"></i> Tabs & Accordions</a></li>
      		  <li><a href="ui-modals.html"><i class="fa fa-long-arrow-right"></i> Modals</a></li>
      		  <li><a href="ui-bootstrap-elements.html"><i class="fa fa-long-arrow-right"></i> BS Elements</a></li>
			  <li><a href="ui-pagination.html"><i class="fa fa-long-arrow-right"></i> Pagination</a></li>
			  <li><a href="ui-list-groups.html"><i class="fa fa-long-arrow-right"></i> List Groups</a></li>
			  <li><a href="ui-alerts.html"><i class="fa fa-long-arrow-right"></i> Alerts</a></li>
      		  <li><a href="ui-progressbars.html"><i class="fa fa-long-arrow-right"></i> Progress Bars</a></li>
      		  <li><a href="ui-notification.html"><i class="fa fa-long-arrow-right"></i> Notifications</a></li>
      		  <li><a href="ui-sweet-alert.html"><i class="fa fa-long-arrow-right"></i> Sweet Alerts</a></li>
      		  <li><a href="ui-color-palette.html"><i class="fa fa-long-arrow-right"></i> Color Palette</a></li>
      		  <li><a href="ui-lightbox-gallery.html"><i class="fa fa-long-arrow-right"></i> Lightbox gallery</a></li>
        </ul>
      </li>
	  
	
	 
	  

     
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="icon-cloud-upload text-danger"></i><span>Disk Space</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="icon-hourglass text-warning"></i><span>Server Load</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="icon-drop text-info"></i><span>Information</span></a></li>
    </ul>
	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-ibiza">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	    <i class="icon-envelope-open"></i></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 4 new messages
          <span class="badge badge-danger">4</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-1.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-2.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-3.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-4.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	  <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 10 Notifications
          <span class="badge badge-primary">10</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-people fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-cup fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-bell fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/avatars/avatar-17.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-17.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Katrina Mccoy</h6>
            <p class="user-subtitle">katrina92@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Radios & Checkboxes</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Radios & Checkboxes</li>
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
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header text-uppercase">BASIC CHECKBOX</div>
            <div class="card-body">
              <div class="demo-checkbox">
                  <input type="checkbox" id="basic_checkbox_1" checked />
                  <label for="basic_checkbox_1">Default</label>
                  <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                  <label for="basic_checkbox_2">Filled In</label>
                  <input type="checkbox" id="basic_checkbox_3" checked disabled />
                  <label for="basic_checkbox_3">Default - Disabled</label>
                  <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked disabled />
                  <label for="basic_checkbox_4">Filled In - Disabled</label>
              </div>
            </div>
          </div>
          <div class="card mt-30">
            <div class="card-header text-uppercase">BASIC CHECKBOX DESIGN COLORS</div>
            <div class="card-body">
               <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_1" class="chk-col-primary" checked />
                  <label for="md_checkbox_1">Primary</label>
                  <input type="checkbox" id="md_checkbox_2" class="chk-col-success" checked />
                  <label for="md_checkbox_2">Success</label>
                  <input type="checkbox" id="md_checkbox_3" class="chk-col-deep-info" checked />
                  <label for="md_checkbox_3">Info</label>
                  <input type="checkbox" id="md_checkbox_4" class="chk-col-warning" checked />
                  <label for="md_checkbox_4">Warning</label>
                  <input type="checkbox" id="md_checkbox_5" class="chk-col-danger" checked />
                  <label for="md_checkbox_5">Danger</label>
                  <input type="checkbox" id="md_checkbox_6" class="chk-col-dark" checked />
                  <label for="md_checkbox_6">Dark</label>
                  <input type="checkbox" id="md_checkbox_7" class="chk-col-secondary" checked />
                  <label for="md_checkbox_7">Secondary</label>
              </div>
            </div>
          </div>
          <div class="card mt-30">
            <div class="card-header text-uppercase">BASIC CHECKBOX DESIGN COLORS WITH FILLED IN</div>
            <div class="card-body">
              <div class="demo-checkbox">
                <input type="checkbox" id="md_checkbox_15" class="filled-in chk-col-primary" checked />
                <label for="md_checkbox_15">Primary</label>
                <input type="checkbox" id="md_checkbox_16" class="filled-in chk-col-success" checked />
                <label for="md_checkbox_16">Success</label>                 
                <input type="checkbox" id="md_checkbox_17" class="filled-in chk-col-info" checked />
                <label for="md_checkbox_17">Info</label>
                 <input type="checkbox" id="md_checkbox_18" class="filled-in chk-col-warning" checked />
                <label for="md_checkbox_18">Warning</label> 
                <input type="checkbox" id="md_checkbox_19" class="filled-in chk-col-danger" checked />
                <label for="md_checkbox_19">Danger</label>                  
                <input type="checkbox" id="md_checkbox_20" class="filled-in chk-col-dark" checked />
                <label for="md_checkbox_20">Dark</label>
                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-secondary" checked />
                <label for="md_checkbox_21">Secondary</label>
            </div>
            </div>
          </div>
          <div class="card mt-30">
            <div class="card-header text-uppercase">BASIC RADIO BUTTON</div>
            <div class="card-body">
              <div class="demo-radio-button">
                  <input name="group1" type="radio" id="radio_1" checked />
                  <label for="radio_1">Radio - 1</label>
                  <input name="group1" type="radio" id="radio_2" />
                  <label for="radio_2">Radio - 2</label>
                  <input name="group1" type="radio" class="with-gap" id="radio_3" />
                  <label for="radio_3">Radio - With Gap</label>
                  <input name="group1" type="radio" id="radio_4" class="with-gap" />
                  <label for="radio_4">Radio - With Gap</label>
                  <input name="group2" type="radio" id="radio_5" checked disabled />
                  <label for="radio_5">Radio - Disabled</label>
                  <input name="group3" type="radio" id="radio_6" class="with-gap" checked disabled />
                  <label for="radio_6">Radio - Disabled</label>
              </div>
            </div>
          </div>
          <div class="card mt-30">
            <div class="card-header text-uppercase">BASIC RADIO BUTTON DESIGN COLORS</div>
            <div class="card-body">
              <div class="demo-radio-button">
                <input name="group4" type="radio" id="radio_7" class="radio-col-primary" checked />
                <label for="radio_7">Primary</label>
                <input name="group4" type="radio" id="radio_9" class="radio-col-success" />
                <label for="radio_9">Success</label>
                <input name="group4" type="radio" id="radio_10" class="radio-col-info" />
                <label for="radio_10">Info</label>
                <input name="group4" type="radio" id="radio_12" class="radio-col-warning" />
                <label for="radio_12">Warning</label>
                <input name="group4" type="radio" id="radio_13" class="radio-col-danger" />
                <label for="radio_13">Danger</label>
                <input name="group4" type="radio" id="radio_15" class="radio-col-dark" />
                <label for="radio_15">Dark</label>
                <input name="group4" type="radio" id="radio_16" class="radio-col-secondary" />
                <label for="radio_16">Secondary</label> 
            </div>
            </div>
          </div>
          <div class="card mt-30">
            <div class="card-header text-uppercase">BASIC RADIO BUTTON DESIGN COLORS WITH OUTLINE</div>
            <div class="card-body">
              <div class="demo-radio-button">
                <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-primary" checked />
                <label for="radio_30">Primary</label>                   
                <input name="group5" type="radio" id="radio_32" class="with-gap radio-col-success" />
                <label for="radio_32">Success</label>
                <input name="group5" type="radio" id="radio_33" class="with-gap radio-col-info" />
                <label for="radio_33">Info</label>
                <input name="group5" type="radio" id="radio_35" class="with-gap radio-col-warning" />
                <label for="radio_35">Warning</label>
                <input name="group5" type="radio" id="radio_36" class="with-gap radio-col-danger" />
                <label for="radio_36">Danger</label>
                <input name="group5" type="radio" id="radio_38" class="with-gap radio-col-dark" />
                <label for="radio_38">Dark</label>
                <input name="group5" type="radio" id="radio_39" class="with-gap radio-col-secondary" />
                <label for="radio_39">Secondary</label>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 DashRock Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
   
  </div><!--End wrapper-->



	
</body>

<!-- Mirrored from codervent.com/dashrock/color-admin/ui-checkbox-radio.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Oct 2018 13:52:37 GMT -->
</html>
