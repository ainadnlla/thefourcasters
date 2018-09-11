<body class="hold-transition skin-purple-light sidebar-mini">
<!--
   staff-purple
   customer-red
 -->
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?=base_url().'staff/homepage'?>" class="logo">
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
              <img src="<?=base_url().'images/'.$this->session->picpath?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?= $this->session->name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url().'images/'.$this->session->picpath?>" class="img-circle" alt="User Image">

                <p>
                <?=$this->session->name?>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#"> <span class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="<?=base_url().'staff/logout'?>"> <span class="btn btn-default btn-flat">Sign out</span></a>
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
          <img src="<?=base_url().'images/'.$this->session->picpath?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->name?></p>
          <a href="<?= base_url()."staff/profile"?>"><i class="fa fa-circle text-success"></i> Online</a>
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
        <a href="<?=base_url().'staff/homepage'?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
 

      <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Truck Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php if($this->session->userdata('priv') =='1'OR $this->session->userdata('priv')=='3') {?>
            <li><a href="<?=base_url().'staff/truckdetails'?>"><i class="fa fa-table"></i> Truck Details</a></li>
            <?php }else{}?>
            <li><a href="<?=base_url().'staff/truckgps'?>"><i class="fa fa-map-pin"></i> Truck GPS</a></li>
          </ul>
        </li>
      <?php  if($this->session->userdata('priv') =='1'OR $this->session->userdata('priv')=='2') {?>
        <li>
        <a href="<?=base_url().'staff/booking'?>">
          <i class="fa fa-info-circle"></i> <span>Booking Information</span>
        </a>
      </li>
      <?php }else{

      }?>

<?php if($this->session->userdata('priv') =='4'OR $this->session->userdata('priv')=='5' OR $this->session->userdata('priv') =='1') {?>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url().'staff/userdetails'?>"><i class="fa fa-circle-o"></i>User Accounts</a></li>
          </ul>
        </li>
<?php 
}else{
} ?>

        <li>
          <a href="<?=base_url().'staff/calendar'?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url().'admin/stat'?>">
            <i class="fa fa-pie-chart"></i> <span>Reports</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
