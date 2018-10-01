<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Driver Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Truck Driver Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Truck Driver Information</h3>
            </div>

            <div class="box-body">  
              <table id="driver" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>License No.</th>
                    <th>Expiry Date</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Contact No.</th>
                    <th>Years of Experience</th>
                    <th>Employed Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($drivs as $driv): ?>
                    <tr>
                        <td><?= $driv->id?></td>
                        <td><img src="<?=base_url().'images/'.$driv->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        <td><?= $driv->driver_no?></td>
                        <td><?= $driv->expire?></td>
                        <td><?= $driv->fname?> <?= $driv->mname?> <?= $driv->lname?></td>
                        <td><?= $driv->email?></td>                            
                        <td><?= $driv->birthday?></td>
                        <td><?= $driv->gender?></td>
                        <td><?= $driv->contact?></td>
                        <td><?= $driv->experience?></td>
                        <td><?= $driv->date?></td>
                        <td><p>
                        <?php if($driv->status==1){ ?>
                          <div class="label label-success">
                            <strong>Available</strong>
                          </div>
                        <?php }elseif($driv->status==0){ ?>
                          <div class="label label-danger">
                            <strong>Unavailable</strong>
                          </div></p>
                        <?php }?>
                        </td>

                        <td>
                        <a href="<?= base_url().'driver/edit/'.$driv->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a>

                        <!-- <a href="<?=base_url('driver/del/'.$driv->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a> -->
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>driver/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Truck Driver</a>
                </div>
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
                <h4 class="modal-title">Confirm Delete</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete this user?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Cancel</button>
                <a href="<?=base_url('driver/del/'.$driv->id)?>"  role="button" class="btn btn-outline" >Delete</a>
              </div>
            </div>
          </div>
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
    $('#driver').DataTable()
    $('#example3').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
