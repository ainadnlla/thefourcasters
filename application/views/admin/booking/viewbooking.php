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

    <form  class="form">
      <fieldset>
        <div class="form-group">
          <div class="col-md-12">
            <input type="hidden" type="text" placeholder="ID" class="form-control input-md"value="<?=$books ->id?>" required="" >
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Waybill</label>
            <input disabled value="<?=$books->waybill?>"type="text" placeholder="Waybill" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Customer/Importer</label>  
            <input disabled value="<?=$books->custname?>" type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
          <div class="col-md-4">
            <label>Customer Type</label>
            <input disabled value="<?=$books->cust_type?>" type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>
        
        <div class="form-group">
          <div class="col-md-4">
            <label>Date Schdeuled</label>
            <input disabled value="<?=$books->date?>" type="date" class="form-control input-md">  
          </div>
          <div class="col-md-4">
            <label>Product Type</label>  
            <input disabled value="<?=$books->product?>" type="text" placeholder="Product" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Description</label>  
            <input disabled value="<?=$books->description?>" type="text" placeholder="Decription" class="form-control input-md">
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Pieces</label>  
            <input disabled value="<?=$books->pieces?>" type="text" placeholder="Pieces" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Cargo Size</label>
            <input disabled value="<?=$books->cargo?>" type="text" placeholder="Cargo Size" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Truck Plate No.</label>  
            <input disabled value="<?=$books->plate_no?>" type="text" placeholder="Truck Plate No." class="form-control input-md">
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Driver</label>  
            <input disabled value="<?=$books->drivername?>" type="text" placeholder="Driver" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Helper</label>  
            <input disabled value="<?=$books->helpername?>" type="text" placeholder="Helper" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Price</label>
            <input disabled value="<?=$books->price?>" type="text" placeholder="Price" class="form-control input-md">
          </div>
        </div>

      <div class="col-md-12">
        <br/>
      </div>

        <div class="form-group">
          <div class="col-md-8">
            <label>Destination</label>  
            <input disabled value="<?=$books->destination?>" type="text" placeholder="Destination" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Status</label>
            <input disabled value="Level <?=$books->action?>" type="text" placeholder="Status" class="form-control input-md">
          </div>
        </div>

       <div class="col-md-12">
          <br/>
      </div>

    <div class="box-footer">
      <label class="col-md-12 control-label" for="button1id"></label>
        <div class="pull-right">
          <a href="<?= base_url().'admin/booking'?>" class="btn btn-default" role="button"> Back</a>
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