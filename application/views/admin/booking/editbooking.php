<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'admin/booking'?>">Booking Information</a></li>
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

        <form  class="form-horizontal"  action ="<?=base_url()?>bookingadmin/update/<?=$books->id?>"  method='post'>
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$books ->id?>" required="" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Customer/Importer</label>  
            <div class="col-md-4">
              <!-- <input type="text" placeholder="Customer/Importer" class="form-control input-md">  -->
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Customer Type</label>
            <div class="col-md-4">
            <!-- <input type="text" placeholder="Customer Type" class="form-control input-md" disabled>  -->
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date Schdeuled</label>
            <div class="col-md-4">
              <input value="<?=$books->date?>" name="date" type="date" class="form-control input-md">  
              <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Product Type</label>  
            <div class="col-md-4">
              <input value="<?=$books->product?>" id="product" name="product" type="text" placeholder="Product" class="form-control input-md">
              <?= form_error('product', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Description</label>  
            <div class="col-md-4">
              <input value="<?=$books->description?>" class="form-control input-md" id="description" name="description" type="text" placeholder="Decription">
              <?= form_error('description', '<span class="label label-danger">', '</span>') ?>
          </div>
        </div>  

        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Pieces</label>  
            <div class="col-md-4">
              <input value="<?=$books->pieces?>" name="destination" type="text" placeholder="Destination" class="form-control input-md">
              <?= form_error('pieces', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Cargo Size</label>
            <div class="col-md-4">
              <select value="<?=$books->cargo?>" name="cargo" class="form-control input-md">
                <option Selected disabled="disabled" value='<?=$books->cargo?>' selected><?=$books->cargo?></option>                <option value="FCL 1x40">FCL 1x40</option>
                <option value="FCL 1x20">FCL 1x20</option>
                <option value="LCL (ELF)">LCL (ELF)</option>
                <option value="LCL 1x40">LCL 1x40 (Guaranteed Load)</option>
                <option value="FCL 2x20">FCL 2x20</option>
                <option value="FCL 1x45">FCL 1x45</option>
              </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="model">Truck Model</label>  
            <div class="col-md-4">
            <select class="form-control">
            <?php 
              foreach($models as $row) { 
                echo '<option value="'.$row->model.'">'.$row->model.'</option>';
              }
            ?>
            </select>      
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="license_no">Truck Plate No.</label>  
            <div class="col-md-4">
          <select class="form-control">
            <?php 
              foreach($license_nos as $row) { 
                echo '<option value="'.$row->license_no.'">'.$row->license_no.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="drivername">Driver</label>  
            <div class="col-md-4">
            <select class="form-control">
            <?php 
              foreach($drivernames as $row) { 
                echo '<option value="'.$row->fname.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="driver_no">Driver's License No.</label>  
            <div class="col-md-4">
            <select class="form-control">
            <?php 
              foreach($drivernums as $row) { 
                echo '<option value="'.$row->drivernum.'">'.$row->drivernum.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="helpername">Helper</label>  
            <div class="col-md-4">
            <select class="form-control">
            <?php 
              foreach($helpernames as $row) { 
                echo '<option value="'.$row->fname.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="helpernum">Helper's License No.</label>  
            <div class="col-md-4">
            <select class="form-control">
            <?php 
              foreach($helpernums as $row) { 
                echo '<option value="'.$row->drivernum.'">'.$row->drivernum.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination</label>  
            <div class="col-md-4">
              <input value="<?=$books->destination?>" name="destination" type="text" placeholder="Destination" class="form-control input-md">
              <?= form_error('destination', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="price">Price</label>
            <div class="col-md-4">
            <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" disable>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="status">Status</label>
            <div class="col-md-4">
            <input name="price" type="text" placeholder="Price" class="form-control input-md" disabled>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-4">
              <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button></a>
              <a href="<?=base_url().'admin/booking'?>"><button id="" name="" class="btn btn-danger">Cancel</button></a>
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