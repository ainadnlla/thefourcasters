<div class="content-wrapper">
    <section class="content-header">
      <h1>Booking Delivery</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'customer/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Booking Delivery</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Delivery Progress Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="staff" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Waybill</th>
                  <th>Date</th>
                  <th>Customer Type</th>
                  <th>Name</th>
                  <th>Cargo Size</th>
                  <th>Truck</th>
                  <th>Plate No.</th>
                  <th>Driver Name</th>
                  <th>license No.</th>
                  <th>Helper Name</th>
                  <th>license No.</th>
                  <th>Price</th>
                </tr>
                </thead>
                <tbody>
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
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
              <div class="box-footer">
                <a href="<?=base_url()?>booking/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Truck Details</a>
                </div>

                <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
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