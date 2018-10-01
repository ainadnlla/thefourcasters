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
      <div class="box box-success">
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
          <label class="col-md-4 control-label">Waybill</label>
            <div class="col-md-4">
            <input value="<?=$books->waybill?>" id="waybill" name="waybill" type="text" placeholder="Waybill" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Customer/Importer</label>  
            <div class="col-md-4">
              <input value="<?=$books->custname?>" disabled type="text" placeholder="Customer/Importer" class="form-control input-md"> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Customer Type</label>
            <div class="col-md-4">
            <input value="<?=$books->cust_type?>" disabled type="text" placeholder="Customer/Importer" class="form-control input-md"> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Date Schdeuled</label>
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
          <label class="col-md-4 control-label">Pieces</label>  
            <div class="col-md-4">
              <input value="<?=$books->pieces?>" name="pieces" type="text" placeholder="Destination" class="form-control input-md">
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
          <label class="col-md-4 control-label">Truck Plate No.</label>  
            <div class="col-md-4">
          <select value="<?=$books->plate_no?>" name="plate_no" class="form-control">
          <option Selected disabled="disabled" value="<?=$books->plate_no?>" selected><?=$books->plate_no?></option>
            <?php 
              foreach($plate_nos as $row) { 
                echo '<option value="'.$row->plate_no.'">'.$row->plate_no.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Driver</label>  
            <div class="col-md-4">
            <select value="<?=$books->driver_name?>" name="driver_name" class="form-control">
            <option Selected disabled="disabled" value="<?=$books->driver_name?>" selected><?=$books->driver_name?></option>
            <?php 
              foreach($drivernames as $row) { 
                echo '<option value="'.$row->fname.' '.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Helper</label>  
            <div class="col-md-4">
            <select value="<?=$books->helper_name?>" name="helper_name" class="form-control">
            <option Selected disabled="disabled" value="<?=$books->helper_name?>" selected><?=$books->helper_name?></option>
            <?php 
              foreach($helpernames as $row) { 
                echo '<option value="'.$row->fname.' '.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Destination</label>  
            <div class="col-md-4">
            <select value="<?=$books->destination?>" name="destination" class="form-control">
            <option Selected disabled="disabled" value="<?=$books->destination?>" selected><?=$books->destination?></option>
            <?php 
              foreach($location as $row) { 
                echo '<option value="'.$row->destination.'">' .$row->destination.'</option>';
              }
            ?>
            </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Price</label>
            <div class="col-md-4">
            <input value="<?=$books->price?>" id="price" name="price" type="text" placeholder="Price" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
        <label class="col-md-4 control-label" >Status</label>
          <div class="col-md-4">
            <select name="action" value="<?=$books->action?>" class="form-control">
            <option Selected disabled="disabled" value="<?=$books->action?>" selected>(<?=$books->action?>)</option>
            <option value="0">(0) Pending</option>
            <option value="1">(1) Accept</option>
            <option value="2">(2) Deny</option>
            </select>
          </div>
      </div>


        <div class="form-group">
        <label class="col-md-4 control-label"></label>
            <div class="col-md-8">
                <button id="button1id" name="submit" value="submit" class="btn btn-success">Update</button>
                <a href="<?= base_url().'admin/booking'?>" class="btn btn-danger" role="button"> Cancel</a>
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