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
<form  class="form-horizontal"  action ="<?=base_url()?>admin/sample/"  method='post'>
<select name="month">
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
<select name="year">
<?php
for($x = 1998; $x <= date('Y'); $x++){
  echo "<option value=".$x."> ".$x."</option>";
}
?>
</select>
<input type="submit" name="submit" value="submit"> </input>
 <!-- /.content -->
</div>
</form>
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