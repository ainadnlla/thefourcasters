<?php if($this->session->userdata('status') == '2'){ ?>
<?php error_reporting(0);?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Latest Maintenance Information</h3>
            </div>

            <div class="box-body">  
              <table id="mainte" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>Maintenance Description</th>
                    <th>Supplier</th>
                    <th>Item Description</th>
                    <th>Purchase</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($mains as $main): ?>
                    <tr>
                        <td><?= $main->warning?></td>
                        <td><?= $main->supplier?></td>                            
                        <td><?= $main->description?></td>
                        <td><?= $main->purchased?></td>
                        <td><?= $main->price?></td>
                        <td><?= $main->unit?></td>
                        <td><?= $main->quantity?></td>
                        <td><?= $main->amount?></td>
                        <td>
                        <a href="<?= base_url().'maintenance/edit/'.$main->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a>
                        </td>
                    </tr>
                </tfoot>
                <?php endforeach; ?> 
                </form>
              </table>
              <div class="box-footer">
                <a href="<?=base_url()?>maintenance/add/<?=$main->id?>" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Maintenance Description</a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <?php }else{}?>
        
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Record of Past Maintenance Information</h3>
            </div>

            <div class="box-body">  
              <table id="history" class="table table-bordered table-hover table-striped">
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
                <?php foreach($hists as $hist): ?>
                    <tr>
                        <td><?= date('M d, Y - g:i A', strtotime($hist->date))?></td>
                        <td><?= $hist->warning?></td>
                        <td><?= $hist->supplier?></td>                            
                        <td><?= $hist->description?></td>
                        <td><?= $hist->purchased?></td>
                        <td><?= $hist->price?></td>
                        <td><?= $hist->unit?></td>
                        <td><?= $hist->quantity?></td>
                        <td><?= $hist->amount?></td>
                    </tr>
                </tfoot>
                <?php endforeach; ?> 
                </form>
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
    $('#history').DataTable()
    $('#mainte').DataTable()
    $('#example6').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>