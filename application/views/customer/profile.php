<div class="content-wrapper">
    <section class="content-header">
      <h1>User Profile</h1>
        <ol class="breadcrumb">
            <li><a href="<?=base_url().'customer/booking'?>"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">User Profile</li>
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url().'images/'.$this->session->picpath?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $this->session->name; ?></h3>
              <p class="text-muted text-center">Customer/Importer</p>
              <ul class="list-group list-group-unbordered">
              
                <li class="list-group-item">
                  <b>Status</b> <span class = "label label-success pull-right">Active</span>
                </li>

              </ul>
            </div>
          </div>

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Customer Information</h3>
            </div>
            <div class="box-body">
              <strong><i class="fa fa-circle-thin margin-r-5"></i> Customer Type</strong>

              <p class="text-muted">
                <br/><?= $this->session->cust; ?>
              </p>
              <hr>
              <strong><i class="fa fa-calendar-check-o margin-r-5"></i> Customer Since</strong>

              <p class="text-muted">
                <br/><?= date('F d, Y', strtotime($this->session->since)); ?>
              </p>
              <hr>
            </div> 
          </div>
        </div>
     

  <!---   /////////////////////////////////////////////////////////////// -->
  
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
            </ul>
            
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <form class="form-horizontal">
                  <div class="form-group">
                    <label for="viewtName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-9">
                      <span disabled class="form-control" > <?= $this->session->name; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="viewContact" class="col-sm-2 control-label">Contact</label>

                    <div class="col-sm-9">
                      <span disabled class="form-control" > <?= $this->session->contact; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="viewEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-9">
                      <span disabled class="form-control" > <?= $this->session->emailad; ?></span>
                    </div>
                  </div>
                

                </form>
              </div>

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>