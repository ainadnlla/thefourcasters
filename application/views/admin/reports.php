<div class="content-wrapper">
<section class="content-header">
  <h1>Reports</h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url().'staff/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Reports</a></li>
  </ol>
</section>


    
<form  class="form-horizontal"  action ="<?=base_url()?>admin/reports/"  method='get'>
<section class="content">

  <div class="col-xs-3">
    <div class="form-group">
        <select name="month" class="form-control">
          <option selected disabled>Select Month</option>
          <option value="01">January</option>
          <option value="02">Febuary</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
    </div>
  </div>
  <div class="col-xs-2">
    <div class="form-group">
        <select name="day" class="form-control">
          <option selected disabled>Select Day</option>
          <?php
          for($y = 01; $y <= 31; $y++){
            echo "<option value=".$y."> ".$y."</option>";
          }
          ?>
        </select>
    </div>
  </div>

  <div class="col-xs-3">
    <div class="form-group">
        <select name="year" class="form-control">
        <option selected disabled>Select Year</option>
        <?php
        for($x = 2005; $x <= date('Y'); $x++){
          echo "<option value=".$x."> ".$x."</option>";
        }
        ?>
        </select>
    </div>
  </div>

  <div class="col-xs-1">
    <div class="form-group">
      <button name="submit" type="submit" value="submit" class="form-control btn btn-default">GO</button>
    </div>
  </div>
<!-- Daily -->

<div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Daily Booking Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th>Waybill</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Cargo Size</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Status</th>
              </tr>
              </thead>
                  
                  <tbody>
                  <?php foreach($days as $day): ?>  
                  <tr>
               
                  <td><?= $day->waybill?></td>
                  <td><?= $day->custname?></td>
                  <td><?= $day->date?></td>
                  <td><?= $day->cargo?></td>
                  <td><?= $day->destination?></td>
                  <td>₱<?= $day->price?></td>
                  <td>  <?php if($day->action==1){ ?>
                          <div class="label label-success">
                            <strong>Accepted</strong>
                          </div>
                        <?php }elseif($day->action==2){ ?>
                          <div class="label label-danger">
                            <strong>Denied</strong>
                          </div></p>
                        <?php }else{?>
                          <div class="label label-warning">
                            <strong>Pending</strong>
                          </div>
                     <?php   }?>
                     </td>
                  </tr>
                  <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="<?=base_url()."admin/pdf"?>" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
      </div>
      </div>
<!-- Monthly -->

<div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Booking Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="monthlyy" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th>Waybill</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Cargo Size</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Status</th>
              </tr>
              </thead>
                  
                  <tbody>
                  <?php foreach($reps as $rep): ?>  
                  <tr>
               
                  <td><?= $rep->waybill?></td>
                  <td><?= $rep->custname?></td>
                  <td><?= $rep->date?></td>
                  <td><?= $rep->cargo?></td>
                  <td><?= $rep->destination?></td>
                  <td>₱<?= $rep->price?></td>
                  <td>  <?php if($rep->action==1){ ?>
                          <div class="label label-success">
                            <strong>Accepted</strong>
                          </div>
                        <?php }elseif($rep->action==2){ ?>
                          <div class="label label-danger">
                            <strong>Denied</strong>
                          </div></p>
                        <?php }else{?>
                          <div class="label label-warning">
                            <strong>Pending</strong>
                          </div>
                     <?php   }?>
                     </td>
                  </tr>
                  <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="<?=base_url()."admin/pdf"?>" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
      </div>
      </div>
<!-- Yearly -->

<div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Yearly Booking Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="yearlyy" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th>Waybill</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Cargo Size</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Status</th>
              </tr>
              </thead>
                  
                  <tbody>
                  <?php foreach($years as $year): ?>  
                  <tr>
               
                  <td><?= $year->waybill?></td>
                  <td><?= $year->custname?></td>
                  <td><?= $year->date?></td>
                  <td><?= $year->cargo?></td>
                  <td><?= $year->destination?></td>
                  <td>₱<?= $year->price?></td>
                  <td>  <?php if($year->action==1){ ?>
                          <div class="label label-success">
                            <strong>Accepted</strong>
                          </div>
                        <?php }elseif($year->action==2){ ?>
                          <div class="label label-danger">
                            <strong>Denied</strong>
                          </div></p>
                        <?php }else{?>
                          <div class="label label-warning">
                            <strong>Pending</strong>
                          </div>
                     <?php   }?>
                     </td>
                  </tr>
                  <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="<?=base_url()."admin/pdf"?>" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
      </div>
      </div>
