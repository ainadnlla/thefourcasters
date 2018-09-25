<div class="content-wrapper">
    <section class="content-header">
      <h1>Booking Delivery</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'customer/index'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Booking Delivery</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Delivery Progress Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="customer" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Waybill</th>
                  <th>Date</th>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Pieces</th>
                  <th>Customer Type</th>
                  <th>Name</th>
                  <th>Cargo Size</th>
                  <th>Truck</th>
                  <th>Plate No.</th>
                  <th>Driver No.</th>
                  <th>Driver Name</th>
                  <th>Helper No.</th>
                  <th>Helper Name</th>
                  <th>Destination</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($books as $book): ?>
                <tr>
                  <td><?= $book->id?></td>
                  <td></td>
                  <td><?= $book->date?></td>
                  <td><?= $book->product?></td>
                  <td><?= $book->description?></td>
                  <td><?= $book->pieces?></td>
                  <td><?= $book->cust_type?></td>
                  <td><?= $book->custname?></td>
                  <td><?= $book->cargo?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?= $book->destination?></td>
                  <td></td>
                  <td></td>
                </tr>
                </tfoot>
              <?php endforeach; ?> 
              </table>
              <div class="box-footer">
              <a href="<?=base_url()?>booking/add" class="btn btn-success btn-block btn-sm" role="button">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Book Schedule</a>
                </div>

                <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
        </div>       
    </section>
</div>
</div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>