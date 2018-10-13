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
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Truck Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="truck" class="table table-bordered table-hover table-striped dataTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Make</th>
                    <th>Plate No.</th>
                    <th>Series</th>
                    <th>MV File No</th>
                    <th>Year Model</th>
                    <th>Year Old</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($trucks as $truck): ?>
                        <tr>
                            <td><?= $truck->id?></td>
                            <td>
                            <?php $default_path = base_url() . 'images/truck.jpg';
                            $file = $truck->img != "" ? base_url(). 'images/'. $truck->img : $default_path ;?>
                            <img src="<?=$file?>" width = "50px" alt="Image" class="img-thumbnail"></td>

                            </td>
                            <td><?= $truck->brand?></td>
                            <td class="text-uppercase"><?= $truck->plate_no?></td>
                            <td><?= $truck->series?></td>
                            <td><?= $truck->mvfile_no?></td>
                            <td><?= $truck->year?></td>
                            <td><?= $DATE =date('Y') - $truck->year ?></td>
                            <td>
                            <?php if($truck->status==1){ ?>
                            <div class="label label-success">
                              <strong>Available</strong>
                            </div>
                            <?php }elseif($truck->status==2){ ?>
                              <div class="label label-danger">
                                <strong>Under Maintainance</strong>
                              </div></p>
                            <?php }else {?>
                              <div class="label label-warning">
                                <strong>Inactive</strong>
                              </div></p>
                          <?php  }?>
                                </td>
                            <td>

                            <a href="<?= base_url().'truck/edit/'.$truck->id?>" class="btn btn-default btn.lg" role="button">
                            <span class="fa fa-edit" aria-hidden="true">
                            </span></a>
                            <a href="<?= base_url().'admin/maintenance/'.$truck->id?>" class="btn btn-default btn.lg" role="button">
                            <span class="fa fa-wrench" aria-hidden="true">
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
    $('#truck').DataTable()
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