<!-- MAINTENANCE REPORT -->

<div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Daily Maintenance Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="main" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                  <th>Maintenance Date</th>
                  <th>Maintenance Description</th>
                  <th>Supplier</th>
                  <th>Item Description</th>
                  <th>Purchase</th>
                  <th>Price</th>
                  <th>Unit</th>
                  <th>Quantity</th>
                  <th>Amount</th>
              </tr>
              </thead>
                  
                  <tbody>
                  <?php foreach($maindays as $mainday): ?>
                    <tr>
                        <td><?= date('M d, Y - g:i A', strtotime($mainday->date))?></td>
                        <td><?= $mainday->warning?></td>
                        <td><?= $mainday->supplier?></td>                            
                        <td><?= $mainday->description?></td>
                        <td><?= $mainday->purchased?></td>
                        <td><?= $mainday->price?></td>
                        <td><?= $mainday->unit?></td>
                        <td><?= $mainday->quantity?></td>
                        <td><?= $mainday->amount?></td>
                    </tr>
                </tfoot>
                <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint_maintenance"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="#" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
         
      </div>
      </div>
      <div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Maintenance Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="mainmonth" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                  <th>Maintenance Date</th>
                  <th>Maintenance Description</th>
                  <th>Supplier</th>
                  <th>Item Description</th>
                  <th>Purchase</th>
                  <th>Price</th>
                  <th>Unit</th>
                  <th>Quantity</th>
                  <th>Amount</th>
              </tr>
              </thead>
                  
                  <tbody>
                  <?php foreach($mains as $main): ?>
                    <tr>
                        <td><?= date('M d, Y - g:i A', strtotime($main->date))?></td>
                        <td><?= $main->warning?></td>
                        <td><?= $main->supplier?></td>                            
                        <td><?= $main->description?></td>
                        <td><?= $main->purchased?></td>
                        <td><?= $main->price?></td>
                        <td><?= $main->unit?></td>
                        <td><?= $main->quantity?></td>
                        <td><?= $main->amount?></td>
                    </tr>
                </tfoot>
                <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint_maintenance"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="#" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
         
      </div>
      </div>
      <div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Yearly Maintenance Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="mainyear" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                  <th>Maintenance Date</th>
                  <th>Maintenance Description</th>
                  <th>Supplier</th>
                  <th>Item Description</th>
                  <th>Purchase</th>
                  <th>Price</th>
                  <th>Unit</th>
                  <th>Quantity</th>
                  <th>Amount</th>
              </tr>
              </thead>
                  
                  <tbody>
                  <?php foreach($mainyears as $mainyear): ?>
                    <tr>
                        <td><?= date('M d, Y - g:i A', strtotime($mainyear->date))?></td>
                        <td><?= $mainyear->warning?></td>
                        <td><?= $mainyear->supplier?></td>                            
                        <td><?= $mainyear->description?></td>
                        <td><?= $mainyear->purchased?></td>
                        <td><?= $mainyear->price?></td>
                        <td><?= $mainyear->unit?></td>
                        <td><?= $mainyear->quantity?></td>
                        <td><?= $mainyear->amount?></td>
                    </tr>
                </tfoot>
                <?php endforeach; ?> 
                  </tbody>
                 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          <div class="box-footer clearfix">
           
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="<?=base_url()."admin/toprint_maintenance"?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <a href="#" target="_blank" type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
              <i class="fa fa-download"></i> Generate PDF
                        </a>
            </div>
          </div>
         
      </div>
      </div>
      <div class="row">
