<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?=base_url()?>staff/login"><b>Angelogistics Forwarder Corporation</b></a>
    </div>
  <!-- /.login-logo  -->
  <div class="login-box-body">
 <!--  <p class="login-box-msg">Sign in to start your session</p>-->

    
        
        <div class="form-group has-feedback">

            <form class="form-signin" action='<?= base_url()."staff/signin"?>' method='POST'>
            <input type="text" value='<?=set_value('email')?>' 
            name="email" class="form-control" placeholder="Username" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

        </div>

      
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
      
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox">&nbsp Remember Me
                    </label>
                </div>
            </div>
        <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        <!-- /.col -->
      </div>
    </form>

<!--    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
     /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>