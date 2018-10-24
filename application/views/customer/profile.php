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
          <div class="box box-success">
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
        </div>
     

  <!---   /////////////////////////////////////////////////////////////// -->
  <div class="col-md-9">
   <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Profile</h3>
                </div>
            
                <div class="box-body">
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

                    <div class="form-group">
                      <label for="viewEmail" class="col-sm-2 control-label">Customer Type</label>
                        <div class="col-sm-9">
                          <span disabled class="form-control" > <?= $this->session->cust; ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="viewEmail" class="col-sm-2 control-label">Customer Since</label>
                          <div class="col-sm-9">
                            <span disabled class="form-control" > <?= date('F d, Y', strtotime($this->session->since)); ?></span>
                          </div>
                    </div>
                </form>
              </div>

            </div>
          </div>
            
          </div>
        </div>
      </div>
      </div>
    </section>
  </div>