
<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'admin/truckdetails'?>">Trucks Details</a></li>
        <li class="active">Maintenance Details</a></li>
      </ol>
    </section>

  <?php if($this->session->userdata('status') == '2'){ ?>
<div class="pad margin no-print">
      <div class="callout callout-danger" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-danger"></i>Truck Under Maintenance:</h4>
        There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
  like these sweet mornings of spring which I enjoy with my whole heart.      </div>
    </div>
<?php }else{}?>
<section class="content"> 
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Image</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url()?>truck/update/<?=$truck->id?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input disabled value="<?=$truck->id?>" type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <?php
      $default_path = base_url() . 'images/truck.jpg';
      $file = $truck->img != "" ? base_url(). 'images/'.$truck->img : $default_path ;
      ?>


      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= $file ?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <br/>

        </div>
      </div>
    </div>
    </fieldset>

      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Truck Information</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

      <div class="form-group">
          <label class="col-md-4 control-label" >Make</label>  
          <label class="col-md-4 control-label" >Plate No.</label> 
          <label class="col-md-4 control-label">Series</label>
      </div>

    <div class="form-group">
        <div class="col-xs-4">
          <input disabled value="<?=$truck->brand?>" name="brand" type="text" placeholder="Make" class="form-control input-md" required="">
        </div>
        <div class="col-xs-4">
          <input disabled value="<?=$truck->plate_no?>" name="plate_no" type="text" placeholder="Plate No." class="form-control input-md" required="">
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->series?>" name="series" type="text" placeholder="Series" class="form-control input-md" required="">  
        </div>

    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Engine No.</label>
        <label class="col-md-4 control-label">Chassis No.</label>  
        <label class="col-md-4 control-label">MV File No.</label>  
      </div>

    <div class="form-group">
        <div class="col-md-4">
          <input disabled value="<?=$truck->engine_no?>" name="engine_no" type="text" placeholder="Engine No." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->chassis_no?>" name="chassis_no" type="text" placeholder="Chassis No." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->mvfile_no?>" name="mvfile_no" type="text" placeholder="MV File No." class="form-control input-md" required="">  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Gross Wt.</label>  
        <label class="col-md-4 control-label" >Net Wt.</label>
        <label class="col-md-4 control-label" >Net Capacity</label>  
      </div>

      <div class="form-group">
        <div class="col-md-4">
          <input disabled value="<?=$truck->grosswt?>" name="grosswt" type="number" min="0" placeholder="Gross Wt." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->netwt?>" name="netwt" type="number" min="0" placeholder="Net Wt." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->netcap?>" name="netcap" type="number" min="0" placeholder="Net Capacity" class="form-control input-md" required="">  
        </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Net Capacity</label>  
        <label class="col-md-4 control-label" >Year Model</label>
        <label class="col-md-4 control-label" >Status</label>  
      </div>

      <div class="form-group">
        <div class="col-md-4">
            <input disabled value="<?=$truck->netcap?>" name="netcap" type="number" min="0" placeholder="Net Capacity" class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
            <input disabled value="<?=$truck->year?>" name="year" type="number" min="0" placeholder="Year" class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
            <select disabled value="<?=$truck->status?>" name="status" class="form-control">
            <option disabled="disabled" value="<?=$truck->status?>" selected>(<?=$truck->status?>)</option>
            </select>
        </div>
      </div>

      <div class="col-md-12">
          <br/>
      </div>

      </div>
      </div>
    </div>
    </div>
</div>
</form>


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
                <?php foreach($mains as $main): ?>
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
                <?php endforeach; ?> 
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