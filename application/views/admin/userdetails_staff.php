<div class="content-wrapper">
    <section class="content-header">
      <h1>Staff Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Staff Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header"> 
              <h3 class="box-title">Staff Information</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" value="Search"></i></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="box-body">  
              <table id="staff" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Birth Date</th>
                    <th>Gender</th>
                    <th>Contact No.</th>
                    <th>Employed Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($emps as $emp): ?>
                    <tr>
                        <td><?= $emp->id?></td>
                        <td><img src="<?=base_url().'images/'.$emp->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        <td><?= $emp->fname?> <?= $emp->mname?> <?= $emp->lname?></td>
                        <td><?= $emp->email?></td>                            
                        <td><?= $emp->birthday?></td>
                        <td><?= $emp->gender?></td>
                        <td><?= $emp->contact?></td>
                        <td><?= $emp->date?></td>
                        <td><p>
                        <?php if($emp->status==1){ ?>
                          <div class="label label-success">
                            <strong>Active</strong>
                          </div>
                        <?php }elseif($emp->status==0){ ?>
                          <div class="label label-danger">
                            <strong>Inactive</strong>
                          </div></p>
                        <?php }?>
                        </td>
                        <td>
                        <a href="<?= base_url().'staff/edit/'.$emp->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a>
                        
                        <!-- <a href="<?//=base_url('staff/del/'.$emp->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
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
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Staff</a>
                </div>
                <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
        </div>        
    </section>
</div>

<!-- <div class="modal modal-danger fade" id="modal-danger">
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
                <a href="<?//=base_url('admin/del/'.$emp->id)?>"  role="button" class="btn btn-outline" >Delete</a>
              </div>
            </div>
          </div>
        </div> -->


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>
  <script>
   $(function () {
    $('#example1').DataTable()
    $('#staff').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
