<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- styles -->
<link href="css/styles.css" rel="stylesheet">
<body>
<div class="header">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <!-- Logo -->
            <div class="logo">
               <h1><a href="<?=base_url()?>">Angelogistics</a></h1>
            </div>
         </div>
         <div class="col-md-5">
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group form">
                     <input type="text" class="form-control" placeholder="Search...">
                     <span class="input-group-btn">
                       <button class="btn btn-primary" type="button">Search</button>
                     </span>
                </div>
              </div>
            </div>
         </div>

         <div class="col-md-2">
            <div class="navbar navbar-inverse" role="banner">
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                      <ul class="dropdown-menu animated fadeInUp">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="login.php">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
            </div>
         </div>
      </div>
   </div>
</div>