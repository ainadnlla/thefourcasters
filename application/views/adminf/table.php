<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'user/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Truck Details</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Truck Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="staff" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>License No.</th>
                    <th>Insurance</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($trucks as $truck): ?>
                        <tr>
                            <td><?= $truck->id?></td>
                            <td><?= $truck->img?></td>
                            <td><?= $truck->license_no?></td>
                            <td><?= $truck->insurance?></td>
                            <td>
                            <a href="<?= base_url().'user/view/'.$truck->id?>" class="btn btn-primary" role="button">
                            <span class="glyphicon glyphicon-search" aria-hidden="true">
                            </span></a>

                            <a href="<?= base_url().'user/edit/'.$truck->id?>"
                         class="btn btn-warning" role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                            </span></a>
                            <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                            <a href="<?=base_url('user/delete/'.$trucks->id)?>" class="btn btn-danger" role="button">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                            </span></a>
                            
                            </td>
                        </tr>
                         
                    <?php endforeach; ?>
                    
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="truck/add" class="btn btn-success" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Truck</a>
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

