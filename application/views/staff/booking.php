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
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Delivery Progress Information</h3>
        </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
          <table id="bookingstaff" class="table table-bordered table-hover table-striped">
          <thead>
            <tr>
              <th hidden></th>
              <th>Waybill</th>
              <th>Customer</th>
              <th>Date</th>
              <th>Product</th>
              <th>Pieces</th>
              <th>Truck No.</th>
              <th>Driver ID</th>
              <th>Helper ID</th>
              <th>Destination</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($books as $book): ?>
              <tr>
                  <td hidden><?= $book->created?></td>
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
                          </div>
                          <?php }elseif($book->action==3){?>
                          <div class="label label-primary">
                            <strong>In-Transit</strong>
                          </div>
                        <?php }elseif($book->action==4){?>
                          <div class="label label-success">
                            <strong>Arrived</strong>
                          </div>
                        <?php }else{?>
                          <div class="label label-warning">
                            <strong>Pending</strong>
                          </div>
                     <?php   }?></td>
                  <td>
                  <a href="<?= base_url().'bookingstaff/view/'.$book->id?>" class="btn btn-default btn.lg" role="button">
                  <span class="fa fa-eye" aria-hidden="true"></span></a>
                  <a href="<?= base_url().'bookingstaff/edit/'.$book->id?>" class="btn btn-default btn.lg" role="button">
                  <span class="fa fa-edit" aria-hidden="true"></span></a>
                        
                <!-- <a href="<?=base_url('bookingstaff/del/'.$book->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" ></span></a> -->
              </td>
            </tr>
            </tfoot>
            <?php endforeach; ?> 
          </table>
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
<script>
   $(function () {
    $('#bookingstaff').DataTable()
    $('#example7').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>