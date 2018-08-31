<body class="hold-transition skin-red-light sidebar-mini">
<!--
   staff-purple
   customer-red
 -->
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?=base_url().'customer/homepage'?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AFC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><p>Angelogistics Co. Ltd.</p></span>
    </a>
    

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><!--number of messages here--></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <!--number of messages here--> messages</li>
              <li>
                <!-- Messages code here -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><!--number of notif here--></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <!--number of notif here--> notifications</li>
              <li>
                <!-- Notifications code here -->
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="#" class="user-image" alt="User Image">
              <span class="hidden-xs">CUSTOMER NAME</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="#" class="img-circle" alt="User Image">

                <p>
                  Angelogistics Forwarder Corporation
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#"> <span class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="<?=base_url().'customer/logout'?>"> <span class="btn btn-default btn-flat">Sign out</span></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="#" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Customer Name</p>
          <a href="<?= base_url()."customer/profile"?>"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
        <a href="<?=base_url().'customer/homepage'?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?=base_url().'customer/booking'?>">
          <i class="fa fa-info-circle"></i> <span>Booking</span>
        </a>
      </li>
      <li>
        <a href="<?=base_url().'customer/truckgps'?>">
          <i class="fa fa-dashboard"></i> <span>Truck GPS</span>
        </a>
      </li>
      <li>
          <a href="<?=base_url().'customer/calendar'?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url().'customer/inbox'?>"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="<?=base_url().'customers/compose'?>"><i class="fa fa-circle-o"></i> Compose</a></li>
          </ul>
        </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
</div>