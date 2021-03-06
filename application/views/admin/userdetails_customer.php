<div class="content-wrapper">
    <section class="content-header">
      <h1>Customer/Importer Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Customer/Importer Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Customer Information</h3>
            </div>

            <div class="box-body table-responsive">
              <table id="customer" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Customer/Importer</th>
                    <th>Customer Type</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Customer Since</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php foreach($custs as $cust): ?>
                    <tr>
                        <td><?= $cust->id?></td>
                        <td>
                        <?php $default_path = base_url() . 'images/default.jpg';
                        $file = $cust->img != "" ? base_url(). 'images/'. $cust->img : $default_path ;?>
                        <img src="<?=$file?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        </td>
                        <td class="text-capitalize"><?= $cust->name?></td>
                        <td><?= $cust->cust_type?></td>
                        <td><?= $cust->email?></td>                            
                        <td><?= $cust->contact?></td>
                        <td><?= date('M d, Y', strtotime($cust->date))?></td>
                        <td><p>
                        <?php if($cust->status==1){ ?>
                          <div class="label label-success">
                            <strong>Active</strong>
                          </div>
                        <?php }elseif($cust->status==0){ ?>
                          <div class="label label-danger">
                            <strong>Inactive</strong>
                          </div></p>
                        <?php }?>
                        </td>

                        <td>
                        <a href="<?= base_url().'customer/edit/'.$cust->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a>

                        <!-- <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                        <a href="<?=base_url('customer/del/'.$cust->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a> -->
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>customer/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Customer</a>
                </div>
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
    $('#customer').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>