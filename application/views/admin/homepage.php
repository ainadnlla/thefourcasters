 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     Dashboard
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
     <li class="active">Dashboard</li>
   </ol>
 </section>

 
 <!-- Main content -->
 <section class="content">

<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $this->db->count_all('staff') ?></h3>
        <p>Staff Accounts</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/userdetails_staff'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $this->db->count_all('customer') ?></h3>
        <p>Customer Accounts</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/userdetails_customer'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $this->db->count_all('driver') ?></h3>
        <p>Driver Accounts</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/userdetails_driver'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3><?php echo $this->db->count_all('helper') ?></h3>
        <p>Helper Accounts</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/userdetails_helper'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>