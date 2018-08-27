<div class="content-wrapper">
    <section class="content-header">
      <h1>Customer Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/userdetails'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'admin/userdetails_customer'?>">Customer Details</a></li>
        <li class="active">View</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
      <div class="col-sm-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">View Details</h3>
            </div>

            <form class="form-horizontal">
              <div class="box-body">
              <form method="POST" action="<?=base_url().'customer/view/'?>">

                <div class="form-group">
                  <label for="id" class="col-sm-4 control-label">ID</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->id?>" type="text" name="id" class="form-control" placeholder="id" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="fname" class="col-sm-4 control-label">Customer/Brokerage</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->name?>" type="text" name="name" class="form-control" placeholder="name" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="fname" class="col-sm-4 control-label">Customer Type</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->cust_type?>" type="text" name="cust_type" class="form-control" placeholder="name" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->email?>" type="text" name="email" class="form-control" placeholder="email" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contact" class="col-sm-4 control-label">Contact No.</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->contact?>" type="text" name="contact" class="form-control" placeholder="contact" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-4">
                <a href="<?=base_url().'admin/userdetails_customer/'?>" class="btn btn-danger" role="button">Back</a>
                </div>
                </div>

              </div>
              </form>
            </form> 
          </div>
        </div>  
  </section>
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>

