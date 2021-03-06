<?php  if($this->session->userdata('username')){

}
else
{
    $this->load->view('admin/signin');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Nivista-MIS</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url();?>assets/admin/images/favicon.ico" type="image/x-icon">
  <!-- notifications css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/notifications/css/lobibox.min.css"/>
  <!-- Vector CSS -->
  <link href="<?php echo base_url();?>assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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

<body onload="info_noti()">

<!-- Start wrapper-->
 <div id="wrapper">
 
<?php include('sidebar.php');?>

<!--Start topbar header-->

<?php include('header.php');?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      
      <div class="row mt-4">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-purpink">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white"><?php  echo $this->db->from("student_1819")->count_all_results();?></h4>
                <span class="text-white">Total Students</span>
              </div>
			  <div class="align-self-center"><span id="dash-chart-1"></span></div>
            </div>
            </div>
          </div>
        </div>
		<div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-scooter">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white"><?php  echo $this->db->from("teacher")->count_all_results();?></h4>
                <span class="text-white">Total Teachers</span>
              </div>
			  <div class="align-self-center"><span id="dash-chart-2"></span></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ibiza">
            <div class="card-body">
              <div class="media">
			  <div class="media-body text-left">
                <h4 class="text-white"><?php  $this->db->where('stay_type','Day Scholar');
     $result = $this->db->get('student_1819')->num_rows(); echo $result ;?></h4>
                <span class="text-white">Day Scholar</span>
              </div>
               <div class="align-self-center"><span id="dash-chart-3"></span></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ohhappiness">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white"><?php  $this->db->where('stay_type','Boarder');       $result = $this->db->get('student_1819')->num_rows(); echo $result ;?></h4>
                <span class="text-white">Boarder</span>
              </div>
			  <div class="align-self-center"><span id="dash-chart-4"></span></div>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row -->
      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12">
          <div class="card">
		   <div class="card-header">
               Admission Statistics   
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
				</div>
             <div class="card-body">
               <canvas id="dash-chart-5" height="100"></canvas>
			   <div class="row">
				<div class="col-12">
				  <div class="card bg-transparent shadow-none mb-0">
					<div class="card-content">
					  <div class="row row-group m-0">
						<div class="col-12 col-lg-6 col-xl-3">
						  <div class="card-body text-center">
							<h3 class="text-danger">27</h3>
							<span>Today's Entry</span>
						  </div>
						</div>
						<div class="col-12 col-lg-6 col-xl-3">
						  <div class="card-body text-center">
							<h3 class="text-warning">142</h3>
							<span>This Week Entry</span>
						  </div>
						</div>
						<div class="col-12 col-lg-6 col-xl-3">
						  <div class="card-body text-center">
							<h3 class="text-success">220</h3>
							<span>This Month Entry</span>
						  </div>
						</div>
						<div class="col-12 col-lg-6 col-xl-3">
						  <div class="card-body text-center">
							<h3 class="text-info">850</h3>
							<span>This Year Entry</span>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </div><!--End Row-->
             </div>
          </div>
        </div>
      </div><!--End Row-->
	  
	  <div class="row">
	    <div class="col-12 col-lg-6 col-xl-6">
          <div class="card">
		   <div class="card-header">
                Top Ranking Categories
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
              </div>
             <div class="card-body">
                <canvas id="dash-chart-6"></canvas>
            </div>
          </div>
        </div>
		<div class="col-12 col-lg-6 col-xl-6">
          <div class="card">
		   <div class="card-header">
                Attendance
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
              </div>
             <div class="card-body">
                <canvas id="dash-chart-7"></canvas>
            </div>
          </div>
        </div>
	  </div><!--End Row-->
<!--
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
		  <div class="card-header border-0">
                Recent Orders
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
                </div>
               <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>Photo</th>
                     <th>Product</th>
                     <th>Amount</th>
                     <th>Status</th>
                     <th>Completion</th>
                     <th>Date</th>
                   </tr>
                   </thead>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="<?php echo base_url();?>assets/admin/images/products/1.png" class="product-img" alt="product img">
                    </td>
					<td>Headphone GL</td>
                    <td>$1,840 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 60%"></div>
                       </div>
                    </td>
					<td>10 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                     <img alt="Image placeholder" src="<?php echo base_url();?>assets/admin/images/products/2.png" class="product-img" alt="product img">
                    </td>
					<td>Clasic Shoes</td>
                    <td>$1,520 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
					<td>12 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="<?php echo base_url();?>assets/admin/images/products/3.png" class="product-img" alt="product img">
                    </td>
                    <td>Hand Watch</td>
                    <td>$1,620 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-warning"></i> delayed
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-orange" role="progressbar" style="width: 70%"></div>
                       </div>
                    </td>
					<td>14 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="<?php echo base_url();?>assets/admin/images/products/4.png" class="product-img" alt="product img">
                    </td>
                    <td>Hand Camera</td>
                    <td>$2,220 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-info"></i> on schedule
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                       </div>
                    </td>
					<td>16 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="<?php echo base_url();?>assets/admin/images/products/5.png" class="product-img" alt="product img">
                    </td>
                    <td>Iphone-X Pro</td>
                    <td>$9,890 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-success"></i> completed
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div>
                    </td>
					<td>17 July 2018</td>
                   </tr>
				   <tr>
                    <td>
                      <img alt="Image placeholder" src="<?php echo base_url();?>assets/admin/images/products/6.png" class="product-img" alt="product img">
                    </td>
                    <td>Ladies Purse</td>
                    <td>$3,420 USD</td>
                    <td>
                      <span class="badge-dot">
                        <i class="bg-danger"></i> pending
                      </span>
                    </td>
                    <td>
					   <div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 80%"></div>
                       </div>
                    </td>
					<td>18 July 2018</td>
                   </tr>
                 </table>
               </div>
          </div>
        </div>
      </div>

      <div class="row">
         <div class="col-12 col-lg-6 col-xl-6">
           <div class="card">
		     <div class="card-header">Top Selling Country
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
				</div>
              <div class="card-body">
			  
                     <div id="dashboard-map" style="height: 210px"></div>
                  
                     <p><i class="flag-icon flag-icon-us mr-1"></i> USA <span class="float-right">50%</span></p>
                     <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-royal" role="progressbar" style="width: 50%"></div>
                      </div>

                      <p class="mt-3"><i class="flag-icon flag-icon-ca mr-1"></i> Canada <span class="float-right">65%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 65%"></div>
                      </div>

                      <p class="mt-3"><i class="flag-icon flag-icon-gb mr-1"></i> England <span class="float-right">85%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-meridian" role="progressbar" style="width: 85%"></div>
                        </div>

                      <p class="mt-3"><i class="flag-icon flag-icon-au mr-1"></i> Australia <span class="float-right">75%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-orange" role="progressbar" style="width: 75%"></div>
                        </div>

                      <p class="mt-3"><i class="flag-icon flag-icon-in mr-1"></i> India <span class="float-right">45%</span></p>
                      <div class="progress" style="height: 5px;">
                          <div class="progress-bar gradient-violet" role="progressbar" style="width: 55%"></div>
                        </div>
              </div>
            </div>
         </div>

         <div class="col-12 col-lg-6 col-xl-6">
		    
			<div class="card">
			  <div class="card-header border-0">Traffic Resources
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
				</div>
			     <div class="table-responsive">
				    <table class="table align-items-center table-flush">
					 <thead>
					  <tr>
					    <th>Source</th>
					    <th>Path</th>
					    <th>Visits</th>
					  </tr>
					  </thead>
					  <tr>
					    <td><i class="fa fa-google-plus text-google"></i> Google</td>
					    <td>google.com</td>
					    <td>45 <span class="ml-3" id="dash-chart-8"></span></td>
					  </tr>
					  <tr>
					    <td><i class="fa fa-facebook-square text-facebook"></i> Facebook</td>
					    <td>facebook.com</td>
					    <td>56 <span class="ml-3" id="dash-chart-9"></span></td>
					  </tr>
					  <tr>
					    <td><i class="fa fa-twitter text-twitter"></i> Twitter</td>
					    <td>twitter.com</td>
					    <td>42 <span class="ml-3" id="dash-chart-10"></span></td>
					  </tr>
					  <tr>
					    <td><i class="fa fa-linkedin-square text-linkedin"></i> Linkedin</td>
					    <td>linkedin.com</td>
					    <td>52 <span class="ml-3" id="dash-chart-11"></span></td>
					  </tr>
					  <tr>
					    <td><i class="fa fa-behance text-behance"></i> Behance</td>
					    <td>behance.com</td>
					    <td>62 <span class="ml-3" id="dash-chart-12"></span></td>
					  </tr>
					  <tr>
					    <td><i class="fa fa-dribbble text-dribble"></i> Dribble</td>
					    <td>dribble.com</td>
					    <td>72 <span class="ml-3" id="dash-chart-13"></span></td>
					  </tr>
					  <tr>
					    <td><i class="fa fa-github text-github"></i> Github</td>
					    <td>github.com</td>
					    <td>33 <span class="ml-3" id="dash-chart-14"></span></td>
					  </tr>
					</table>
				
				 </div>
			</div>  
			
          <div class="card gradient-orange">
            <div class="card-body">
              <div class="media">
               <div class="align-self-center"><span id="dash-chart-15"></span></div>
              <div class="media-body text-right">
                <h4 class="text-white">82.56 %</h4>
                <span class="text-white">Bounce Rate</span>
              </div>
            </div>
            </div>
          </div>

         </div>
      </div>--><!--End Row-->
	  
	  <div class="card-group">
	     <div class="card border-right">
          <div class="card-header">
              Exam Result
			  <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
            </div>
          <div class="card-body">
            <canvas id="dash-chart-16" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Junior<span class="badge gradient-purpink text-white badge-pill shadow">90</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Middle<span class="badge gradient-orange
             text-white badge-pill shadow">80</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Senior<span class="badge gradient-meridian text-white badge-pill">86</span></li>
          </ul>
        </div>
		<div class="card border-right">
          <div class="card-header">
              Sports
			  <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
            </div>
          <div class="card-body">
            <canvas id="dash-chart-17" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Juniour <span class="badge gradient-quepal text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Middle<span class="badge gradient-violet
             text-white badge-pill shadow">08</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Senior<span class="badge gradient-ibiza text-white badge-pill shadow">23</span></li>
          </ul>
        </div>
		<div class="card">
          <div class="card-header">
              Other Activities
			  <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
            </div>
          <div class="card-body">
            <canvas id="dash-chart-18" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Junior<span class="badge gradient-knight text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Middle<span class="badge gradient-dusk
             text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Senior<span class="badge gradient-yoda text-white badge-pill shadow">25</span></li>
          </ul>
        </div>
	  </div>
	  
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<?php include('footer.php');?>