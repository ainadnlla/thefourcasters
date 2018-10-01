<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/login.css"/>
<body class="hold-transition">
<div class="register-box">
    <div class="text-center">
        <a href="<?=base_url()?>customer/register">
        <img id="profile-img" width = "350px" alt="Image" src="<?= base_url()."images/AngelogisticsName.png"?>" />
        <p></p></a>
    </div>
  <!-- /.login-logo  -->
  <div class="register-box-body login-color">
 <p class="register-box-msg">Registration</p>
    
      <div class="form-group has-feedback">
        <input name="name" type="text" class="form-control" placeholder="Customer/Importer">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('name', '<span class="label label-danger">', '</span>') ?>
      </div>
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email">
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
        <input name="contact" type="password" class="form-control" placeholder="Contact No.">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        <?= form_error('contact', '<span class="label label-danger">', '</span>') ?> 
      </div>
  
        <div class="row">
        <div class="text-center">
                <button type="submit" name='insert'class="btn btn-primary btn-flat">Sign Up</button>
               
            </div>
           
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>