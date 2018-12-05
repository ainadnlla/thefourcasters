<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'admin/booking'?>">Booking Information</a></li>
      <li class="active">Edit</a></li>
      <?= error_reporting(0);?> 
    </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Update Details</h3>
        </div>

    <form  class="form"  action ="<?=base_url()?>bookingadmin/update/<?=$books->id?>"  method='post'>
      <fieldset>
        <div class="form-group">
          <div class="col-md-4"> 
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$books ->id?>" required="" >
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Waybill</label>
            <input value="<?=$books->waybill?>" id="waybill" name="waybill" type="text" placeholder="Waybill" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Customer/Importer</label>  
            <input value="<?=$books->custname?>" disabled type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
          <div class="col-md-4">
            <label>Customer Type</label>
            <input value="<?=$books->cust_type?>" disabled type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>
        
        <div class="form-group">
          <div class="col-md-4">
            <label>Date Scheduled</label>
            <input value="<?=$books->date?>" name="date" type="date" class="form-control input-md">  
            <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
          </div>
          <div class="col-md-4">
            <label>Product Type</label>  
            <input value="<?=$books->product?>" id="product" name="product" type="text" placeholder="Product" class="form-control input-md">
            <?= form_error('product', '<span class="label label-danger">', '</span>') ?>  
          </div>
          <div class="col-md-4">
            <label>Description</label>  
            <input value="<?=$books->description?>" class="form-control input-md" id="description" name="description" type="text" placeholder="Decription">
            <?= form_error('description', '<span class="label label-danger">', '</span>') ?>
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Pieces</label>  
            <input value="<?=$books->pieces?>" name="pieces" type="text" placeholder="Pieces" class="form-control input-md">
            <?= form_error('pieces', '<span class="label label-danger">', '</span>') ?>  
          </div>
          <div class="col-md-4">
            <label>Cargo Size</label>
              <select value="<?=$books->cargo?>" name="cargo" class="form-control input-md">
                <option hidden selected value='<?=$books->cargo?>'><?=$books->cargo?></option>
                <option disabled><?=$books->cargo?></option>
                <option value="FCL 1x40">FCL 1x40</option>
                <option value="FCL 1x20">FCL 1x20</option>
                <option value="LCL (ELF)">LCL (ELF)</option>
                <option value="LCL 1x40">LCL 1x40 (Guaranteed Load)</option>
                <option value="FCL 2x20">FCL 2x20</option>
                <option value="FCL 1x45">FCL 1x45</option>
              </select>
              <?= form_error('cargo', '<span class="label label-danger">', '</span>') ?>  
          </div>
          <div class="col-md-4">
            <label>Truck Plate No.</label>  
            <select value="<?=$books->plate_no?>" name="plate_no" class="form-control">
            <option hidden selected disabled="disabled" value="<?=$books->plate_no?>" selected><?=$books->plate_no?></option>
            <option disabled><?=$books->plate_no?></option>
            <?php 
              foreach($plate_nos as $row) { 
                echo '<option value="'.$row->plate_no.'">'.$row->plate_no.'</option>';
              }
            ?>
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

              
        <div class="form-group">
          <div class="col-md-4">
            <label>Driver</label>  
            <select value="<?=$books->driverid?>" name="driverid" class="form-control">
            <option hidden selected value="<?=$recomdriver->id?>">Recommended: (<?=$recomdriver->id?>) <?=$recomdriver->drivername?></option>
            <option disabled>Choosen Driver: <?php echo $drivername->drivername?></option>
            <?php 
              foreach($drivernames as $row) { 
                echo '<option value="'.$row->id.'">' .'('.$row->id.') '.$row->drivername.'</option>';
              }
            ?>
            </select>
            <?= form_error('driverid', '<span class="label label-danger">', '</span>') ?>  
          </div>
      
          <div class="col-md-4">
            <label>Helper</label>  
            <select value="<?=$books->helperid?>" name="helperid" class="form-control">
            <option hidden selected value="<?=$recomhelper->id?>">Recommended: (<?=$recomhelper->id?>) <?=$recomhelper->helpername?></option>
            <option disabled>Choosen Driver: <?php echo $helpername->helpername?></option>
            <?php 
              foreach($helpernames as $row) { 
                echo '<option value="'.$row->id.'">' .'('.$row->id.') '.$row->helpername.'</option>';
              }
            ?>
            ?>
            </select>
            <?= form_error('helperid', '<span class="label label-danger">', '</span>') ?>  
          </div>
          <div class="col-md-4">
            <label>Price</label>
            <input hidden value="<?=$books->price?>" id="price" name="price" type="text" placeholder="Price" class="form-control input-md">
          </div>
        </div>

      <div class="col-md-12">
        <br/>
      </div>

        <div class="form-group">
          <div class="col-md-8">
            <label>Destination</label>  
            <select value="<?=$books->destinationid?>" name="destinationid" class="form-control">
            <option hidden Selected value="<?=$books->destinationid?>">Destination ID: <?=$books->destinationid?></option>
            <option disabled>Destination ID: <?=$books->destinationid?></option>
            <?php 
              foreach($destination as $row) { 
                echo '<option value="'.$row->id.'">' .'('.$row->id.') '.$row->destination.'</option>';
              }
            ?>
            </select>
            <input hidden value="<?=$destinationname->destination?>" name="destination" type="text">
            <?= form_error('destinationid', '<span class="label label-danger">', '</span>') ?>  
          </div>
          <div class="col-md-4">
            <label>Status</label>
              <select name="action" value="<?=$books->action?>" class="form-control">
              <option Selected disabled="disabled" value="<?=$books->action?>" selected>Level <?=$books->action?></option>
              <option value="0">(0) Pending</option>
              <option value="1">(1) Accept</option>
              <option value="2">(2) Deny</option>
              <?php if($this->session->userdata('action') == '3' || $this->session->userdata('action') == '4' || $this->session->userdata('action') == '5'){ ?>
              <option disabled value="3">(3) In-transit</option>
              <option disabled value="4">(4) Arrived</option>
              <option value="5">(5) Finished</option>
              <?php }else{}?>
              </select>
          </div>
        </div>

        <div class="col-md-12">
          </p>
        </div>

    </fieldset>
 
      <div class="box-footer">
        <label class="col-md-12 control-label" for="button1id"></label>
        <a href="<?= base_url().'admin/booking'?>" class="btn btn-default" role="button">Cancel</a>
        <div class="pull-right">
          <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </div>
</div>

<?php if($books->action >= 3 && $books->image_path != "" && $books->image_path != NULL){ ?>
<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Waybill Photo</h3>
        </div>
        <fieldset>
        <div class="form-group">
          <div class="col-md-12">
            <p></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>  
            <div class="col-md-9">
              <img src="<?=base_url() . 'uploads/waybill/'.$books->image_path?>" alt="..." class="img-thumbnail" tabindex="0">
            </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <p></p>
          </div>
        </div>
    </div>
</div>
</fieldset>
<?php } ?>
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