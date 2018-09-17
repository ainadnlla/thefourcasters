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
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Profile Photo</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url().'customer/update/<?=$cust->id?>'?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= base_url().'images/'.$cust->img ?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <hr/>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
          <div class="col-md-9">
            <?php echo form_open_multipart('admin/do_upload');?>
            <input class="form-control" type="file" name="img" size="20" >
            <?= form_error('img', '<span class="label label-danger">', '</span>'); ?>  
            </div>
          </div>
          <br/>
        </div>
      </div>
    </div>
    </fieldset>

      <div class="col-md-9">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Customer Information</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

      <div class="form-group">
          <label class="col-md-6 control-label" >Customer/Importer</label>  
          <label class="col-md-6 control-label" >Customer Type</label> 
      </div>

    <div class="form-group">
        <div class="col-xs-6">
          <input value="<?=$cust->name?>" name="name" type="text" placeholder="Customer/Importer" class="form-control input-md">
          <?= form_error('name', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-xs-6">
        <select value="<?=$cust->cust_type?>" name="cust_type" class="form-control">
            <option Selected disabled="disabled" value="<?=$cust->cust_type?>" selected><?=$cust->cust_type?></option>
            <option disabled>----------------</option>
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
        <label class="col-md-6 control-label"> Password</label>
        <label class="col-md-6 control-label" >Confirm Password</label>  
      </div>

    <div class="form-group">
        <div class="col-md-6">
          <input value="<?=$cust->password?>" name="password" type="password" placeholder="Password" class="form-control input-md">  
          <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
          <input value="<?=$cust->repass?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md">  
          <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label"> Email</label>
        <label class="col-md-6 control-label" >Contact Number</label>  
      </div>

    <div class="form-group">
        <div class="col-md-6">
          <input value="<?=$cust->email?>" name="email" type="email" placeholder="example@yahoo.com" class="form-control input-md">  
          <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
        </div>
        <div class="col-md-6">
          <input value="<?=$cust->contact?>" name="contact" type="text" placeholder="Contact Number" class="form-control input-md">  
          <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label" >Customer Since</label>  
        <label class="col-md-6 control-label" >Status</label>
      </div>

      <div class="form-group">
        <div class="col-md-6">
          <input value="<?=$cust->date?>" name="date" type="date" class="form-control input-md">  
          <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
        </div>
          <div class="col-md-6">
            <select  value="<?=$cust->status?>" name="status" class="form-control">
            <option Selected disabled="disabled" value="<?=$cust->status?>" selected><?=$cust->status?></option>
            <option value="0">(0) Inactive</option>
            <option value="1">(1) Active</option>
            </select>
          </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-12 text-right">
          <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
          <a href="<?= base_url().'admin/userdetails_customer'?>" class="btn btn-danger" role="button"> Cancel</a>
        </div>
      </div>

      <div class="col-md-12">
          <br/>
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
