<div class="content-wrapper">
    <section class="content-header">
      <h1>Truck Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'staff/truckdetails'?>">Truck Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

  <section class="content"> 
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Image</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url().'staff_truck/insert'?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= base_url().'images/truck.jpg'?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <hr/>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
          <div class="col-md-9">
            <?php echo form_open_multipart('admin/do_upload');?>
            <input value="<?=set_value('img')?>" class="form-control" type="file" name="img" size="20" >
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
          <label class="col-md-6 control-label" >Make</label>  
          <label class="col-md-6 control-label" >Plate No.</label> 
      </div>

    <div class="form-group">
        <div class="col-xs-6">
          <input value="<?=set_value('brand')?>" name="brand" type="text" placeholder="Make" class="form-control input-md" required="">
          <?= form_error('brand', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-6">
          <input value="<?=set_value('plate_no')?>" name="plate_no" type="text" placeholder="Plate No." class="form-control input-md" required="">
          <?= form_error('plate_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    
    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label">Series</label>
        <label class="col-md-6 control-label">MV File No.</label>  
      </div>

    <div class="form-group">
        <div class="col-md-6">
          <input value="<?=set_value('series')?>" name="series" type="text" placeholder="Series" class="form-control input-md" required="">  
          <?= form_error('series', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
          <input value="<?=set_value('mvfile_no')?>" name="mvfile_no" type="text" placeholder="MV File No." class="form-control input-md" required="">  
          <?= form_error('mvfile_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label">Engine No.</label>
        <label class="col-md-6 control-label">Chassis No.</label>  
      </div>

    <div class="form-group">
        <div class="col-md-6">
          <input value="<?=set_value('engine_no')?>" name="engine_no" type="text" placeholder="Engine No." class="form-control input-md" required="">  
          <?= form_error('engine_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
          <input value="<?=set_value('chassis_no')?>" name="chassis_no" type="text" placeholder="Chassis No." class="form-control input-md" required="">  
          <?= form_error('chassis_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label" >Gross Wt.</label>  
        <label class="col-md-6 control-label" >Net Wt.</label>
      </div>

      <div class="form-group">
        <div class="col-md-6">
          <input value="<?=set_value('grosswt')?>" name="grosswt" type="number" min="0" placeholder="Gross Wt." class="form-control input-md" required="">  
          <?= form_error('grosswt', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
          <input value="<?=set_value('netwt')?>" name="netwt" type="number" min="0" placeholder="Net Wt." class="form-control input-md" required="">  
          <?= form_error('netwt', '<span class="label label-danger">', '</span>') ?>  
        </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label" >Net Capacity</label>  
        <label class="col-md-6 control-label" >Year Model</label>
      </div>

      <div class="form-group">
        <div class="col-md-6">
          <input value="<?=set_value('netcap')?>" name="netcap" type="number" min="0" placeholder="Net Capacity" class="form-control input-md" required="">  
          <?= form_error('netcap', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
          <input value="<?=set_value('year')?>" name="year" type="number" min="0" placeholder="Year" class="form-control input-md" required="">  
          <?= form_error('year', '<span class="label label-danger">', '</span>') ?>  
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
            <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button>
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
