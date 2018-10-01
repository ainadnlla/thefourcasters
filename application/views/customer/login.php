<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/login.css"/>
<body class="hold-transition">
<div class="login-box">
    <div class="text-center">
        <a href="<?=base_url()?>customer/login">
        <img id="profile-img" width = "350px" alt="Image" src="<?= base_url()."images/AngelogisticsName.png"?>" />
        <p></p></a>
    </div>
  <!-- /.login-logo  -->
  <div class="login-box-body login-color">
 <p class="login-box-msg">Welcome!</p>
    
        
        <div class="form-group has-feedback">

        <form class="form-signin" action='<?= base_url()."customer/signin"?>' method='POST'>
        <input type="text" 
        name="email" class="form-control" placeholder="Email@example.com" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

        </div>

        <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <center><?php echo $this->session->flashdata("error");?></center>
    </div>
  
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                <div class="pull-left">
                    <label>
                        <input type="checkbox" value="">Remember Me
                    </label>
                </div>
                </div>
            </div>
        <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" name='insert'class="btn btn-primary btn-block btn-flat">Sign In</button>
               
            </div>
           
        <!-- /.col -->
      </div>
    </form>
    <div class="text-center">
    <br/><a data-toggle="modal" data-target="#modal-primary" ></i>Create an account</a>
    </div>
  </div>
  <!-- /.login-box-body -->
  <div class="modal modal-primary fade" id="modal-primary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">REGISTRATION</h4>
              </div>
              <div class="modal-body">
               
            <div class="form-group has-feedback">
                <input name="name" type="text" class="form-control" placeholder="Customer/Importer">
                <span class="glyphicon glyphicon-user form-control-feedback text-primary"></span>
                <?= form_error('name', '<span class="label label-danger">', '</span>') ?>
            </div>
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback text-primary"></span>
                <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback text-primary"></span>
                <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
            </div>
            <div class="form-group has-feedback">
                <input name="repass" type="password" class="form-control" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback text-primary"></span>
                <?= form_error('repass', '<span class="label label-danger">', '</span>') ?> 
            </div>
            <div class="form-group has-feedback">
                <input name="contact" type="password" class="form-control" placeholder="Contact No.">
                <span class="glyphicon glyphicon-phone form-control-feedback text-primary"></span>
                <?= form_error('contact', '<span class="label label-danger">', '</span>') ?> 
            </div>
            <div class="form-group has-feedback">
                <label class="col-md-4 control-label" for="name"><?= $image ?></label>  
                <?= $captchainput ?>
                <!-- <span class="glyphicon glyphicon-phone form-control-feedback text-primary"></span> -->
            </div>
            

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name='insert'class="btn btn-outline">Sign Up</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

</div>