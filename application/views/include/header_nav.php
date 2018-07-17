<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?=base_url().'user/index'?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>FC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><!--LOGO HERE--></span>
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
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Angelogistics Forwarder Corporation
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
        <a href="<?=base_url().'user/index'?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="#<?//=base_url().'user/manageuser'?>">
         <i class="fa fa-fw fa-map"></i> <span>Truck GPS</span>
          </a>
        </li>

      <li>
        <a href="<?=base_url().'user/manageuser'?>">
            <i class="fa fa-laptop"></i> <span>User Priveleges</span>
          </a>
        </li>

        <li>
          <a href="<?=base_url().'user/form'?>">
            <i class="fa fa-edit"></i> <span>Registration Form</span>
          </a>
        </li>

        <li>
          <a href="<?=base_url().'user/table'?>">
            <i class="fa fa-table"></i> <span>Truck Details</span>
          </a>
        </li>
        
        <li>
          <a href="<?=base_url().'user/calendar'?>">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">0</small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url().'user/inbox'?>"><i class="fa fa-circle-o"></i> Inbox</a></li>
            <li><a href="<?=base_url().'user/compose'?>"><i class="fa fa-circle-o"></i> Compose</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Sample1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sample2</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sample3</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Sample4</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
