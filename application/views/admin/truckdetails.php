<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Truck Details</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Truck Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="truck" class="table table-bordered table-hover table-striped dataTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Make</th>
                    <th>Plate No.</th>
                    <th>Series</th>
                    <th>MV File No</th>
                    <!-- <th>Engine No.</th>
                    <th>Chassis No.</th>
                    <th>Gross Wt.</th>
                    <th>Net Wt.</th>
                    <th>Net Capacity</th> -->
                    <th>Year Model</th>
                    <th>Year Old</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($trucks as $truck): ?>
                        <tr>
                            <td><?= $truck->id?></td>
                            <td><img src="<?=base_url().'images/'.$truck->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                            <td><?= $truck->brand?></td>
                            <td><?= $truck->plate_no?></td>
                            <td><?= $truck->series?></td>
                            <td><?= $truck->mvfile_no?></td>
                            <!-- <td><?= $truck->engine_no?></td>
                            <td><?= $truck->chassis_no?></td>
                            <td><?= $truck->grosswt?></td>
                            <td><?= $truck->netwt?></td>
                            <td><?= $truck->netcap?></td> -->
                            <td><?= $truck->year?></td>
                            <td><?= $DATE =date('Y') - $truck->year ?></td>
                            <td>

                            <a href="<?= base_url().'truck/edit/'.$truck->id?>" class="btn btn-default btn.lg" role="button">
                            <span class="fa fa-edit" aria-hidden="true">
                            </span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tfoot>
              </table>
              <div class="box-footer">
                <a href="<?=base_url()?>truck/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Truck</a>
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