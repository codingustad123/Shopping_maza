<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="../src/scss/table.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="src/style.css">
  <link rel="stylesheet" href="st.css">
  
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
   

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside style="background-color: rgb(255, 68, 0); color: white;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="background-color: rgb(37, 37, 37);"  href="index3.html" class="brand-link">
      <img src="dist/img/logo.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" >
      <span style="color: aliceblue; " class="brand-text font-weight">Shopping Maza</span>
    </a>

    <!-- Sidebar -->
    <div  class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         <a href="../users/index.php" target="_blank" > <img src="dist/img/icons8-share-48.png" style="width: 30px; height: 30px;"  alt="User Image"></a>
        </div> 
        <div class="info">
          <a style="color: white;" href="../users/index.php"  target="_blank">Goto Website</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li  class="nav-item">
                <a href="../admin/index.php" class="nav-link">
                  <i ><img style="margin-top: -5px;" width="25" height="24" src="https://img.icons8.com/external-prettycons-lineal-prettycons/49/FFFFFF/external-dashboard-essentials-prettycons-lineal-prettycons.png" alt="external-dashboard-essentials-prettycons-lineal-prettycons"/></i>
                  <p  style="color: rgb(255, 255, 255); font-weight: 400; font-size: 17px;">
                    Dashboard
                    
                  </p>
                </a>
              </li>
       
          
          <li  class="nav-item">
            <a href="#" class="nav-link">
              <i><img width="25" height="25" src="https://img.icons8.com/ios/50/FFFFFF/open-box.png" alt="open-box"/></i>
              <p style="color: rgb(255, 255, 255); font-weight: 400; font-size: 17px;">
               Manage Products
                <i class="fas fa-angle-left right"></i>
          
              </p>
            </a>
            <ul style="margin-left: 15px;" class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_pro.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: rgb(255, 255, 255); font-weight: 400; font-size: 20px;">Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_pro.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: rgb(255, 255, 255); font-weight: 400; font-size: 20px;">View Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: rgb(255, 255, 255); font-weight: 400; font-size: 20px;">Deal Of The Day</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_deal.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: rgb(255, 255, 255); font-weight: 400; font-size: 20px;">View Deals</p>
                </a>
              </li>
            
            </ul>
          </li>
       

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i><img width="25" height="25" src="https://img.icons8.com/wired/64/FFFFFF/purchase-order.png" alt="purchase-order"/></i>
              <p  style="color: rgb(255, 255, 255); font-weight: 400; font-size: 17px; ">
                Manage Orders
                <i class="fas fa-angle-left right"></i>
          
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_order.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color: rgb(255, 255, 255); font-weight: 400; font-size: 20px;">View Orders</p>
                </a>
              </li>
             
            
            </ul>
          </li>
       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>











