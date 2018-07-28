<div class="content-wrapper">
    <section class="content-header">
      <h1>Driver Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'user/userdetails'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'user/userdetails_driver'?>">Driver Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-sm-12">   
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Details</h3>
            </div>

    <form class="form-horizontal" action ="<?=base_url().'truck/insert'?>" method = "post">
        <div class="box-body">
          <div class="form-group">
            <div class="col-md-4">
              <input type="hidden"  name="id" type="text" placeholder="ID" class="form-control input-md" required="" >  
            </div>
          </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="img">Image</label>  
        <div class="col-md-4">
          <input  name="img" type="file" placeholder="Image File" class="form-control input-md">  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label"for ="license_no">License #</label>  
        <div class="col-md-4">
          <input  name="license_no" type="text" placeholder="First Name" class="form-control input-md">
          <?= form_error('license_no', '<span class="label label-danger">', '</span>') ?>  
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="insurance" >Insurance Date</label>  
        <div class="col-md-4">
          <input name="insurance" type="text" placeholder="Insurance Date" class="form-control input-md">  
          <?= form_error('insurance', '<span class="label label-danger">', '</span>') ?>   
        </div>
    </div>

  

    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-4">
  
          <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Add</button>
            <a href="<?=base_url().'user/userdetails_driver/'?>" class="btn btn-danger" role="button">Back</a>

            </form>
        </div>  
      </div>
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
