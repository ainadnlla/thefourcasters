<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Information</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'admin/truckdetails'?>">Truck Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

  <section class="content"> 
    <div class="row">
    
    <form  class="form-horizontal" action="<?=base_url()?>maintenance/insert/<?=$truck->id?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>
    </fieldset>

      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Maintenance Information</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

    <div class="form-group">
        <div class="col-xs-4">
        <label>Supplier</label>  
          <input value="<?=set_value('supplier')?>" name="supplier" type="text" placeholder="Supplier" class="form-control input-md" required="">
          <?= form_error('supplier', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-8">
            <label>Item Description</label>  
            <input value="<?=set_value('description')?>" name="description" type="text" placeholder="Item Description" class="form-control input-md" required="">
          <?= form_error('description', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-6">
        <label>Date of Purchased</label>
          <input value="<?=set_value('purchased')?>" name="purchased" type="date" placeholder="dd/mm/yyyy" class="form-control input-md" required="">  
          <?= form_error('purchased', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Unit Price</label>  
          <input value="<?=set_value('price')?>" name="price" type="number" min=0 placeholder="Unit Price" class="form-control input-md" required="">  
          <?= form_error('price', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Unit</label>
            <select value="<?=set_value('unit')?>" name="unit" class="form-control">
            <option selected disabled>Unit</option>
            <option value="PCS">PIECES</option>
            <option value="LTR">LITERS</option>
            <option value="KGS">KILOGRAMS</option>
            </select>
          <?= form_error('unit', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Quantity</label>
          <input value="<?=set_value('quantity')?>" name="quantity" type="number" min=0 placeholder="Quantity" class="form-control input-md" required="">  
          <?= form_error('quantity', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="box-footer">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="pull-right">
            <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button>
            <a href="<?=base_url().'admin/truckdetails/'?>" class="btn btn-danger" role="button">Back</a>
        </div>
      </div>

      </div>
      </div>
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
