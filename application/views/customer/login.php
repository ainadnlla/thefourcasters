<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?=base_url()?>customer/login"><b>Angelogistics Forwarder Corporation</b></a>
    </div>
  <!-- /.login-logo  -->
  <div class="login-box-body">
 <!--  <p class="login-box-msg">Sign in to start your session</p>-->

    
        
        <div class="form-group has-feedback">

            <form class="form-signin" action='<?= base_url()."customer/signin"?>' method='POST'>
            <input type="text" 
            name="email" class="form-control" placeholder="Email@example.com" required autofocus>
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
                <button type="submit" name='insert'class="btn btn-primary btn-block btn-flat">Sign In</button>
               
            </div>
           
        <!-- /.col -->
      </div>
      <center><?php echo $this->session->flashdata("error");?></center>
    </form>
    
    <a href="<?=base_url().'customer/registration'?>"></i>Signup</a>



  </div>
  <!-- /.login-box-body -->
</div>