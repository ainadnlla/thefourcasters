<div class="content-wrapper">
<section class="content-header">
  <h1>Booking Information</h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'customer/index'?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="<?=base_url().'customer/booking'?>">Booking Information</a></li>
      <li class="active">Add</a></li>
    </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">View Details</h3>
        </div>

    <form  class="form">
      <fieldset>
        <div class="form-group">
          <div class="col-md-12">
            <input type="hidden" type="text" placeholder="ID" class="form-control input-md"value="<?=$books ->id?>" required="" >
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Waybill</label>
            <input disabled value="<?=$books->waybill?>"type="text" placeholder="Waybill" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Customer/Importer</label>  
            <input disabled value="<?=$books->custname?>" type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
          <div class="col-md-4">
            <label>Customer Type</label>
            <input disabled value="<?=$books->cust_type?>" type="text" placeholder="Customer/Importer" class="form-control input-md"> 
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>
        
        <div class="form-group">
          <div class="col-md-4">
            <label>Date Schdeuled</label>
            <input disabled value="<?=$books->date?>" type="date" class="form-control input-md">  
          </div>
          <div class="col-md-4">
            <label>Product Type</label>  
            <input disabled value="<?=$books->product?>" type="text" placeholder="Product" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Description</label>  
            <input disabled value="<?=$books->description?>" type="text" placeholder="Decription" class="form-control input-md">
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Pieces</label>  
            <input disabled value="<?=$books->pieces?>" type="text" placeholder="Pieces" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Cargo Size</label>
            <input disabled value="<?=$books->cargo?>" type="text" placeholder="Cargo Size" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Truck Plate No.</label>  
            <input disabled value="<?=$books->plate_no?>" type="text" placeholder="Truck Plate No." class="form-control input-md">
          </div>
        </div>

        <div class="col-md-12">
          <br/>
        </div>

        <div class="form-group">
          <div class="col-md-4">
            <label>Driver ID</label>  
            <input disabled value="<?=$books->driverid?>" type="text" placeholder="Driver" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Helper ID</label>  
            <input disabled value="<?=$books->helperid?>" type="text" placeholder="Helper" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Price</label>
            <input disabled value="<?=$books->price?>" type="text" placeholder="Price" class="form-control input-md">
          </div>
        </div>

      <div class="col-md-12">
        <br/>
      </div>

        <div class="form-group">
          <div class="col-md-8">
            <label>Destination</label>  
            <input disabled value="<?=$books->destination?>" type="text" placeholder="Destination" class="form-control input-md">
          </div>
          <div class="col-md-4">
            <label>Status</label>
            <input disabled value="Level <?=$books->action?>" type="text" placeholder="Status" class="form-control input-md">
          </div>
        </div>

       <div class="col-md-12">
          <br/>
      </div>

    </fieldset>
 
      <div class="box-footer">
        <label class="col-md-12 control-label" for="button1id"></label>
        <div class="pull-right">
        <a href="<?= base_url().'customer/booking'?>" class="btn btn-default" role="button">Cancel</a>
        </div>
      </div>

</div>
</div>
<section class="content">
  <div class="row">
    <div class="col-sm-12">   
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Logistics Tracking</h3>
        </div>
      <fieldset>
         <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                 <h6>BOOKING PROCESS</h6>
                  </span>
            </li>
            <!-- timeline item -->
           <?php if($this->session->userdata('action')=='0' ){?>
            <li>
              <i class="fa fa-hourglass-half bg-maroon"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The item is on due process</h3>
              </div>
            </li>
            <?php
            }else{}
            ?>
            <!-- END timeline item -->
            <!-- timeline item -->
            <?php if($this->session->userdata('action')=='1'){?>
              <li>
              <i class="fa fa-hourglass-half bg-maroon"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Booking Information has been delivered and is on due process</h3>
              </div>
            </li>           
            <li>
              <i class="fa fa-check bg-yellow"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Bookng Information has been accepted by Angelogistics Forwarder Corporation</h3>
              </div>
            </li>
            <?php }else{} ?>
            <!-- END timeline item -->
             <!-- timeline item -->
           <?php if($this->session->userdata('action')=='2' ){?>
            <li>
              <i class="fa fa-hourglass-half bg-maroon"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Booking Information has been delivered and is on due process</h3>
              </div>
            </li>           
            <li>
              <i class="fa fa-close bg-red"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Bookng Information has been denied by Angelogistics Forwarder Corporation</h3>
              </div>
            </li>
            <?php }else{}
            ?>
            <!-- END timeline item -->
            <!-- timeline item -->
            <?php if($this->session->userdata('action')=='3'){?>
              <li>
              <i class="fa fa-hourglass-half bg-maroon"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Booking Information has been delivered and is on due process</h3>
              </div>
            </li>           
            <li>
              <i class="fa fa-check bg-yellow"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Bookng Information has been accepted by Angelogistics Forwarder Corporation</h3>
              </div>
            </li>
            <li>
              <i class="fa fa-truck bg-blue"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The Products are now being delivered to destination</h3>
              </div>
            </li>
            <?php }else{}?>
            <!-- END timeline item -->
                     
             <!-- timeline item -->
           <?php if($this->session->userdata('action')=='4' ){?>
            <li>
              <i class="fa fa-hourglass-half bg-maroon"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The booking information has been delivered and is on due process</h3>
              </div>
            </li>           
            <li>
              <i class="fa fa-check bg-yellow"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The bookng information has been accepted by Angelogistics Forwarder Corporation</h3>
              </div>
            </li>
            <li>
              <i class="fa fa-truck bg-blue"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The truck is in transit and products are now being delivered to destination</h3>
              </div>
            </li>
            <li>
              <i class="fa fa-map-pin bg-purple"></i>
              <div class="timeline-item">
                <h3 class="timeline-header">The truck has arrived to the targeted destination</h3>
              </div>
            </li>
            <?php
            }else{}
            ?>
            <!-- END timeline item -->
            <li>
            <?php IF($this->session->userdata('action')=='0' || $this->session->userdata('action')=='1' || $this->session->userdata('action')=='3'){
              echo "<i class='fa fa-clock-o bg-gray'>"."</i>"; 
            }elseif($this->session->userdata('action')=='4'){
              echo "<i class='fa fa-check-circle bg-green'>"."</i>";
            }else{
              echo "<i class='fa fa-times-circle bg-red'>"."</i>";
            }
            ?>
              <!-- <i class="fa fa-check-circle bg-green"></i>   -->
              <!-- <i class="fa fa-times-circle bg-red"></i>   -->
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
   
       <div class="col-md-12">
          <br/>
      </div>

    </fieldset> </div></div></div>
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
