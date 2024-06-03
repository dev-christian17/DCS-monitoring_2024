<?php
    require_once(__DIR__ . '\php\init.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>DCS Monitoring</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/logo/monitoring.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css">
    
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <style>
    .loader8 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .loader-inner {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        animation: spin 2s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

    <!-- END Custom CSS-->

  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="Chameleon admin logo" src="theme-assets/images/logo/monitoring.png"/>
              <h3 class="brand-text">DCS MONITORING</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
		<li class="active"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
          <li class=" nav-item"><a href="trainee.php"><i class="ft-user"></i><span class="menu-title" data-i18n="">Trainee's Record</span></a></li>
          <li class=" nav-item"><a href=""><i class="ft-book"></i><span class="menu-title" data-i18n="">Attendace Record</span></a></li>
          <li class=" nav-item"><a href=""><i class="la la-tasks"></i><span class="menu-title" data-i18n="">Task's</span></a></li>
          <li class=" nav-item"><a href=""><i class="la la-tasks"></i><span class="menu-title" data-i18n="">Job Order</span></a></li>
          <li class=" nav-item"><a href=""><i class="ft-shopping-cart"></i><span class="menu-title" data-i18n="">Inventory</span></a></li>
          <li class=" nav-item"><a href=""><i class="la la-archive"></i><span class="menu-title" data-i18n="">Archive</span></a></li>
        </ul>
      </div>
	  <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Trainee's Record</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Trainee's Record
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>

<!-- Striped rows start -->

<div class="row">
	<div class="col-12">
  <?php insertTrainee();?>
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Trainee's List</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <!--modal body-->
      <div class="modal-dialog modal-dialog-centered ml2-left">
        <div class="container">
          <div class="row">
            <div class="col-md-offset-4 col-lg-4 col-md-offset-3 col-sm-6">
                    
              <div class="form-container">
                <form class="form-horizontal modal-content" method="get">
                  <h3 class="title">Login Form</h3>

                  <div class="form-group">
                    <span class="input-icon"><i class="la la-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                  </div>

                  <div class="form-group">
                    <span class="input-icon"><i class="la la-terminal"></i></span>
                    <input type="text" class="form-control" name="fullname"  placeholder="Full name" required>
                  </div>

                  <div class="form-group">
                    <span class="input-icon"><i class="la la-envelope"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                  </div>

                  <div class="form-group">
                    <span class="input-icon"><i class="la la-lock"></i></span>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                            
                  <button class="btn">Add</button>
                            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End modal body-->
    </div><!--End Modal-->
    
			<div class="card-content collapse show ">
        <div class="col-lg-12 col-md-12">
          <div class="form-group">
            <button type="button" class="btn btn-success btn-min-width mleft-1" data-toggle="modal" data-target="#exampleModal" onclick="generatePassword()"><i class="la la-user-plus" ></i> Add Trainee</button>
           </div>
        </div>
			  <div class="card-content collapse show border border-light mr-left mb-1" style="width:96%;">
          <div class="table-responsive border-light mr-left  mb-1" style="width:96%;">
            <table id="datatable"class="table " >
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col" >Fullname</th>
                  <th scope="col">Username</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Password</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $trainees = viewTrainees();?>
              <?php if (!empty($trainees)) : ?>
                    <?php foreach ($trainees as $index => $trainee) : ?>
                        <tr>
                            <td ><?php echo $index + 1; ?></td>
                            <td><?php echo htmlspecialchars($trainee['fullname']); ?></td>
                            <td><?php echo htmlspecialchars($trainee['username']); ?></td>
                            <td><?php echo htmlspecialchars($trainee['email']); ?></td>
                            <td><?php echo htmlspecialchars($trainee['password']); ?></td>
                            <td>
                              <a class="dropdown nav-link dropdown-user-link"  data-toggle="dropdown">⋮</a>
                              <div class="dropdown-menu dropdown-menu-right">
                                
                                  <a class="dropdown-item edit-btn" data-user-id="<?php echo $index+1 ; ?>" data-toggle="modal" data-target="#exampleModal1"><i class="la la-edit"></i> Edit</a>
                                  <a class="dropdown-item" href="#"><i class="la la-trash"></i> Delete</a>
                                  <a class="dropdown-item" href="#"><i class="la la-archive"></i> Archive</a>
                                  
                              </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4">No trainees found.</td>
                    </tr>
                <?php endif; ?>
              </tbody>
            </table>
	        </div>
        </div>  

</div>


		</div>
	</div>
</div>
<!-- Striped rows end -->


        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2024  &copy; Copyright <a class="text-bold-800 grey darken-2" target="_blank">Cavite State University - Cavite College of Arts and Trades Campus</a></span>
      </div>
    </footer>
    <script>
        function generatePassword() 
        {
            var length = 10; // length of password
            var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()"; // characters to choose from
            var password = "";

            for (var i = 0; i < length; i++) {
                password += characters.charAt(Math.floor(Math.random() * characters.length));
            }

            document.getElementById("password").value = password;
        }
        
    </script> 

    
    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $(document).ready(function(){
        $('#datatable').DataTable();
      });
    </script>

<script>
    document.getElementById('selectAll').addEventListener('change', function() {
      let checkboxes = document.querySelectorAll('.select-item');
      for (let checkbox of checkboxes) {
        checkbox.checked = this.checked;
      }
    });

    let selectItems = document.querySelectorAll('.select-item');
    for (let item of selectItems) {
      item.addEventListener('change', function() {
        let allChecked = document.querySelectorAll('.select-item:checked').length === selectItems.length;
        document.getElementById('selectAll').checked = allChecked;
      });
    }
  </script>
  </body>
</html>