<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url().'customer/booking'?>" class="logo">
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

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url().'images/'.$this->session->picpath?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?= $this->session->name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src=<?=base_url().'images/'.$this->session->picpath?> class="img-circle" alt="User Image">

                <p>
                <?= $this->session->name; ?>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=base_url().'customer/profile'?>"> <span class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="<?=base_url().'login/logoutcustomer'?>"> <span class="btn btn-default btn-flat">Sign out</span></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>

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
          <a href="<?= base_url()."customer/profile"?>"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

          <li>
          <a href="<?=base_url().'customer/profile'?>">
            <i class="fa fa-user"></i> <span>Profile</span>
        </a>
      </li>
      
        <li>
          <a href="<?=base_url().'customer/booking'?>">
            <i class="fa fa-info-circle"></i> <span>Booking Information</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
