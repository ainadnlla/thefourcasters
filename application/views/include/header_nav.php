<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?=base_url().'admin/homepage'?>" class="logo">
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
              <img src=" <?= base_url()."images/logo.jpg"?>" class="user-image" alt="User Image">
             
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url()."images/logo.jpg"?>" class="img-circle" alt="User Image">

                <p>
                  Angelogistics Forwarder Corporation
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_url().'admin/profile'?>"> <span class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="<?=base_url().'admin/logout'?>"> <span class="btn btn-default btn-flat">Sign out</span></a>
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
          <img src="<?= base_url()."images/logo.jpg"?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="<?=base_url().'admin/profile'?>"><i class="fa fa-circle text-success"></i> Online</a>
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
        <a href="<?=base_url().'admin/homepage'?>">
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
            <li><a href="<?=base_url().'admin/truckdetails'?>"><i class="fa fa-table"></i> Truck Details</a></li>
            <li><a href="<?=base_url().'admin/truckgps'?>"><i class="fa fa-map-pin"></i> Truck GPS</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url().'admin/userdetails'?>"><i class="fa fa-circle-o"></i>User Details</a></li>
            <li><a href="<?=base_url().'admin/userprivelege'?>"><i class="fa fa-circle-o"></i>User Priveleges</a></li>
          </ul>
        </li>

        <li><a href="<?=base_url().'admin/booking'?>">
        <i class="fa fa-truck"></i>Booking Information</a></li>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        <li>
          <a href="<?=base_url().'admin/calendar'?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>

        <li>
          <a href="<?=base_url().'admin/stats'?>">
            <i class="fa fa-pie-chart"></i> <span>Reports</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>