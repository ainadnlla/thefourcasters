<div class="content-wrapper">
<section class="content-header">
  <h1>Customer/Importer Details</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'staff/customerdetails'?>">Customer/Importer Details</a></li>
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

        <center>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="id">ID: </label>  
            <div class="col-md-4">
              <input id="id" name="id" type="text" placeholder="ID" class="form-control input-md">
            </div>
        </div>
        <br/><br/> 
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="waybill">Waybill Number: </label>  
          <div class="col-md-4">
            <input id="waybill" name="waybill" type="text" placeholder="Waybill Number" class="form-control input-md" disabled> 
          </div>
        </div>
        <br/><br/> 
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="date">Date:</label>
            <div class="col-md-4">
              <input name="date" type="date" class="form-control input-md">  
              <?= form_error('date', '<span class="label label-danger">', '</span>') ?>  
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="customertype">Customer Type:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="1">Customer Type</option>
                <option value="1">In-house Brokerage</option>
                <option value="2">Broker/Agent</option>
                <option value="3">Freight Forwarder</option>
                <option value="4">Local/Sub-Contractor</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Name: </label>  
            <div class="col-md-4">
              <input id="custname" name="custname" type="text" placeholder="Name" class="form-control input-md" > 
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="cargo">Cargo Size:</label>
            <div class="col-md-4">
              <input id="cargo" name="cargo" type="text" placeholder="Cargo Size" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="truck">Truck:</label>
            <div class="col-md-4">
              <input id="truck" name="truck" type="text" placeholder="Truck" class="form-control input-md" disabled>
          </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="plateno">Plate No:</label>
            <div class="col-md-4">
              <input id="plate_no" name="plate_no" type="text" placeholder="Plate No" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="driverno">Driver No:</label>
            <div class="col-md-4">
              <input id="driver_no" name="driver_no" type="text" placeholder="Driver No" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="drivername">Driver Name:</label>
            <div class="col-md-4">
              <input id="drivername" name="drivername" type="text" placeholder="Driver Name" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="condno">Conductor No:</label>
            <div class="col-md-4">
              <input id="cond_no" name="cond_no" type="text" placeholder="Conductor No" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="condname">Conductor Name:</label>
            <div class="col-md-4">
              <input id="condname" name="condname" type="text" placeholder="Conductor Name" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="price">Price:</label>
            <div class="col-md-4">
              <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" disabled>
            </div>
        </div>
        <br/><br/>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination:</label>  
            <div class="col-md-4">
              <input id="destination" name="destination" type="text" placeholder="Destination" class="form-control input-md">
          </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" >Status</label>
              <div class="col-md-4">
                <input id="status" name="status" type="text" placeholder="Status" class="form-control input-md" disabled>
             </div>
        </div>
        <br/><br/>
        
        <center>
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
              <button id="buttonid" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button></a>
              <a href="<?=base_url().'customer/booking'?>"<button id="" name="" class="btn btn-danger">Cancel</button></a>
            </div>
        </div> 
        </center>
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
