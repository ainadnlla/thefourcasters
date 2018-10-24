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

    <form class="form-horizontal" action ="<?=base_url()?>booking/update/<?=$books->id?>" method = "post">
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input value="<?=$books->id?>" type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
            <input value="<?=$books->cust_type?>" type="hidden" name="cust_type" type="text" value="<?=$this->session->cust?>" class="form-control input-md" required="" >  
            <input value="<?=$books->custname?>" type="hidden" name="custname" type="text" value="<?=$this->session->name?>" class="form-control input-md" required="" >  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label"  for="product">Product</label>  
            <div class="col-md-4">
              <input value="<?=$books->product?>" id="product" name="product" type="text" placeholder="Product" class="form-control input-md">
              <?= form_error('product', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label"  for="description">Description</label>  
            <div class="col-md-4">
              <input value="<?=$books->description?>" class="form-control input-md" id="description" name="description" type="text" placeholder="Decription"> 
      
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="pieces">No. of Pieces</label>  
            <div class="col-md-4">
              <input value="<?=$books->pieces?>" id="pieces" name="pieces" type="number" min=0 placeholder="Pieces" class="form-control input-md">
              <?= form_error('pieces', '<span class="label label-danger">', '</span>') ?>  
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date Scheduled</label>
            <div class="col-md-4">
              <input value="<?=$books->date?>" name="date" type="date" class="form-control input-md">  
              <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
            </div>
        </div>
      
        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination</label>  
            <div class="col-md-4">
            <select value="<?=$books->destinationid?>" name="destinationid" class="form-control">
            <option hidden selected value="<?=$books->destinationid?>">Destination ID: <?=$books->destinationid?></option>
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
        </div>

      <div class="box-footer">
      <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-4">
        <a href="<?= base_url().'customer/booking'?>" class="btn btn-default" role="button">Cancel</a>
        <div class="pull-right">
          <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
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
