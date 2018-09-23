<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Maintenance Details</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Truck Maintenance</h3>
            </div>
           
          &nbsp;&nbsp; &nbsp;&nbsp;  <select type="dropdown" value="<?=$main->Truck_info ?>">
          <?php 
             // foreach($location as $row) { 
              //  echo '<option value="'.$row->destination.'">' .$row->destination.'</option>';
            //  }?>
          </select>
            <div class="box-body">
              <table id="maintenance" class="table table-bordered table-hover table-striped dataTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Supplier's</th>
                    <th>Item Description</th>
                    <th>Date of Purchase</th>
                    <th>Unit Price</th>
                    <th>Unit Cost</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($mains as $main): ?>
                        <tr>
                            <td><?= $main->id?></td>
                            <td><?= $main->supplier?></td>
                            <td><?= $main->description?></td>
                            <td><?= $main->purchased?></td>
                            <td><?= $main->price?></td>   
                            <td><?= $main->cost?></td>
                            <td><?= $main->quantity?></td>
                            <td><?= $main->amount?></td>
                            <td></td>
                            <td>
                            <!-- <a href="<?= base_url().'maintenance/view/'.$main->id?>" class="btn btn-default btn.lg" role="button">
                            <span class="fa fa-eye" aria-hidden="true">
                            </span></a> -->
                            <!-- <a href="<?= base_url().'maintenance/edit/'.$main->id?>" class="btn btn-default btn.lg" role="button">
                            <span class="fa fa-edit" aria-hidden="true">
                            </span></a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tfoot>
              </table>
              <!-- <div class="box-footer">
                <a href="<?=base_url()?>maintenance/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Truck</a>
                </div> -->

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