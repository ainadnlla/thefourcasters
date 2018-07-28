<div class="content-wrapper">
    <section class="content-header">
      <h1>Driver Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'user/index'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'user/userdetails'?>">User Management</a></li>
        <li class="active">Driver Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Driver Information</h3>
            </div>

            <div class="box-body">  
              <table id="staff" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($drivs as $driv): ?>
                    <tr>
                        <td><?= $driv->id?></td>
                        <td><?= $driv->fname?></td>
                        <td><?= $driv->mname?></td>
                        <td><?= $driv->lname?></td>
                        <td><?= $driv->email?></td>                            
                        <td><?= $driv->contact?></td>
                        <td><?= $driv->gender?></td>

                        <td>
                        <a href="<?= base_url().'driver/view/'.$driv->id?>" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span></a>
                        <a href="<?= base_url().'driver/edit/'.$driv->id?>" class="btn btn-warning" role="button">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                        </span></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span>
              </button>
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>driver/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Driver</a>
                </div>

                <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
        </div>
        </section>
</div>
<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="<?=base_url('driver/del/'.$driv->id)?>"  role="button" class="btn btn-outline" >Yes</a>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>

