
    <!-- <select value="<?//=$books->helper_name?>" name="helper_name" class="form-control">
            <?php 
              // foreach($trucks as $truck) { 
              //   echo '<option value="'.$truck->fname.' '.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              // }
            ?>

            
            </select> -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Maintenance Information</h3>
            </div>

            <div class="box-body">  
              <table id="maintenance" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Supplier</th>
                    <th>Description</th>
                    <th>Purchase</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <form action="<?=base_url()?>maintenance/<?=$main->id?>" method='post'>
                    <tr>
                        <td><?= $main->id?></td>
                        <td><?= $main->supplier?></td>                            
                        <td><?= $main->description?></td>
                        <td><?= $main->purchased?></td>
                        <td><?= $main->price?></td>
                        <td><?= $main->unit?></td>
                        <td><?= $main->quantity?></td>
                        <td><?= $main->amount?></td>
                        <td>
                        <!-- <a href="<?//= base_url().'staff/edit/'.$emp->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a> -->
                        
                        <!-- <a href="<?//=base_url('staff/del/'.$emp->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a> -->
                        </td>
                    </tr>
                </tfoot>
                </form>
              </table>
            </div>
            </div>
          </div>
        </div>

    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">History Information</h3>
            </div>

            <!-- CONTENT HERE -->

            </div>
            </div>
          </div>
        </div>
        
    </section>
</div>

</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>