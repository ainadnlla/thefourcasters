<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'staff/truckdetails'?>">Truck Details</a></li>
          <li class="active">Edit</a></li>
        </ol>
    </section>

<section class="content"> 
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Image</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url()?>staff_truck/update/<?=$truck->id?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input value="<?=$truck->id?>" type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
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
      <hr/>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
          <div class="col-md-9">
            <?php echo form_open_multipart('admin/do_upload');?>
            <input value="<?=$file?>" class="form-control" type="file" name="img" size="20" >
            <?= form_error('img', '<span class="label label-danger">', '</span>'); ?>  
            </div>
          </div>
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
        <div class="col-xs-6">
        <label>Make</label>  
          <input value="<?=$truck->brand?>" name="brand" type="text" placeholder="Make" class="form-control input-md" required="">
          <?= form_error('brand', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-6">
        <label>Plate No.</label> 
          <input value="<?=$truck->plate_no?>" name="plate_no" type="text" placeholder="Plate No." class="form-control input-md" required="">
          <?= form_error('plate_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    
    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Series</label>
          <input value="<?=$truck->series?>" name="series" type="text" placeholder="Series" class="form-control input-md" required="">  
          <?= form_error('series', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>MV File No.</label>  
          <input value="<?=$truck->mvfile_no?>" name="mvfile_no" type="text" placeholder="MV File No." class="form-control input-md" required="">  
          <?= form_error('mvfile_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Engine No.</label>
          <input value="<?=$truck->engine_no?>" name="engine_no" type="text" placeholder="Engine No." class="form-control input-md" required="">  
          <?= form_error('engine_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Chassis No.</label> 
          <input value="<?=$truck->chassis_no?>" name="chassis_no" type="text" placeholder="Chassis No." class="form-control input-md" required="">  
          <?= form_error('chassis_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
      <div class="col-md-6">
        <label>Gross Wt.</label>
          <input value="<?=$truck->grosswt?>" name="grosswt" type="number" min="0" placeholder="Gross Wt." class="form-control input-md" required="">  
          <?= form_error('grosswt', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Net Wt.</label>
          <input value="<?=$truck->netwt?>" name="netwt" type="number" min="0" placeholder="Net Wt." class="form-control input-md" required="">  
          <?= form_error('netwt', '<span class="label label-danger">', '</span>') ?>  
        </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <div class="col-md-6">
        <label>Net Capacity</label>
          <input value="<?=$truck->netcap?>" name="netcap" type="number" min="0" placeholder="Net Capacity" class="form-control input-md" required="">  
          <?= form_error('netcap', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Year Model</label>
          <input value="<?=$truck->year?>" name="year" type="number" min="0" placeholder="Year" class="form-control input-md" required="">  
          <?= form_error('year', '<span class="label label-danger">', '</span>') ?>  
        </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
          <div class="col-md-6">
          <label>Status</label>
            <select  value="<?=$truck->status?>" name="status" class="form-control">
            <option selected disabled="disabled" value="<?=$truck->status?>" >Level <?=$truck->status?></option>
            <option value="1">(1) Active</option>
            <option value="2">(2) UnderMaintenance</option>
            </select>
          </div>
      </div>

      <div class="col-md-12">
          <br/>
      </div>
    </div>

    <div class="box-footer">
      <label class="col-md-12 control-label" for="button1id"></label>
        <a href="<?= base_url().'staff/truckdetails'?>" class="btn btn-default" role="button"> Cancel</a>
        <div class="pull-right">
          <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
        </div>
    </div>
    
  </div>
  </section>
</div>
</form>

<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>The Fourcasters</b>
</div>
<strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
reserved.
</footer>





 