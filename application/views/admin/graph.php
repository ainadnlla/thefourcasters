<div class="row">
  <div class="col-md-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-warning"></i>
          <h3 class="box-title">Truck Maintenance Record</h3>
					<div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>

      </div>
      <!-- /.box-header -->
			<div class="box-body">
        <div class="row">
          <div class="col-md-12">
						<div id="topfive" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
		  		</div>          
				</div>
				<!-- /.col -->
    	</div>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->

  <div class="col-md-6">
    <div class="box box-default">
      <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>
        	<h3 class="box-title">Monthly Recap Report</h3>
					<div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
      </div>
            <!-- /.box-header -->
        <div class="box-body">
        	<div class="row">
          	<div class="col-md-12">           
            	<!-- For getting the chartContainer/to show the graph which is div id=Hello -->
              <div id="Hello" style="height: 370px; max-width: 1200px; margin: 0px auto;"> </div>
              <!-- boy ung div=id dat = sa value ng canvasjs.chart na eedit ata value ng var chart palitan nga lang sa baba -->
            </div>
					</div>    
    		</div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        	<h3 class="box-title">Longest & Shortest Maintenance Time</h3>
          	<div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">  
                </div> 
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">           
                <!-- For getting the chartContainer/to show the graph which is div id=Hello -->
                <div id="longest" style="height: 370px; max-width: 1200px; margin: 0px auto;"> </div>
                <!-- boy ung div=id dat = sa value ng canvasjs.chart na eedit ata value ng var chart palitan nga lang sa baba -->
                </div>
							</div>    
        		</div>
      	<!-- /.col -->
      		</div>
      <!-- /.row -->
  	</div>
</div>

<!-- BOOKING BAR GRAPH -->
<script type="text/javascript">
window.onload = function () {      
	var chart = new CanvasJS.Chart("Hello", {
	exportEnabled: true,
	animationEnabled: true,
		title: {
      text:"Booking Status - <?php date_default_timezone_set('Asia/Manila'); echo date('F Y'); ?>",

		},
		axisY: {
			labelFontSize: 12,
			labelFontColor: "black",
      gridColor: "#F0F8FF",
      interlacedColor: "#F0F8FF" 
		},
		axisX: {
			labelAngle: -30
		},
		data: [{
			type: "bar",
      color: "#014D65",
			dataPoints: [
        { y: <?=$accept?>, label: "Accepted" },
        { y: <?=$pending?>, label: "Pending" },
        { y: <?=$deny?>, label: "Denied" },
			]
		}]
	});
chart.render();

// MOST MAINTENANCE RECORD
  var top = new CanvasJS.Chart("topfive", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Most Maintenance Record"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}</strong>",
		indexLabel: "Plate No.: {name} - {y} Records",
		dataPoints: [
			{ y: <?php foreach($first as $first):?><?= $first->total?>, name: "<?= $first->plate_no?><?php endforeach; ?>" },
			{ y: <?php foreach($second as $second):?><?= $second->total?>, name: "<?= $second->plate_no?><?php endforeach; ?>" },
			{ y: <?php foreach($third as $third):?><?= $third->total?>, name: "<?= $third->plate_no?><?php endforeach; ?>" },
			{ y: <?php foreach($fourth as $fourth):?><?= $fourth->total?>, name: "<?= $fourth->plate_no?><?php endforeach; ?>" },
			{ y: <?php foreach($fifth as $fifth):?><?= $fifth->total?>, name: "<?= $fifth->plate_no?><?php endforeach; ?>" }
		]
	}]
});
top.render();

// LONGEST & SHORTEST MAINTENANCE TIME
var longest = new CanvasJS.Chart("longest", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Longest and Shortest Maintenance Time"
	},
	axisX:{
		includeZero: false,
		axisXIndex: 1,
	},
	axisY:{
		includeZero: false,
		title: "Maintenance Days",
	},
	data: [{        
		type: "line",     
		lineThickness: 4,
		dataPoints: [
			{ x: 1, y: <?php echo $days5->format('%a');?>, indexLabel: "<?php echo $warning5->plate_no?>" },
			{ x: 2, y: <?php echo $days4->format('%a');?>, indexLabel: "<?php echo $warning4->plate_no?>" },
			{ x: 3, y: <?php echo $days3->format('%a');?>, indexLabel: "<?php echo $warning3->plate_no?>" },
			{ x: 4, y: <?php echo $days2->format('%a');?>, indexLabel: "<?php echo $warning2->plate_no?>" },
			{ x: 5, y: <?php echo $days->format('%a');?>, indexLabel: "<?php echo $warning->plate_no?>", markerColor: "red", markerType: "triangle" },
			// { y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
			]
		},
		{
			type: "line",       
			color: "#ff4242",
			lineThickness: 4,
			dataPoints: [
			{ x: 1, y: <?php echo $days10->format('%a');?>, indexLabel: "<?php echo $warning10->plate_no?>" },
			{ x: 2, y: <?php echo $days9->format('%a');?>, indexLabel: "<?php echo $warning9->plate_no?>" },
			{ x: 3, y: <?php echo $days8->format('%a');?>, indexLabel: "<?php echo $warning8->plate_no?>" },
			{ x: 4, y: <?php echo $days7->format('%a');?>, indexLabel: "<?php echo $warning7->plate_no?>" },
			{ x: 5, y: <?php echo $days6->format('%a');?>, indexLabel: "<?php echo $warning6->plate_no?>", markerColor: "DarkSlateGrey", markerType: "cross" },
			]
	}]
});
longest.render();

}

function explodePie (e) {
	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
	} else {
		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
	}
	e.top.render();
}

</script>