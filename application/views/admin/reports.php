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
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div>
    
<section class="content">
<div class="row">
<div class="col-xs-12">
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

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
                  <?php foreach($emps as $emp): ?>
                  <tr>
               
                  <td><?= $emp->waybill?></td>
                  <td><?= $emp->custname?></td>
                  <td><?= $emp->date?></td>
                  <td><?= $emp->cargo?></td>
                  <td><?= $emp->destination?></td>
                  <td>₱<?= $emp->price?></td>
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
              <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
              </button>
            </div>
          </div>
      </div>
      </div>
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->

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