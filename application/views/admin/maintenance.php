<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Maintenance Details</a></li>
      </ol>
    </section>
   
    <!-- <select value="<?//=$books->helper_name?>" name="helper_name" class="form-control">
            <?php 
              // foreach($trucks as $truck) { 
              //   echo '<option value="'.$truck->fname.' '.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              // }
            ?>

            
            </select> -->
      
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header"> 
              <h3 class="box-title">Maintenance Information</h3>

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
                    <th>Supplier</th>
                    <th>Description</th>
                    <th>Purchase</th>
                    <th>Price</th>
                    <th>Cost</th>
                    <th>Quantity</th>
                    <th></th>
                    <th>Action</th>
                   
                </tr>
                </thead>
                <tbody>
                <?php foreach($mains as $main): ?>
                    <tr>
                        <td><?= $main->id?></td>
                        <td><img src="<?=base_url().'images/'.$emp->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        <td><?= $main->supplier?></td>                            
                        <td><?= $main->birthday?></td>
                        <td><?= $main->gender?></td>
                        <td><?= $main->contact?></td>
                        <td><?= $main->quantity?></td>
                        <td><?//= $main->?></td>
                        <td>
                        <a href="<?//= base_url().'staff/edit/'.$emp->id?>" class="btn btn-default btn.lg" role="button">
                        <span class="fa fa-edit" aria-hidden="true">
                        </span></a>
                        
                        <!-- <a href="<?//=base_url('staff/del/'.$emp->id)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" role="button">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                        </span></a> -->
                        </td>
                    </tr>        
                <?php endforeach; ?> 
                <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Amount</th>
                    <th></th>
                   
                </tr>
        
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>staff/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Details</a>
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