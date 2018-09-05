<div class="content-wrapper">
    <section class="content-header">
      <h1>Customer/Importer Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails'?>">User Details</a></li>
          <li><a href="<?=base_url().'admin/userdetails_customer'?>">Customer/Importer Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-sm-12">   
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Details</h3>
            </div>

    <form class="form-horizontal" action ="<?=base_url().'customer/insert'?>" method = "post">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="id" type="text" placeholder="ID" class="form-control input-md" required="" >  
            </div>
          </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="upload">Image</label>  
      <div class="col-md-4">
      <?php echo form_open_multipart('customer/do_upload');?>
      <input class="form-control" type="file" name="img" size="20">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="name">Customer/Importer</label>  
        <div class="col-md-4">
          <input  name="name" type="text" placeholder="Customer/Importer" class="form-control input-md">
          <?= form_error('name', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Customer Type</label>
        <div class="col-md-4">
          <select name="cust_type" class="form-control">
            <option Selected disabled="disabled" >Customer Type</option>
            <option value="In-house Brokerage">In-house Brokerage</option>
            <option value="Broker/Agent">Broker/Agent</option>
            <option value="Freight Forwarder">Freight Forwarder</option>
            <option value="Local/Sub-contractor">Local/Sub-contractor</option>
          </select>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="password" >Password</label>  
        <div class="col-md-4">
          <input name="password" type="password" placeholder="Password" class="form-control input-md">  
          <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="repass" >Confirm Password</label>  
        <div class="col-md-4">
          <input name="repass" type="password" placeholder="Confirm Password" class="form-control input-md">  
          <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" >Email</label>  
        <div class="col-md-4">
          <input  name="email" type="email" placeholder="example@yahoo.com" class="form-control input-md">  
          <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" >Contact No.</label>  
        <div class="col-md-4">
          <input name="contact" type="text" placeholder="Contact Number" class="form-control input-md">  
          <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" >Customer Since</label>  
        <div class="col-md-4">
          <input name="date" type="date" class="form-control input-md">  
          <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>
    <!-- <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="user_id" type="text"  value="2" class="form-control input-md" required="" >  
            </div>
          </div> -->


    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-4">
  
          <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Add</button>
            <a href="<?=base_url().'admin/userdetails_customer/'?>" class="btn btn-danger" role="button">Back</a>

            </form>
        </div>  
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
