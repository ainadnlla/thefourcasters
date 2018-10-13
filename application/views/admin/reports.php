
<div class="content-wrapper">
<section class="content-header">
  <h1>Reports</h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Reports</a></li>
  </ol>
</section>

<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the table to generate report.
      </div>
    </div>

<form  class="form-horizontal"  action ="<?=base_url()?>admin/reports/"  method='get'>
<section class="content">

  <div class="col-xs-3">
    <div class="form-group">
        <select name="month" class="form-control">
          <option selected disabled>Select Month</option>
          <option value="01">January</option>
          <option value="02">Febuary</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
    </div>
  </div>

  <div class="col-xs-3">
    <div class="form-group">
        <select name="year" class="form-control">
        <option selected disabled>Select Year</option>
        <?php
        for($x = 1998; $x <= date('Y'); $x++){
          echo "<option value=".$x."> ".$x."</option>";
        }
        ?>
        </select>
    </div>
  </div>

  <div class="col-xs-1">
    <div class="form-group">
      <button name="submit" type="submit" value="submit" class="form-control btn btn-default">GO</button>
    </div>
  </div>

<div class="row">
<div class="col-xs-12">
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Reports</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
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
                  <?php foreach($reps as $rep): ?>  
                  <tr>
               
                  <td><?= $rep->waybill?></td>
                  <td><?= $rep->custname?></td>
                  <td><?= $rep->date?></td>
                  <td><?= $rep->cargo?></td>
                  <td><?= $rep->destination?></td>
                  <td>₱<?= $rep->price?></td>
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
                     <?php   }?>
                     </td>
                  </tr>
                  <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="<?=base_url()."admin/pdf"?>" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
      </div>
      </div>
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</form>

<footer class="main-footer">
 <div class="pull-right hidden-xs">
   <b>The Fourcasters</b>
 </div>
 <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation </a>.</strong> All rights
 reserved.
</footer>
<script>
   $(function () {
    $('#example1').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>