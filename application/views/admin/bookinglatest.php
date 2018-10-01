<div class="row">
 <div class="col-md-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Latest Orders</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
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
          <th>Destination</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($emps as $emp): ?>
        <tr>
          <td><?= $emp->waybill?></td>
          <td><?= $emp->custname?></td>
          <td><?= $emp->date?></td>
          <td><?= $emp->destination?></td>
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
   <a href="<?=base_url().'admin/booking'?>" class="btn btn-sm btn-info btn-flat pull-left">View All Orders</a>
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