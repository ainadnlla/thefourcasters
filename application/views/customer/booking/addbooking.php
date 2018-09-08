<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'customer/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'customer/booking'?>">Booking Information</a></li>
      <li class="active">Add</a></li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Add Details</h3>
        </div>

        <form class="form-horizontal" action ="<?=base_url().'booking/insert'?>" method = "post">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="id" type="text" placeholder="ID" class="form-control input-md" required="" >  
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="cust_type" type="text" value="<?=$this->session->cust?>" class="form-control input-md" required="" >  
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="custname" type="text" value="<?=$this->session->name?>" class="form-control input-md" required="" >  
            </div>
          </div>
   
        <div class="form-group">
          <label class="col-md-4 control-label" for="product">Product Type</label>  
            <div class="col-md-4">
              <input id="product" name="product" type="text" placeholder="Product" class="form-control input-md">
              <?= form_error('product', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Description</label>  
            <div class="col-md-4">
              <input class="form-control input-md" id="description" name="description" type="text" placeholder="Decription"> 
              <?= form_error('description', '<span class="label label-danger">', '</span>') ?> 
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="pieces">No. of Pieces</label>  
            <div class="col-md-4">
              <input id="pieces" name="pieces" type="text" placeholder="Pieces" class="form-control input-md">
              <?= form_error('pieces', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="cargo">Cargo Size</label>
            <div class="col-md-4">
              <select id="cargo" name="cargo" class="form-control input-md">
                <option Selected disabled="disabled" >Cargo Type</option>
                <option value="FCL 1x40">FCL 1x40</option>
                <option value="FCL 1x20">FCL 1x20</option>
                <option value="LCL (ELF)">LCL (ELF)</option>
                <option value="LCL 1x40">LCL 1x40 (Guaranteed Load)</option>
                <option value="FCL 2x20">FCL 2x20</option>
                <option value="FCL 1x45">FCL 1x45</option>
              </select>
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date Schdeuled</label>
            <div class="col-md-4">
              <input name="date" type="date" class="form-control input-md">  
              <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination</label>  
            <div class="col-md-4">
              <input id="destination" name="destination" type="text" placeholder="Destination" class="form-control input-md">
              <?= form_error('destination', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <!-- <div class="form-group">
          <label class="col-md-4 control-label" for="price">Price</label>
            <div class="col-md-4">
            <input name="price" type="text" placeholder="Price" class="form-control input-md" disabled>             </div>
        </div> -->

        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-4">
              <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button></a>
              <a href="<?= base_url().'customer/booking'?>" class="btn btn-danger" role="button"> Cancel</a>
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
