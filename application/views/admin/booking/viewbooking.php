<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'admin/booking'?>">Booking Information</a></li>
      <li class="active">View</a></li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">View Details</h3>
        </div>

    <form  class="form"  action ="<?=base_url()?>bookingadmin/update/<?=$books->id?>"  method='post'>
      <fieldset>
        <div class="form-group">
          <div class="col-md-12">
            <input name="id" type="hidden" type="text" placeholder="ID" class="form-control input-md" value="<?=$books ->id?>" required="" >
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Waybill</label>
            <input readonly value="<?=$books->waybill?>" name="waybill" type="text" placeholder="Waybill" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Customer/Importer</label>  
            <input readonly value="<?=$books->custname?>" name="custname" type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
          <div class="col-md-4">
            <label>Customer Type</label>
            <input readonly value="<?=$books->cust_type?>" name="cust_type" type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>
        
        <div class="form-group">
          <div class="col-md-4">
            <label>Date Schdeuled</label>
            <input readonly value="<?=$books->date?>" name="date" type="date" class="form-control input-md">  
          </div>
          <div class="col-md-4">
            <label>Product Type</label>  
            <input readonly value="<?=$books->product?>" name="product" type="text" placeholder="Product" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Description</label>  
            <input readonly value="<?=$books->description?>" name="description" type="text" placeholder="Decription" class="form-control input-md">
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Pieces</label>  
            <input readonly value="<?=$books->pieces?>" name="pieces" type="text" placeholder="Pieces" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Cargo Size</label>
            <input readonly value="<?=$books->cargo?>" name="cargo" type="text" placeholder="Cargo Size" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Truck Plate No.</label>  
            <input readonly value="<?=$books->plate_no?>" name="plate_no" type="text" placeholder="Truck Plate No." class="form-control input-md">
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Driver ID</label>  
            <input readonly value="<?=$books->driverid?>" name="driverid" type="text" placeholder="Driver" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Helper ID</label>  
            <input readonly value="<?=$books->helperid?>" name="helperid" type="text" placeholder="Helper" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Price</label>
            <input readonly value="<?=$books->price?>" name="price" type="text" placeholder="Price" class="form-control input-md">
          </div>
        </div>

      <div class="col-md-12">
        <br/>
      </div>

        <div class="form-group">
          <div class="col-md-8">
            <label>Destination</label>  
            <input readonly value="<?=$books->destination?>" name="destination" type="text" placeholder="Destination" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Status</label>
            <input readonly value="Level <?=$books->action?>" type="text" placeholder="Status" class="form-control input-md">
          </div>
        </div>

       <div class="col-md-12">
          <br/>
      </div>

    </fieldset>
 
      <div class="box-footer">
        <label class="col-md-12 control-label" for="button1id"></label>
        <div class="pull-right">
        <a href="<?= base_url().'admin/booking'?>" class="btn btn-default" role="button">Cancel</a>
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
        <div class="col-md-12">
          <br/>
        </div>
        <div class="form-group">
          <center>
            <img src="<?=base_url() . 'uploads/waybill/'.$books->image_path?>" alt="..." class="img-thumbnail" tabindex="0">
          </center>
        </div>
        <?php if($books->action == 4 && $books->image_path != "" && $books->image_path != NULL){ ?>
        <div class="form-group">
        <div class="col-md-4">
      </div>
          <div class="col-md-4">
              <label>Waybill Signed?</label><small> (Change Status)</small>
                <select name="action" value="<?=$books->action?>" class="form-control">
                <option disabled="disabled" value="<?=$books->action?>" selected>Level <?=$books->action?></option>
                <option disabled value="0">(0) Pending</option>
                <option disabled value="1">(1) Accept</option>
                <option value="2">(2) Deny</option>
                <option disabled value="3">(3) In-transit</option>
                <option disabled value="4">(4) Arrived</option>
                <option value="5">(5) Finished</option>
                </select>
          </div>
        </div>
        <div class="col-md-12">
          <br/>
      </div>
        </fieldset>
        <div class="box-footer">
          <div class="pull-right">
            <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
          </div>
      </div>
    </div>
</div>

<?php } ?>
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