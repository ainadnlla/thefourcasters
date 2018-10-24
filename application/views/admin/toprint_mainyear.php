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
        <b>Maintenance Report</b><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <form  class="form-horizontal"  action ="<?=base_url()?>admin/toprint_mainyear/"  method="get">
    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
                <th>Maintenance Date</th>
                <th>Maintenance Description</th>
                <th>Supplier</th>
                <th>Description</th>
                <th>Purchase</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
          </thead>
            <tbody>
              <?php foreach($mainyears as $mainyear): ?>
                <tr>
                    <td><?= date('M d, Y - g:i A', strtotime($mainyear->date))?></td>
                    <td><?= $mainyear->warning?></td>
                    <td><?= $mainyear->supplier?></td>                            
                    <td><?= $mainyear->description?></td>
                    <td><?= $mainyear->purchased?></td>
                    <td><?= $mainyear->price?></td>
                    <td><?= $mainyear->unit?></td>
                    <td><?= $mainyear->quantity?></td>
                    <td><?= $mainyear->amount?></td>
                </tr>
            </tfoot>
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