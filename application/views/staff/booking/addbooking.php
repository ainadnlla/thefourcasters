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
            <input id="waybill" name="waybill" type="text" placeholder="Waybill Number" class="form-control input-md"> 
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
                <option value="0">Customer Type</option>
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
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Cargo Size</option>
                <option value="1">FCL 1x40</option>
                <option value="2">FCL 1x20</option>
                <option value="3">LCL (ELF)</option>
                <option value="4">LCL 1x40 (Guaranteed Load)</option>
                <option value="5">FCL 2x20</option>
                <option value="6">FCL 1x45</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="truck">Truck:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="1">In-house Brokerage</option>
                <option value="2">Walk In</option>
              </select>
          </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="plateno">Plate No:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Plate No.</option>
                <option value="1">RCE 120</option>
                <option value="2">RGY 294</option>
                <option value="3">RLD 965</option>
                <option value="4">RFR 667</option>
                <option value="5">RLE 993</option>
                <option value="6">RNK 276</option>
                <option value="7">UIM 308</option>
                <option value="8">AAQ 9266</option>
                <option value="9">AAQ 7784</option>
                <option value="10">ABA 9575</option>
                <option value="11">RNK 816</option>
                <option value="12">130110</option>
                <option value="13">RLP 377</option>
                <option value="14">ABF 3040</option>
                <option value="15">130104-A (R. JABALLA)</option>
                <option value="16">130104-B (R. JABALLA)</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="driverno">Driver No:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Driver No</option>
                <option value="1">ACLDI010987016</option>
                <option value="2">ACLDI090878015</option>
                <option value="3">ACLDI240178014</option>
                <option value="4">ACLDI300862013</option>
                <option value="5">ACLDI070952012</option>
                <option value="6">ACLDI1000000011</option>
                <option value="7">ACLDI280588010</option>
                <option value="8">ACLDI260573009</option>
                <option value="9">ACLDI311276008</option>
                <option value="10">ACLDI201084007</option>
                <option value="11">ACLDI180468006</option>
                <option value="12">ACLDI241164005</option>
                <option value="13">ACLDI141281004</option>
                <option value="14">ACLDI081281003</option>
                <option value="15">ACLDI241283002</option>
                <option value="16">ACLDI091180001</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="drivername">Driver Name:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Driver Name</option>
                <option value="1">A. Villamor</option>
                <option value="2">E. Saaverda</option>
                <option value="3">I. Rafaeles</option>
                <option value="4">J. Patino</option>
                <option value="5">J. Layan</option>
                <option value="6">M. Latap</option>
                <option value="7">J. Lansang</option>
                <option value="8">R. Jaballa</option>
                <option value="9">D. Jaballa</option>
                <option value="10">M. Estaris</option>
                <option value="11">L. Catalan</option>
                <option value="12">T. Bitoon</option>
                <option value="13">J. Bartolome</option>
                <option value="14">E. Baquiran</option>
                <option value="15">J. Baluran</option>
                <option value="16">W. Apas</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="condno">Conductor No:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Conductor No</option>
                <option value="1">ACLHL000000017</option>
                <option value="2">ACLHL000000016</option>
                <option value="3">ACLHL230676015</option>
                <option value="4">ACLHL000000014</option>
                <option value="5">ACLHL000000013</option>
                <option value="6">ACLHL011288012</option>
                <option value="7">ACLHL011288011</option>
                <option value="8">ACLHL221285010</option>
                <option value="9">ACLHL211294009</option>
                <option value="10">ACLHL00000008</option>
                <option value="11">ACLHL090395007</option>
                <option value="12">ACLHL231076006</option>
                <option value="13">ACLHL280599005</option>
                <option value="14">ACLHL281190004</option>
                <option value="15">ACLHL180589003</option>
                <option value="16">ACLHL260490002</option>
                <option value="17">ACLHL000000001</option>
                <option value="18">Option 18</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="condname">Conductor Name:</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Conductor Name</option>
                <option value="1">Z. Ubaldo</option>
                <option value="2">D. Traquina</option>
                <option value="3">C. Tigbawan</option>
                <option value="4">A. Tanaya</option>
                <option value="5">E. Rodriquez</option>
                <option value="6">A. Mendez</option>
                <option value="7">B. Lozada</option>
                <option value="8">JF. Lomente</option>
                <option value="9">JS. Lomente</option>
                <option value="10">A. Lomente</option>
                <option value="11">G. Librojo</option>
                <option value="12">A. Lagrimas</option>
                <option value="13">V. Jaballa</option>
                <option value="14">J. Fernandez</option>
                <option value="15">M. Deguitos</option>
                <option value="16">L. Catalan Jr.</option>
                <option value="17">J. Ablazo</option>
                <option value="18">Option 18</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="price">Price:</label>
            <div class="col-md-4">
              <input id="custname" name="custname" type="text" placeholder="Name" class="form-control input-md" > 
            </div>
        </div>
        <br/><br/>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="destination">Destination:</label>  
            <div class="col-md-4">
              <input id="custname" name="custname" type="text" placeholder="Name" class="form-control input-md" > 
            </div>
        </div>
        <br/><br/>
        
        <!-- Select Basic -->
        <div class="form-group">
          <label class="col-md-4 control-label" >Status</label>
            <div class="col-md-4">
              <select id="cust_type" name="customertype" class="form-control">
                <option value="0">Pending</option>
                <option value="1">Approve</option>
              </select>
            </div>
        </div>
        <br/><br/>
        
        <center>
        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
              <button id="buttonid" name="add" type="Submit" value="Submit" class="btn btn-success">Submit</button></a>
              <a href="<?=base_url().'admin/booking'?>"<button id="" name="" class="btn btn-danger">Cancel</button></a>
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
