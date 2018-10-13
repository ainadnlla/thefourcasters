<div class="content-wrapper">
    <section class="content-header">
      <h1>Maintenance Details</h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'admin/truckdetails'?>">Trucks Details</a></li>
        <li class="active">Maintenance Details</a></li>
      </ol>
    </section>
    
<section class="content"> 
    <div class="row">
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Image</h3>
          </div>

    <form  class="form-horizontal" action="<?=base_url()?>truck/update/<?=$truck->id?>"  method='post'>
    <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input disabled value="<?=$truck->id?>" type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md" required="" >
          </div>
        </div>

      <?php
      $default_path = base_url() . 'images/truck.jpg';
      $file = $truck->img != "" ? base_url(). 'images/'.$truck->img : $default_path ;
      ?>


      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= $file ?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <br/>

        </div>
      </div>
    </div>
    </fieldset>

      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Truck Information</h3>
          </div>
          <div class="box-body">
        <div role="form">
      <fieldset>

      <div class="form-group">
          <label class="col-md-4 control-label" >Make</label>  
          <label class="col-md-4 control-label" >Plate No.</label> 
          <label class="col-md-4 control-label">Series</label>
      </div>

    <div class="form-group">
        <div class="col-xs-4">
          <input disabled value="<?=$truck->brand?>" name="brand" type="text" placeholder="Make" class="form-control input-md" required="">
        </div>
        <div class="col-xs-4">
          <input disabled value="<?=$truck->plate_no?>" name="plate_no" type="text" placeholder="Plate No." class="form-control input-md" required="">
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->series?>" name="series" type="text" placeholder="Series" class="form-control input-md" required="">  
        </div>

    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Engine No.</label>
        <label class="col-md-4 control-label">Chassis No.</label>  
        <label class="col-md-4 control-label">MV File No.</label>  
      </div>

    <div class="form-group">
        <div class="col-md-4">
          <input disabled value="<?=$truck->engine_no?>" name="engine_no" type="text" placeholder="Engine No." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->chassis_no?>" name="chassis_no" type="text" placeholder="Chassis No." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->mvfile_no?>" name="mvfile_no" type="text" placeholder="MV File No." class="form-control input-md" required="">  
        </div>
    </div>

    <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Gross Wt.</label>  
        <label class="col-md-4 control-label" >Net Wt.</label>
        <label class="col-md-4 control-label" >Net Capacity</label>  
      </div>

      <div class="form-group">
        <div class="col-md-4">
          <input disabled value="<?=$truck->grosswt?>" name="grosswt" type="number" min="0" placeholder="Gross Wt." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->netwt?>" name="netwt" type="number" min="0" placeholder="Net Wt." class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
          <input disabled value="<?=$truck->netcap?>" name="netcap" type="number" min="0" placeholder="Net Capacity" class="form-control input-md" required="">  
        </div>
      </div>
      
      <div class="col-md-12">
          <br/>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >Net Capacity</label>  
        <label class="col-md-4 control-label" >Year Model</label>
        <label class="col-md-4 control-label" >Status</label>  
      </div>

      <div class="form-group">
        <div class="col-md-4">
            <input disabled value="<?=$truck->netcap?>" name="netcap" type="number" min="0" placeholder="Net Capacity" class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
            <input disabled value="<?=$truck->year?>" name="year" type="number" min="0" placeholder="Year" class="form-control input-md" required="">  
        </div>
        <div class="col-md-4">
            <select disabled value="<?=$truck->status?>" name="status" class="form-control">
            <option disabled="disabled" value="<?=$truck->status?>" selected>(<?=$truck->status?>)</option>
            </select>
        </div>
      </div>

      <div class="col-md-12">
          <br/>
      </div>

      </div>
      </div>
    </div>
    </div>
</div>
</form>
    
 