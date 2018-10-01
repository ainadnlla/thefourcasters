<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/register.css"/>
<body class="hold-transition">
<div class="register-box">
    <div class="text-center">
        <a href="<?=base_url()?>staff/register">
        <p></p></a>
    </div>
  <!-- /.login-logo  -->
  <div class="register-box-body register-color">
 <h4 class="register-box-msg"><b>REGISTRATION</b></h4>

 <form action="<?=base_url().'staff/regis'?>"  method='post'>    

  <div class="form-group has-feedback">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" required="" >
          </div>
        </div>
      <div class="form-group has-feedback">
        <input value="<?=set_value('fname')?>" name="fname" type="text" class="form-control" placeholder="First Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('fname', '<span class="label label-danger">', '</span>') ?>
      </div>
      <div class="form-group has-feedback">
        <input value="<?=set_value('mname')?>" name="mname" type="text" class="form-control" placeholder="Middle Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input value="<?=set_value('lname')?>" name="lname" type="text" class="form-control" placeholder="Last Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('lname', '<span class="label label-danger">', '</span>') ?>
      </div>
      <div class="form-group has-feedback">
        <input value="<?=set_value('email')?>" name="email" type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
      </div>
      <div class="form-group has-feedback">
        <input name="repass" type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <?= form_error('repass', '<span class="label label-danger">', '</span>') ?> 
      </div>
      <div class="form-group has-feedback">
          <select value="<?=set_value('gender')?>" name="gender" class="form-control"  placeholder="Gender">
          <option Selected disabled="disabled" >Gender</option>
          <option value="M">Male</option>
          <option value="F">Female</option>
          </select>
        <?= form_error('gender', '<span class="label label-danger">', '</span>') ?> 
      </div>
      <div class="form-group has-feedback">
        <input value="<?=set_value('birthday')?>" name="birthday" type="date" class="form-control" placeholder="Birth Date">
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
        <?= form_error('birthday', '<span class="label label-danger">', '</span>') ?> 
      </div>
      <div class="form-group has-feedback">
        <input value="<?=set_value('contact')?>" name="contact" type="text" class="form-control" placeholder="Contact No.">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        <?= form_error('contact', '<span class="label label-danger">', '</span>') ?> 
      </div>
      <div class="form-group has-feedback">
      <?= $image ?><input type="text" name="captcha" value="" class="col-md-8 pull-right" placeholder="Enter Captcha">                          
        <?= form_error('captcha', '<span class="label label-danger">', '</span>') ?> 
      </div>
      <div class="form-group has-feedback">
  </form>

            <a href="<?=base_url()?>login/staff" role="button" class="btn btn-primary btn-flat">Back</a>
            <button type="submit" name="add" value="Submit"  class="pull-right btn btn-primary btn-flat">Sign Up</button>

        </div>    
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>