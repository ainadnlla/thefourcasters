<div class="content-wrapper">
    <section class="content-header">
      <h1>User Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'user/index'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'user/userdetails'?>">User Management</a></li>
        <li class="active">Staff Details</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Staff Information</h3>
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
                <?php foreach($items as $item): ?>
                    <tr>
                        <td><?= $item->id?></td>
                        <td><?= $item->fname?></td>
                        <td><?= $item->mname?></td>
                        <td><?= $item->lname?></td>
                        <td><?= $item->email?></td>                            
                        <td><?= $item->contact?></td>
                        <td><?= $item->gender?></td>

                        <td>
                        <a href="<?= base_url().'user/view/'.$item->id?>" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span></a>
                        <a href="<?= base_url().'user/edit/'.$item->id?>" class="btn btn-warning" role="button">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                        </span></a>
                        <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                        <a href="<?=base_url('user/delete/'.$item->id)?>" class="btn btn-danger" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a>
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>user/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Staff</a>
                </div>
                <center><?php echo $this->pagination->create_links();?></center>
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

