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
        <h3><?php echo $this->db->count_all('booking') ?></h3>
        <p>Total No. of Bookings</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/booking'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $this->db->where('status',2)->from("truck")->count_all_results(); ?></h3>
        <p>Truck Under Maintenance</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/truckdetails'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $this->db->where('status',1)->from("driver")->count_all_results(); ?></h3>
        <p>Available Driver</p>
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
        <h3><?php echo $this->db->where('status',1)->from("helper")->count_all_results(); ?></h3>
        <p>Available Helper</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
        <a href="<?=base_url().'admin/userdetails_helper'?>" class="small-box-footer">Proceed to Details <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>

