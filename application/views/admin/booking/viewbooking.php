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
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">View Details</h3>
        </div>

        <form  class="form-horizontal">
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$books ->id?>" required="" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Waybill</label>  
            <div class="col-md-4">
              <input value="<?=$books ->waybill?>" disabled type="text" placeholder="Waybill" class="form-control input-md"> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Customer/Importer</label>  
            <div class="col-md-4">
              <input value="<?=$books ->custname?>" disabled type="text" placeholder="Customer/Importer" class="form-control input-md"> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Customer Type</label>
            <div class="col-md-4">
            <input value="<?=$books ->cust_type?>" disabled  type="text" placeholder="Customer Type" class="form-control input-md"> 
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date Schdeuled</label>
            <div class="col-md-4">
              <input value="<?=$books->date?>" disabled type="date" class="form-control input-md">  
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Product Type</label>  
            <div class="col-md-4">
              <input value="<?=$books->product?>" disabled type="text" placeholder="Product" class="form-control input-md">          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Description</label>  
            <div class="col-md-4">
              <input value="<?=$books->description?>"disabled class="form-control input-md" id="description" name="description" type="text" placeholder="Decription">
          </div>
        </div>  

        <div class="form-group">
          <label class="col-md-4 control-label">Pieces</label>  
            <div class="col-md-4">
              <input value="<?=$books->pieces?>" disabled type="text" placeholder="Destination" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Cargo Size</label>
            <div class="col-md-4">
            <input value="<?=$books->cargo?>" disabled type="text" placeholder="Destination" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Truck Plate No.</label>  
            <div class="col-md-4">
            <input value="<?=$books->plate_no?>" disabled type="text" placeholder="Truck Plate No." class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="drivername">Driver</label>  
            <div class="col-md-4">
            <input value="<?=$books->driver_name?>" disabled type="text" placeholder="Driver" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="helpername">Helper</label>  
            <div class="col-md-4">
              <input value="<?=$books->helper_name?>" disabled type="text" placeholder="Helper" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination</label>  
            <div class="col-md-4">
            <input value="<?=$books->destination?>" disabled type="text" placeholder="Destination" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="price">Price</label>
            <div class="col-md-4">
            <input value="<?=$books->price?>" disabled type="text" placeholder="Price" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="status">Status</label>
            <div class="col-md-4">
            <input name="status" type="text" placeholder="Status" class="form-control input-md" disabled>
            </div>
        </div>

        <div class="form-group">
        <label class="col-md-4 control-label"></label>
            <div class="col-md-8">
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