<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Recap Report</h3>

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
                <div id="Hello" style="height: 370px; max-width: 1200px; margin: 0px auto;"> </div>
                <!-- boy ung div=id dat = sa value ng canvasjs.chart na eedit ata value ng var chart palitan nga lang sa baba -->
                  </div>
 
    <script type="text/javascript">
	  window.onload = function () {
      
		var chart = new CanvasJS.Chart("Hello", {
			title: {
        text:"Booking Status - <?php date_default_timezone_set('Asia/Manila'); echo date('F Y'); ?>",
        ontWeight: "bolder",
        fontFamily: "tahoma",        
        fontSize: 28,
        padding: 10   
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
			data: [
			{
				type: "bar",
        color: "#014D65",
				dataPoints: [
          { y: <?=$accept?>, label: "Accepted" },
          { y: <?=$pending?>, label: "Pending" },
          { y: <?=$deny?>, label: "Denied" },
				]
			}
			]
		});

	chart.render();


  var top = new CanvasJS.Chart("topfive", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "State Operating Funds"
	},
	legend:{
		cursor: "pointer",
		itemclick: explodePie
	},
	data: [{
		type: "pie",
		showInLegend: true,
		toolTipContent: "{name}: <strong>{y}%</strong>",
		indexLabel: "{name} - {y}%",
		dataPoints: [
			{ y: 13, name: "School Aid", exploded: true },
			{ y: 20, name: "Medical Aid" },
			{ y: 5, name: "Debt/Capital" },
			{ y: 3, name: "Elected Officials" },
			{ y: 7, name: "University" },
			{ y: 17, name: "Executive" },
			{ y: 22, name: "Other Local Assistance"}
		]
	}]
});
top.render();
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
 
                </div>
              
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              </div>
            </div>