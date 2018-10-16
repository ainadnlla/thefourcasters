<link rel="stylesheet" href="<?=base_url()?>css/invoice">

</head>
<body onload="window.print();">
<?php error_reporting(0);?>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
        <img src="<?= base_url()."images/logo.jpg"?>" class="img-circle" width="50" alt="User Image"> Angelogistics Forwarder Corporation
          <small class="pull-right"><?php date_default_timezone_set('Asia/Manila'); echo date('F d, Y'); ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Angelogistics Forwarder Corporation</strong><br>
          103B A Halcon St. Cor Maria Clara<br>
          Quezon City, Philippines<br>
          Phone: (02) 714-1762<br>
          Email: jsanlangustelao@gmail.com
        </address>
      </div>
      <!-- /.col -->
 
      <div class="col-sm-4 invoice-col">
        <b>Report # <?php echo mt_rand(10000, 99999) ?></b><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <form  class="form-horizontal"  action ="<?=base_url()?>admin/sample/"  method="get">
    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Waybill</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Product</th>
            <th>Pieces</th>
            <th>Cargo Size</th>
            <th>Destination</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($reps as $rep): ?>
          <tr>
            <td><?= $rep->waybill?></td>
            <td><?= $rep->custname?></td>
            <td><?= $rep->date?></td>
            <td><?= $rep->product?></td>
            <td><?= $rep->pieces?></td>
            <td><?= $rep->cargo?></td>
            <td><?= $rep->destination?></td>
            <td align="right"><?= number_format("$rep->price", 2)?></td>
            <td>  <?php if($rep->action==1){ ?>
            <div class="label label-success">
              <strong>Accepted</strong>
            </div>
            <?php }elseif($rep->action==2){ ?>
              <div class="label label-danger">
                <strong>Denied</strong>
              </div></p>
            <?php }else{?>
              <div class="label label-warning">
                <strong>Pending</strong>
              </div>
            <?php  }?>
            </td>
          </tr>
          <?php endforeach; ?> 
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
</form>
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">  
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Total Amount as of <?php date_default_timezone_set('Asia/Manila'); echo date('m/d/y'); ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Total:</th>
              <td>P <?php echo number_format("$totalprice",2);?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>