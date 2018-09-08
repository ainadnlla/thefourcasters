<div class="content-wrapper">
    <section class="content-header">
      <h1>Customer Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Customer Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Customer Information</h3>
            </div>

            <div class="box-body">
              <table id=staff_customer class="table table-bordered table-hover">
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
                        <td><img src="<?=base_url().'images/'.$cust->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        <td><?= $cust->name?></td>
                        <td><?= $cust->cust_type?></td>
                        <td><?= $cust->email?></td>                            
                        <td><?= $cust->contact?></td>
                        <td><?= $cust->date?></td>
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
                        <a href="<?= base_url().'staff/edit/'.$cust->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a>

                        <!-- <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                        <a href="<?=base_url('staff/del/'.$cust->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a> -->
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>staff/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Customer</a>
                </div>
                 <center><?php echo $this->pagination->create_links();?></center>
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

