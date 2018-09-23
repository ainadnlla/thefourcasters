 <div class="content-wrapper">
    <section class="content-header">
      <h1>Staff Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails_staff'?>">Staff Details</a></li>
          <li class="active">Edit</li>
        </ol>
    </section>

  <section class="content"> 
    <div class="row">
      <div class="col-md-3">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Profile Photo</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url().'staff/insert'?>"  method='post'>
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
            <input value="<?=set_value('img')?>" value="<?=set_value('img')?>" class="form-control" type="file" name="img" size="20" >
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
            <h3 class="box-title">Personal Information</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

      <div class="form-group">
          <label class="col-md-4 control-label" >First Name</label>  
          <label class="col-md-3 control-label" >Middle Name</label> 
          <label class="col-md-5 control-label" >Last Name</label> 
      </div>

      <div class="form-group">
        <div class="col-xs-4">
            <input value="<?=set_value('fname')?>" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
            <?= form_error('fname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
          <div class="col-xs-3">
            <input value="<?=set_value('mname')?>" name="mname" type="text" placeholder="Middle Name (Optional)" class="form-control input-md">
          </div>
          <div class="col-xs-5">
            <input value="<?=set_value('lname')?>" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
            <?= form_error('lname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div> 

      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label"> Gender</label>
        <label class="col-md-6 control-label" >Birth Date</label>  
      </div>

      <div class="form-group">
            <div class="col-md-6">
              <select value="<?=set_value('gender')?>" name="gender" class="form-control">
              <option Selected disabled="disabled" >Gender</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
              </select>
              <?= form_error('gender', '<span class="label label-danger">', '</span>'); ?>  
            </div>
            <div class="col-md-6">
              <input value="<?=set_value('birthday')?>" name="birthday" type="date" class="form-control input-md"> 
              <?= form_error('birthday', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label">Contact</label>  
        <label class="col-md-6 control-label" >Employee Since</label>  
      </div>

      <div class="form-group">
          <div class="col-md-6">
              <input value="<?=set_value('contact')?>" name="contact" type="text" placeholder="Contact No." class="form-control input-md" required="">
              <?= form_error('contact', '<span class="label label-danger">', '</span>'); ?>  
          </div>
          <div class="col-md-6">
            <input value="<?=set_value('date')?>" name="date" type="date" class="form-control input-md"> 
            <?= form_error('date', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

      <div class="col-md-12">
          <br/>
      </div>

      </fieldset>
          </div>
        </div>
      </div>

      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">User Details</h3>
            </div>
            <div class="box-body">
          <div class="form-horizontal">
      <fieldset>

      <div class="form-group">
        <label class="col-md-4 control-label">Email</label>  
          <div class="col-md-5">
            <input value="<?=set_value('email')?>" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
            <?= form_error('email', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>  
          <div class="col-md-5">
            <input value="<?=set_value('password')?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
            <?= form_error('password', '<span class="label label-danger">', '</span>') ?> 
          </div>
      </div> 

      <div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label>  
          <div class="col-md-5">
            <input value="<?=set_value('repass')?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
           <?= form_error('repass', '<span class="label label-danger">', '</span>') ?> 
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Status</label>
          <div class="col-md-5">
            <select value="<?=set_value('status')?>" name="status" class="form-control">
            <option selected disabled>Status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" >Privilege</label>
          <div class="col-md-5">
            <select value="<?=set_value('priv')?>" name="priv" class="form-control">
            <option Selected disabled>Privilege Level</option>
            <option value="1">(1) Admin</option>
            <option value="2">(2) Delivery Creator</option>
            <option value="3">(3) Truck Management</option>
            <option value="4">(4) Driver/Helper Management</option>
            <option value="5">(5) Customer Management</option>
            
            </select>
          </div>
      </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-4">
            <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Add</button>
            <a href="<?=base_url().'admin/userdetails_customer/'?>" class="btn btn-danger" role="button">Back</a>
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
