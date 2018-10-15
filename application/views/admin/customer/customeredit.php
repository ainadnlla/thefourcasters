<div class="content-wrapper">
    <section class="content-header">
      <h1>Customer/Importer Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails_customer'?>">Customer/Importer Details</a></li>
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

    <form  class="form-horizontal" action="<?=base_url()?>customer/update/<?=$cust->id?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input value="<?=$cust->id?>" type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <?php
      $default_path = base_url() . 'images/default.jpg';
      $file = $cust->img != "" ? base_url(). 'images/'.$cust->img : $default_path ;
      ?>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?=$file?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <hr/>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
          <div class="col-md-9">
            <?php echo form_open_multipart('customer/do_upload');?>
            <input value="<?=$file?>" class="form-control" type="file" name="img" size="20" >
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
          <input value="<?=$cust->name?>" name="name" type="text" placeholder="Customer/Importer" class="form-control input-md" required="">
          <?= form_error('name', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-6">
        <label>Customer Type</label> 
        <select value="<?=$cust->cust_type?>" name="cust_type" class="form-control">
            <option Selected disabled="disabled" value="<?=$cust->cust_type?>" selected><?=$cust->cust_type?></option>
            <option disabled>----------------------</option>
            <option value="In-house Brokerage">In-house Brokerage</option>
            <option value="Broker/Agent">Broker/Agent</option>
            <option value="Freight Forwarder">Freight Forwarder</option>
            <option value="Local/Sub-contractor">Local/Sub-contractor</option>
            </select>
          </select>
        </div>
    </div>
    
    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Password</label>
          <input value="<?=$cust->password?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">  
          <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Confirm Password</label>  
          <input value="<?=$cust->repass?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">  
          <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <div class="col-md-6">
        <label>Email</label>
          <input value="<?=$cust->email?>" name="email" type="email" placeholder="example@yahoo.com" class="form-control input-md" required="">  
          <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
        <label>Contact Number</label>
          <input value="<?=$cust->contact?>" name="contact" type="text" placeholder="Contact Number" class="form-control input-md" required="">  
          <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <div class="col-md-6">
        <label>Customer Since</label>
          <input value="<?=$cust->date?>" name="date" type="date" class="form-control input-md" required="">  
          <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
        </div>
          <div class="col-md-6">
          <label>Status</label>
            <select  value="<?=$cust->status?>" name="status" class="form-control">
            <option disabled="disabled" value="<?=$cust->status?>" selected>Level <?=$cust->status?></option>
            <option value="0">(0) Inactive</option>
            <option value="1">(1) Active</option>
            </select>
          </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>
      </div>

      <div class="box-footer">
        <label class="col-md-12 control-label" for="button1id"></label>
        <a href="<?= base_url().'admin/userdetails_customer'?>" class="btn btn-default" role="button">Cancel</a>
        <div class="pull-right">
          <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
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
