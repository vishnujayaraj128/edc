<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Forest App</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Plugins css -->
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

<!-- App css -->

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>


</head>


<body>

<!-- Begin page -->
<div id="wrapper">

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

<div class="slimscroll-menu" id="remove-scroll">

<!-- LOGO -->
<div class="topbar-left">
<a href="index.html" class="logo">
<span>
<img src="assets/images/logo.png" alt="" height="22">
</span>
<i>
<img src="assets/images/logo_sm.png" alt="" height="28">
</i>
</a>
</div>

<!-- User box -->
<div class="user-box">
<!--  <div class="user-img">
<img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
</div>
<h5><a href="#">Maxine Kennedy</a> </h5>
<p class="text-muted">Admin Head</p> -->
</div>

<!--- Sidemenu -->
<div id="sidebar-menu">

<ul class="metismenu" id="side-menu">

<!--<li class="menu-title">Navigation</li>-->

<li>
<a href="index.html">
    <i class="fi-air-play"></i><span> Dashboard </span>
</a>
</li>

<li>
<a href="javascript: void(0);"><i class="fi-layers"></i> <span> Employee </span> <span class="menu-arrow"></span></a>
<ul class="nav-second-level" aria-expanded="false">
    <li><a href="<?php echo base_url('admin/employeeAdd'); ?>">Add Employee</a></li>
    <li><a href="apps-tickets.html">View All Employee</a></li>

</ul>
</li>


<li>
    <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Salary </span> <span class="menu-arrow"></span></a>
    <ul class="nav-second-level" aria-expanded="false">
        <li><a href="apps-calendar.html">Add Salary</a></li>
        <li><a href="apps-tickets.html">View Salary</a></li>
    
    </ul>
    </li>

    <li>
        <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Loan </span> <span class="menu-arrow"></span></a>
        <ul class="nav-second-level" aria-expanded="false">
            <li><a href="apps-calendar.html">Add Loan</a></li>
            <li><a href="apps-tickets.html">View Loan</a></li>
        
        </ul>
        </li>


        <li>
            <a href="javascript: void(0);"><i class="fi-layers"></i> <span> General </span> <span class="menu-arrow"></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="<?php echo base_url('admin/EmployeeCategory'); ?>">Category</a></li>
                <li><a href="apps-tickets.html">Rate</a></li>
                <li><a href="apps-tickets.html">CDF / LIC /FDA</a></li>
                <li><a href="apps-tickets.html">Office Accounts</a></li>
            
            </ul>
            </li>
    






</ul>

</div>
<!-- Sidebar -->

<div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->




<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="content-page">
<!-- Top Bar Start -->
<div class="topbar">

<nav class="navbar-custom">

<ul class="list-unstyled topbar-right-menu float-right mb-0">



<li class="dropdown notification-list">
<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
    aria-haspopup="false" aria-expanded="false">
    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Jency<i class="mdi mdi-chevron-down"></i> </span>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
    
    <a href="javascript:void(0);" class="dropdown-item notify-item">
        <i class="fi-power"></i> <span>Logout</span>
    </a>

</div>
</li>

</ul>

<ul class="list-inline menu-left mb-0">
<li class="float-left">
<button class="button-menu-mobile open-left disable-btn">
    <i class="dripicons-menu"></i>
</button>
</li>
<li>
<div class="page-title-box">
    <h4 class="page-title">EDC Management System</h4>
    
</div>
</li>

</ul>

</nav>

</div>
<hr>
<!-- Top Bar End -->



<!-- Start Page content -->
<div class="content">
<div class="container-fluid">