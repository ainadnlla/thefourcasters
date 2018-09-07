<div class="content-wrapper">
    <section class="content-header">
      <h1>Driver Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails'?>">User Details</a></li>
          <li><a href="<?=base_url().'admin/userdetails_driver'?>">Driver Details</a></li>
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

    <form class="form-horizontal" action ="<?=base_url().'driver/insert'?>" method = "post">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="id" type="text" placeholder="ID" class="form-control input-md" required="" >  
            </div>
          </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="upload">Image</label>  
      <div class="col-md-4">
      <?php echo form_open_multipart('driver/do_upload');?>
      <input class="form-control" type="file" name="img" size="20" >
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="driver_no"> Driver License No.</label>  
        <div class="col-md-4">
          <input  name="driver_no" type="text" placeholder="License No." class="form-control input-md">
          <?= form_error('driver_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" >Expiry Date</label>  
        <div class="col-md-4">
          <input name="expire" type="date" class="form-control input-md">  
          <?= form_error('expire', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="fname">First Name</label>  
        <div class="col-md-4">
          <input  name="fname" type="text" placeholder="First Name" class="form-control input-md">
          <?= form_error('fname', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="mname" >Middle Name</label>  
        <div class="col-md-4">
          <input name="mname" type="text" placeholder="Middle Name (optional)" class="form-control input-md">   
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="lname" >Last Name</label>  
        <div class="col-md-4">
          <input  name="lname" type="text" placeholder="Last Name" class="form-control input-md">  
          <?= form_error('lname', '<span class="label label-danger">', '</span>') ?>  
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
      <label class="col-md-4 control-label" >Birth Day</label>  
        <div class="col-md-4">
          <input name="birthday" type="date" class="form-control input-md">  
          <?= form_error('birthday', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Gender</label>
        <div class="col-md-4">
          <select name="gender" class="form-control">
            <option Selected disabled="disabled" >Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <?= form_error('gender', '<span class="label label-danger">', '</span>') ?>  
          </select>
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
      <label class="col-md-4 control-label" >Employee Since</label>  
        <div class="col-md-4">
          <input name="date" type="date" class="form-control input-md">  
          <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

  <div class="form-group">
      <label class="col-md-4 control-label" for="position">Position</label>
        <div class="col-md-4">
          <select name="position" class="form-control">
            <option Selected disabled="disabled" >Position</option>
            <option value="1">Driver</option>
            <option value="2">Helper</option>
          </select>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-4">
  
          <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Add</button>
            <a href="<?=base_url().'admin/userdetails_driver/'?>" class="btn btn-danger" role="button">Back</a>

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
