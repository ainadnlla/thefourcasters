<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Booking Information</a></li>
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
          <table id="Staff" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Waybill</th>
              <th>Customer</th>
              <th>Customer Type</th>
              <th>Date</th>
              <th>Product</th>
              <th>Description</th>
              <th>Pieces</th>
              <th>Cargo Size</th>
              <th>Truck</th>
              <th>Plate No.</th>
              <th>Driver No.</th>
              <th>Driver Name</th>
              <th>Conductor No.</th>
              <th>Conductor Name</th>
              <th>Destination</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <?php foreach($books as $book): ?>
            <tbody>
              <tr>
                  <td><?= $book->id?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?= $book->date?></td>
                  <td><?= $book->product?></td>
                  <td><?= $book->description?></td>
                  <td><?= $book->pieces?></td>
                  <td><?= $book->cargo?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                  <a href="<?= base_url().'bookingadmin/edit/'.$book->id?>" class="btn btn-default btn.lg" role="button">
                  <span class="fa fa-eye" aria-hidden="true"></span></a>
                  <a href="<?= base_url().'bookingadmin/edit/'.$book->id?>" class="btn btn-default btn.lg" role="button">
                  <span class="fa fa-edit" aria-hidden="true"></span></a>
                        
                <!-- <a href="<?=base_url('bookingadmin/del/'.$book->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" ></span></a> -->
              </td>
            </tr>
            </tfoot>
          <?php endforeach; ?> 
          </table>

          <!-- <div class="box-footer">
                <a href="<?=base_url()?>bookingadmin/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Booking Information</a>
                </div> -->

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