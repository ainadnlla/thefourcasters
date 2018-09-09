
 <div class="content-wrapper">
    <section class="content-header">
      <h1>Staff Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails'?>">User Accounts</a></li>
          <li><a href="<?=base_url().'admin/userdetails_staff'?>">Staff Details</a></li>
          <li class="active">Edit</li>
        </ol>
    </section>

  <section class="content"> 
    <div class="row">
      <div class="col-md-6">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Personal Information</h3>
          </div>
          <div class="box-body">

    <form  class="form-horizontal" action="<?=base_url().'admin/insert'?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-3 control-label"for ="upload">Image</label>  
          <div class="col-md-9">
            <?php echo form_open_multipart('admin/do_upload');?>
            <input class="form-control" type="file" name="img" size="20" >
          </div>
      </div>

      <div class="form-group">
      <label class="col-md-3 control-label"for ="fname">First Name</label>  
        <div class="col-md-9">
          <input  name="fname" type="text" placeholder="First Name" class="form-control input-md">
          <?= form_error('fname', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label" for="mname" >Middle Name</label>  
        <div class="col-md-9">
          <input name="mname" type="text" placeholder="Middle Name (optional)" class="form-control input-md">  
          <?= form_error('mname', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label" for="lname" >Last Name</label>  
        <div class="col-md-9">
          <input  name="lname" type="text" placeholder="Last Name" class="form-control input-md">  
          <?= form_error('lname', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label" for="gender">Gender</label>
        <div class="col-md-9">
          <select name="gender" class="form-control">
            <option Selected disabled="disabled" >Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label" >Birth Date</label>  
          <div class="col-md-9">
            <input name="birthday" type="date" placeholder="Birth Date"  class="form-control input-md"> 
            <?= form_error('birthday', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

    <div class="form-group">
     <label class="col-md-3 control-label">Contact</label>  
       <div class="col-md-9">
          <input  name="contact" type="text" placeholder="Contact No." class="form-control input-md" required="">
            <?= form_error('contact', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" >Employee Since</label>  
          <div class="col-md-9">
            <input name="date" type="date" class="form-control input-md"> 
            <?= form_error('date', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>
      <br/>

          </div>
      </div>
    </fieldset>
    <!-- END OF 1ST BOX -->
  </div>

    <div class="col-md-6"> 
      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">User Details</h3>
            </div>
            <div class="box-body">
          <div role="form">
      <fieldset>

      <div class="form-group">
        </div>

      <div class="form-group">
        <label class="control-label">Email Address</label>
            <input name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
            <?= form_error('email', '<span class="label label-danger">', '</span>'); ?>  
      </div>  

      <div class="form-group">
        <label class="control-label" >Password</label>  
            <input name="password" type="password" placeholder="Password" class="form-control input-md" required="">
            <?= form_error('password', '<span class="label label-danger">', '</span>') ?> 
      </div> 

      <div class="form-group">
        <label class="control-label" >Confirm Password</label>  
            <input name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
           <?= form_error('repass', '<span class="label label-danger">', '</span>') ?> 
      </div>  

      <div class="form-group">
        <label class=" control-label" >Status</label>
            <select name="status" class="form-control">
            <option Selected disabled="disabled" >Status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
            </select>
      </div>

      <div class="form-group">
        <label class="control-label" >Privilege</label>
            <select name="priv" class="form-control">
            <option Selected disabled>Privelege Level</option>
            <option value="1">(1) Admin</option>
            <option value="2">(2) Delivery Creator</option>
            <option value="3">(3) Truck Management</option>
            <option value="4">(4) Driver/Helper Management</option>
            <option value="5">(5) Customer Management</option>
            </select>
      </div>

      <div class="box-footer">
        <label class="control-label" for="button1id"></label>
          <button id="button1id" name="add" type="submit" value="submit" class="btn btn-primary pull-right">Submit</button>
          <a href="<?= base_url().'admin/userdetails_staff'?>" class="btn btn-default" role="button"> Cancel</a>
      </div>

          </div>
        </div>
      </div>
     </fieldset>
 <!-- END OF 2ND ROW -->
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