<div class="col-xs-12">
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Yearly Report of Booking and Maintenance</h3>

              <div class="box-tools pull-right">
               
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
            
      <div id="yearly" style="height: 370px; max-width: 1200px; margin: 0px auto;"> </div>
      </div></div> 
      <div class="col-xs-6">
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Report of Booking and Maintenance</h3>

              <div class="box-tools pull-right">
              
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
        
             
      <div id="Monthly" style="height: 370px; max-width: 1200px; margin: 0px auto;"> </div>
      </div></div> 
      <div class="col-xs-6">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Daily Report of Booking and Maintenance</h3>

              <div class="box-tools pull-right">
              
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
        
             
      <div id="daily" style="height: 370px; max-width: 1200px; margin: 0px auto;"> </div>
      </div></div> 
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</form>

<footer class="main-footer">
 <div class="pull-right hidden-xs">
   <b>The Fourcasters</b>
 </div>
 <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation </a>.</strong> All rights
 reserved.
</footer>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("Monthly", {
	animationEnabled: true,
	title:{
		text: "Monthly Report of Booking and Maintenance "
	},	
	axisY: {
		title: "Booking Report",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Maintenance Report",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Booking Report",
		legendText: "Booking",
		showInLegend: true, 
		dataPoints:[
			{ label: "January", y: <?= $jan?> },
			{ label: "February", y:<?= $feb?> },
			{ label: "March", y: <?= $march?> },
			{ label: "April", y: <?= $april?> },
			{ label: "May", y: <?= $may?> },
			{ label: "June", y: <?= $june?> },
      { label: "July", y: <?= $july?> },
      { label: "August", y: <?= $aug?> },
      { label: "September", y: <?= $sep?> },
      { label: "October", y: <?= $oct?> },
      { label: "November", y: <?= $nov?> },
      { label: "December", y: <?= $dec?> }
		]
	},
	{
		type: "column",	
		name: "Maintenance Report",
		legendText: "Maintenance",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
      { label: "January", y: <?= $mjan?> },
			{ label: "February", y:<?= $mfeb?> },
			{ label: "March", y: <?= $mmarch?> },
			{ label: "April", y: <?= $mapril?> },
			{ label: "May", y: <?= $mmay?> },
			{ label: "June", y: <?= $mjune?> },
      { label: "July", y: <?= $mjuly?> },
      { label: "August", y: <?= $maug?> },
      { label: "September", y: <?= $msep?> },
      { label: "October", y: <?= $moct?> },
      { label: "November", y: <?= $mnov?> },
      { label: "December", y: <?= $mdec?> }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

var yearly = new CanvasJS.Chart("yearly", {
	animationEnabled: true,
	title:{
		text: "Yearly Report of Booking and Maintenance "
	},	
	axisY: {
		title: "Booking Report",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Maintenance Report",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Booking Report",
		legendText: "Booking",
		showInLegend: true, 
		dataPoints:[
			{ label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-4;?>", y: <?= $llllastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-3;?>", y: <?= $lllastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-2;?>", y: <?= $llastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-1;?>", y:<?= $lastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y');?>", y: <?= $currentyear?> }
		
		]
	},
	{
		type: "column",	
		name: "Maintenance Report",
		legendText: "Maintenance",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-4;?>", y: <?= $mllllastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-3;?>", y: <?= $mlllastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-2;?>", y: <?= $mllastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y')-1;?>", y:<?= $mlastyear?> },
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('Y');?>", y: <?= $mcurrentyear?> }
		]
	}]
});
yearly.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}
var daily = new CanvasJS.Chart("daily", {
	animationEnabled: true,
	title:{
		text: "Daily Report of Booking and Maintenance "
	},	
	axisY: {
		title: "Booking Report",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "Maintenance Report",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Booking Report",
		legendText: "Booking",
		showInLegend: true, 
		dataPoints:[
			{ label: "<?php date_default_timezone_set('Asia/Manila'); echo date('M d,Y');?>", y: <?= $daily?> }
		
		]
	},
	{
		type: "column",	
		name: "Maintenance Report",
		legendText: "Maintenance",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
      { label: "<?php date_default_timezone_set('Asia/Manila'); echo date('M d,Y');?>", y: <?= $mdaily?> }
		]
	}]
});
daily.render();


}
</script>
<script>
   $(function () {
    $('#example1').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
   $(function () {
    $('#main').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
   $(function () {
    $('#mainmonth').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
   $(function () {
    $('#mainyear').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
   $(function () {
    $('#monthlyy').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
   $(function () {
    $('#yearlyy').DataTable()
    $('#example5').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
