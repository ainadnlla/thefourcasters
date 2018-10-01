<link rel="stylesheet" href="<?=base_url()?>css/invoice">

</head>
<body onload="window.print();">
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
        <b>Report #</b><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Waybill</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Cargo Size</th>
            <th>Destination</th>
            <th>Price</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($emps as $emp): ?>
          <tr>
            <td><?= $emp->waybill?></td>
            <td><?= $emp->custname?></td>
            <td><?= $emp->date?></td>
            <td><?= $emp->cargo?></td>
            <td><?= $emp->destination?></td>
            <td><?= $emp->price?></td>
            <td>  <?php if($emp->action==1){ ?>
            <div class="label label-success">
              <strong>Accepted</strong>
            </div>
            <?php }elseif($emp->action==2){ ?>
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

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">  
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due <?php date_default_timezone_set('Asia/Manila'); echo date('m/d/y'); ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>₱</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>₱ <?php echo $totalprice;?></td>
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