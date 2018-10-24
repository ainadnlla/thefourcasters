<div class="content-wrapper">
    <section class="content-header">
      <h1>Booking Delivery</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'customer/booking'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Booking Delivery</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Delivery Progress Information</h3>
            </div>
        
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="custbooking" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Waybill</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Product</th>
                <th>Pieces</th>
                <th>Truck No.</th>
                <th>Driver Name</th>
                <th>Helper Name</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($books as $book): ?>
                <tr>
                <td><?= $book->waybill?></td>
                  <td class="text-capitalize"><?= $book->custname?></td>
                  <td><?= date('M d, Y', strtotime($book->date))?></td>
                  <td class="text-capitalize"><?= $book->product?></td>
                  <td><?= $book->pieces?></td>
                  <td class="text-uppercase"><?= $book->plate_no?></td>
                  <td class="text-capitalize"><?= $book->drivername?></td>
                  <td class="text-capitalize"><?= $book->helpername?></td>
                  <td><?= $book->destination?></td>
                  <td>₱<?= $book->price?></td>
                  <td>  <?php if($book->action==1){ ?>
                          <div class="label label-success">
                            <strong>Accepted</strong>
                          </div>
                        <?php }elseif($book->action==2){ ?>
                          <div class="label label-danger">
                            <strong>Denied</strong>
                          </div></p>
                        <?php }else{?>
                          <div class="label label-warning">
                            <strong>Pending</strong>
                          </div>
                     <?php   }?>
                    </td>
                  <td><a href="<?= base_url().'booking/edit/'.$book->id?>" class="btn btn-default btn.lg" role="button">
                    <span class="fa fa-edit" aria-hidden="true">
                    </span></a></td>
                </tr>
                </tfoot>
              <?php endforeach; ?> 
              </table>
         
              <div class="box-footer">
              <a href="<?=base_url()?>booking/add" class="btn btn-success btn-block btn-sm" role="button">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Book Schedule</a>
                </div>
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
<script>
   $(function () {
    $('#custbooking').DataTable()
    $('#custbooking2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>