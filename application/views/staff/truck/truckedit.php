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
        <div class="col-sm-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Details</h3>
            </div>

    <form  class="form-horizontal"  action ="<?=base_url()?>staff_truck/update/<?=$truck->id?>"  method='post'>
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$truck->id?>" required="" >
          </div>
        </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="upload"></label>  
      <div class="col-md-4">
      <img src="<?= base_url() . 'images/' . $truck->img ?>" width = "100" height="100" alt="Image" class="img-thumbnail">
      </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="upload">Image</label>  
            <div class="col-md-4">
            <?php echo form_open_multipart('truck/do_upload');?>
            <input class="form-control" type="file" name="img" size="20" >
            <?= form_error('img', '<span class="label label-danger">', '</span>') ?>  
            </div>
          </div>
      <div>

      <div class="form-group">
      <label class="col-md-4 control-label"for ="brand">Brand</label>  
        <div class="col-md-4">
          <input value="<?=$truck->brand?>" name="brand" type="text" placeholder="Brand/Maker" class="form-control input-md">
          <?= form_error('brand', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="model">Model</label>  
        <div class="col-md-4">
          <input value="<?=$truck->model?>" name="model" type="text" placeholder="Model" class="form-control input-md">
          <?= form_error('model', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="year">Year</label>  
        <div class="col-md-4">
          <input value="<?=$truck->year?>" name="year" type="number" placeholder="Year" class="form-control input-md">
          <?= form_error('year', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="gvm">GVM</label>  
        <div class="col-md-4">
          <input  value="<?=$truck->gvm?>" name="gvm" type="number" placeholder="GVM" class="form-control input-md">
          <?= form_error('gvm', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="gcm">GCM</label>  
        <div class="col-md-4">
          <input value="<?=$truck->gcm?>" name="gcm" type="number" placeholder="GCM" class="form-control input-md">
          <?= form_error('gcm', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="power">Engine Power</label>  
        <div class="col-md-4">
          <input  value="<?=$truck->power?>" name="power" type="text" placeholder="Engine Power" class="form-control input-md">
          <?= form_error('power', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="plate_no">License #</label>  
        <div class="col-md-4">
          <input  value="<?=$truck->plate_no?>" name="plate_no" type="text" placeholder="License #" class="form-control input-md">
          <?= form_error('plate_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="insurance" >Insurance</label>  
        <div class="col-md-4">
          <input value="<?=$truck->insurance?>" name="insurance" type="text" placeholder="Insurance Date" class="form-control input-md">  
          <?= form_error('insurance', '<span class="label label-danger">', '</span>') ?>   
        </div>
    </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-8">
          <button id="button1id" name="submit" value="submit" class="btn btn-success">Update</button>
          <a href="<?= base_url().'staff/truckdetails'?>" class="btn btn-danger" role="button"> Cancel</a>
        </div>
      </div>
</fieldset>
</form>
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


 