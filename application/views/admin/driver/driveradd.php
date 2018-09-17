<div class="content-wrapper">
    <section class="content-header">
      <h1>Driver Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails_driver'?>">Driver Details</a></li>
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

    <form  class="form-horizontal" action="<?=base_url()?>driver/insert/>"  method='post'>
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"required="" >
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= base_url().'images/default.jpg' ?>" alt="..." class="img-thumbnail">
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

<!-- END OF 1ST BOX -->

      <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Schedule</h3>
            </div>
            <div class="box-body">
          <div class="form-horizontal">
      <fieldset>

      <div class="form-group">
      <label class="col-md-4 control-label"for ="timein">Time In</label>  
        <div class="col-md-8">
          <input name="timein" type="time" class="form-control input-md">  
          <?= form_error('timein', '<span class="label label-danger">', '</span>'); ?>  
        </div>
    </div>
    
    <div class="form-group">
      <label class="col-md-4 control-label"for ="timeout">Time out</label>  
        <div class="col-md-8">
          <input name="timeout" type="time"  class="form-control input-md">
          <?= form_error('timeout', '<span class="label label-danger">', '</span>'); ?>  
        </div>
    </div>321

    <div class="form-group">
      <label class="col-md-4 control-label"for ="weekday">Weekdays</label>  
        <div class="col-md-8">
    
              <input type="checkbox" name="weekday[]" value="Sun"> Sunday<br>
              <input type="checkbox" name="weekday[]" value="Mon"> Monday<br>
              <input type="checkbox" name="weekday[]" value="Tue"> Tuesday<br>
              <input type="checkbox" name="weekday[]" value="Wed"> Wednesday<br>
              <input type="checkbox" name="weekday[]" value="Thu"> Thursday<br>
              <input type="checkbox" name="weekday[]" value="Fri"> Friday<br>
              <input type="checkbox" name="weekday[]" value="Sat"> Saturday<br>

            </div>
        </div>

          </div>
        </div>
      </div>

    </div>
    </fieldset>

<!-- END OF 2ND BOX -->

      <div class="col-md-9">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Personal Information</h3>
          </div>
          <div class="box-body">
        <div class="form-horizontal">
      <fieldset>

    <div class="form-group">
        <label class="col-md-4 control-label" for="driver_no" >Driver License No.</label>  
            <div class="col-md-6">
                <input name="driver_no" type="text" placeholder="License No." class="form-control input-md">
                <?= form_error('driver_no', '<span class="label label-danger">', '</span>'); ?>  
            </div>
    </div> 

    <div class="form-group">
        <label class="col-md-4 control-label" for="expire" >Expiry Date</label>  
            <div class="col-md-6">
                <input name="expire" type="date" placeholder="License No." class="form-control input-md">
                <?= form_error('expire', '<span class="label label-danger">', '</span>'); ?>  
            </div>
    </div> 

      <div class="form-group" >
        <label class="col-md-4 control-label" for ="fname" >First Name</label>  
          <div class="col-md-6">
            <input name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
            <?= form_error('fname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Middle Name</label>  
          <div class="col-md-6">
            <input name="mname" type="text" placeholder="Middle Name" class="form-control input-md" >
            <?= form_error('mname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Last Name</label>  
          <div class="col-md-6">
            <input name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
            <?= form_error('lname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div> 

      <div class="form-group">
        <label class="col-md-4 control-label" >Gender</label>
            <div class="col-md-6">
            <select name="gender" class="form-control">
            <option Selected disabled="disabled" >Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                </select>
            </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" >Birth Date</label>  
          <div class="col-md-6">
            <input name="birthday" type="date" class="form-control input-md"> 
            <?= form_error('birthday', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

    <div class="form-group">
     <label class="col-md-4 control-label">Contact</label>  
       <div class="col-md-6">
          <input name="contact" type="text" placeholder="Contact No." class="form-control input-md" required="">
            <?= form_error('contact', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

    <div class="form-group">
     <label class="col-md-4 control-label">Years of Experience</label>  
       <div class="col-md-6">
          <input name="experience" type="number" placeholder="Years of Experience" class="form-control input-md" required="">
            <?= form_error('experience', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Employee Since</label>  
          <div class="col-md-6">
            <input name="date" type="date" class="form-control input-md"> 
            <?= form_error('date', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>

          </div>
        </div>
      </div>

<!-- END OF 3RD BOX -->

      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">User Details</h3>
            </div>
            <div class="box-body">
          <div class="form-horizontal">
      <fieldset>

      <div class="form-group">
        <label class="col-md-4 control-label">Email</label>  
          <div class="col-md-6">
            <input name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
            <?= form_error('email', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>  
          <div class="col-md-6">
            <input name="password" type="password" placeholder="Password" class="form-control input-md" required="">
            <?= form_error('password', '<span class="label label-danger">', '</span>') ?> 
          </div>
      </div> 

      <div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label>  
          <div class="col-md-6">
            <input name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
           <?= form_error('repass', '<span class="label label-danger">', '</span>') ?> 
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Status</label>
          <div class="col-md-6">
            <select name="status" class="form-control">
            <option Selected disabled>Unchanged</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
            </select>
          </div>
      </div>

      <div class="box-footer">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-6">
          <button id="button1id" name="add" type="submit" value="submit" class="btn btn-primary">Submit</button>
          <a href="<?= base_url().'admin/userdetails_driver'?>" class="btn btn-default" role="button"> Cancel</a>
        </div>
      </div>

          </div>
        </div>
      </div>
      </fieldset>

     </div>
    </fieldset>
    </div> 
     <!-- END OF 4TH BOX -->
     </div>
     <!-- END OF ROW -->

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
