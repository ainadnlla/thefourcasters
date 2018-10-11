<script type="text/javascript">
        function Copy() 
        {
            var Url = document.getElementById("paste-box");
            Url.value = window.location.href;
            Url.focus();
            Url.select();  
            document.execCommand("Copy");
        }
</script>
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
  <div class="box-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-hover table-striped">
      <thead>
      <center><form  class="form-horizontal"  action ="<?=base_url()?>admin/sample/"  method='get'>
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
<input type="submit" name="submit" value="submit" onclick="Copy();" > </input>
 <!-- /.content -->
</div>
</form></center>
        <tr>
          <th>Waybill</th>
          <th>Customer</th>
          <th>Date</th>
          <th>Destination</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($reps as $rep): ?>
        <tr>
          <td><?= $rep->waybill?></td>
          <td><?= $rep->custname?></td>
          <td><?= $rep->date?></td>
          <td><?= $rep->destination?></td>
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
      <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint/"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="<?=base_url()."admin/pdf"?>" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.box-body -->
 
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