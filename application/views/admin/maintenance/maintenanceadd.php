<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Information</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="<?=base_url().'admin/truckdetails'?>">Truck Details</a></li>
          <li class="active">Add</a></li>
        </ol>
    </section>

  <section class="content"> 
    <div class="row">
    
    <form  class="form-horizontal" action="<?=base_url()?>maintenance/insert"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>
    </fieldset>

      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">MAINTENANCE DESCRIPTION</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

    <div class="form-group">
        <div class="col-xs-12">
        <label>What seems to be the problem?</label>  
          <textarea value="<?=set_value('warning')?>" name="warning" type="text" placeholder="Description Here..." class="form-control" required=""></textarea>
      </div>
    </div>

    <div class="box-footer">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="pull-right">
            <button id="button1id" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button>
            <a href="<?=base_url().'admin/truckdetails/'?>" class="btn btn-danger" role="button">Back</a>
        </div>
      </div>

      </div>
      </div>
      </div>
  </section>
</div>
</form>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>
