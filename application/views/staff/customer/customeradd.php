<div class="content-wrapper">
<section class="content-header">
  <h1>Customer/Importer Details</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'staff/customerdetails'?>">Customer/Importer Details</a></li>
      <li class="active">Add</a></li>
    </ol>
</section>

  <section class="content"> 
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Profile Photo</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url().'staff_customer/insert'?>" enctype="multipart/form-data" method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= base_url().'images/default.jpg'?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <hr/>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
          <div class="col-md-9">
            <?php echo form_open_multipart('admin/do_upload');?>
            <input value="<?=set_value('img')?>" class="form-control" type="file" name="img" size="20" >
            <?= form_error('img', '<span class="label label-danger">', '</span>'); ?>  
            </div>
          </div>
          <br/>
        </div>
      </div>
    </div>
    </fieldset>

      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Customer Information</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

    <div class="form-group">
        <div class="col-xs-6">
        <label>Customer/Importer</label>  
          <input value="<?=set_value('name')?>" name="name" type="text" placeholder="Customer/Importer" class="form-control input-md" required="">
          <?= form_error('name', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-6">
        <label>Customer Type</label> 
          <select value="<?=set_value('cust_type')?>" name="cust_type" class="form-control">
            <option Selected disabled="disabled" >Customer Type</option>
            <option value="In-house Brokerage">In-house Brokerage</option>
            <option value="Broker/Agent">Broker/Agent</option>
            <option value="Freight Forwarder">Freight Forwarder</option>
            <option value="Local/Sub-contractor">Local/Sub-contractor</option>
          </select>
          <?= form_error('cust_type', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    
    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Password</label>
          <input value="<?=set_value('password')?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">  
          <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Confirm Password</label>  
          <input value="<?=set_value('repass')?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">  
          <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Email</label>
          <input value="<?=set_value('email')?>" name="email" type="email" placeholder="example@yahoo.com" class="form-control input-md" required="">  
          <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Contact Number</label>  
          <input value="<?=set_value('contact')?>" name="contact" type="text" placeholder="Contact Number" class="form-control input-md" required="">  
          <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <div class="col-md-6">
        <label>Customer Since</label>  
          <input value="<?=set_value('date')?>" name="date" type="date" class="form-control input-md" required="">  
          <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
        </div>
      </div>

      <div class="col-md-12">
          <br/>
      </div>
    </div>
    
    <div class="box-footer">
      <label class="col-md-12 control-label" for="button1id"></label>
      <a href="<?=base_url().'staff/customerdetails/'?>" class="btn btn-default" role="button">Back</a>
        <div class="pull-right">
          <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button>
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