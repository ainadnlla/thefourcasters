<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'customer/index'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'customer/booking'?>">Booking Information</a></li>
      <li class="active">Add</a></li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Add Details</h3>
        </div>

    <form class="form-horizontal" action ="<?=base_url()?>booking/insert/" method = "post">
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
            <input type="hidden" name="cust_type" type="text" value="<?=$this->session->cust?>" class="form-control input-md" required="" >  
            <input type="hidden" name="custname" type="text" value="<?=$this->session->name?>" class="form-control input-md" required="" >  
            <input value="<?//=$recomdriver->id?>" type="hidden" name="driverid" type="text" class="form-control input-md" required="" >  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label"  for="product">Product</label>  
            <div class="col-md-4">
              <input id="product" name="product" value = "<?=set_value('product')?>" type="text" placeholder="Product" class="form-control input-md">
              <?= form_error('product', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label"  for="description">Description</label>  
            <div class="col-md-4">
              <input class="form-control input-md" id="description" value = "<?=set_value('description')?>" name="description" type="text" placeholder="Decription"> 
      
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="pieces">No. of Pieces</label>  
            <div class="col-md-4">
              <input id="pieces" name="pieces" value = "<?=set_value('pieces')?>" type="number" min=0 placeholder="Pieces" class="form-control input-md">
              <?= form_error('pieces', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date Scheduled</label>
            <div class="col-md-4">
              <input name="date" type="date" value = "<?=set_value('date')?>" class="form-control input-md">  
              <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
            </div>
        </div>
      
        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination</label>  
            <div class="col-md-4">
              <select id="destinationid" name="destinationid"  type="text" placeholder="Destination" class="form-control">
              <?php 
              foreach($location as $row) { 
                echo '<option value="'.$row->id.'">' .$row->destination.'</option>';
              }
            ?> 
              </select>
              <?= form_error('destinationid', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="box-footer">
          <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-4">
              <a href="<?= base_url().'customer/booking'?>" class="btn btn-default" role="button"> Cancel</a>
              <div class="pull-right">
              <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button></a>
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
