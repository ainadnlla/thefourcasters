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

        <form class="form-signin" action='<?= base_url()."login/signin"?>' method='POST'>
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
  
  </div>


</div>