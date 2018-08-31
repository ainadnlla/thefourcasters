<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Delivery</h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url().'customer/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Booking Delivery</a></li>
  </ol>
</section>

<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Delivery Progress Information</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Waybill</th>
              <th>Equipment</th>
              <th>Driver</th>
              <th>Helper</th>
              <th>Date</th>
              <th>Customer Type</th>
              <th>Importer</th>
              <th>Destination</th>
              <th>Status</th>
            </tr>
            
            <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <a href="<?php echo base_url('customer/addbooking'); ?>" class="btn btn-success">Add New</a>
  </div>
</section>
</div>

<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>The Fourcasters</b>
</div>
<strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
reserved.
</footer>

