<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Information</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'staff/truckdetails'?>">Truck Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

  <section class="content"> 
    <div class="row">
    
    <form  class="form-horizontal" action="<?=base_url()?>staff_maintenance/update/<?=$main->id?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" type="text" placeholder="ID" class="form-control input-md" required="" >
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
          <input value="<?=$main->supplier?>" name="supplier" type="text" placeholder="Supplier" class="form-control input-md" required="">
          <?= form_error('supplier', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-8">
            <label>Item Description</label>  
            <input value="<?=$main->description?>" name="description" type="text" placeholder="Item Description" class="form-control input-md" required="">
          <?= form_error('description', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-6">
        <label>Date of Purchased</label>
          <input value="<?=$main->purchased?>" name="purchased" type="date" placeholder="dd/mm/yyyy" class="form-control input-md" required="">  
          <?= form_error('purchased', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Unit Price</label>  
          <input value="<?=$main->price?>" name="price" type="number" min=0 placeholder="Unit Price" class="form-control input-md" required="">  
          <?= form_error('price', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Unit</label>
            <select value="<?=$main->unit?>" name="unit" class="form-control">
            <option hidden value='<?=$main->unit?>' selected><?=$main->unit?></option>
            <option disabled><?=$main->unit?></option>
            <option value="PCS">PIECES</option>
            <option value="LTR">LITERS</option>
            <option value="KGS">KILOGRAMS</option>
            </select>
          <?= form_error('unit', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Quantity</label>
          <input value="<?=$main->quantity?>" name="quantity" type="number" min=0 placeholder="Quantity" class="form-control input-md" required="">  
          <?= form_error('quantity', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
        <label>Maintenance Description</label>  
          <textarea value="<?=set_value('warning')?>" rows="3" name="warning" type="text" placeholder="Description Here..." class="form-control" required=""><?=$main->warning?></textarea>
      </div>
    </div>

    <div class="col-md-12">
        <input value="<?=$amount->amount?>" type="hidden" name="amount" type="number" class="form-control input-md" required="" >
    </div>

    <div class="box-footer">
        <label class="col-md-12 control-label" for="button1id"></label>
        <a href="<?=base_url().'admin/truckdetails/'?>" class="btn btn-danger" role="button">Back</a>
      <div class="pull-right">
        <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Submit</button>
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
