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
   <!-- <script>
    window.onload = function () {
      
    var chart = new CanvasJS.Chart("Hello", {
      animationEnabled: true,
      
      title:{
        text:"Booking Status of <?php date_default_timezone_set('Asia/Manila'); echo date('F Y'); ?>"
      },
      axisX:{
        interval: 1
      },
      axisY2:{
        // can edit the color of the grid and that interlace lol
        interlacedColor: "rgba(1,77,101,.2)",
        gridColor: "rgba(1,77,101,.1)",
      },
      data: [{
        type: "bar", 
        //  “line”,“column”,“bar”,“area”,“spline”,“splineArea”,“stepLine”,“scatter”,“bubble”,“stackedColumn”,“stackedBar”,“stackedArea”,“stackedColumn100”,“stackedBar100”“stackedArea100”“pie”“doughnut” types of chart
        name: "companies",
        axisYType: "secondary",
        color: "#014D65",
        dataPoints: [
          //i still don't know how to do this one making data query na base on number of booked which is accepted, denied, pending ggwa ko bagong model for chart lol
          { y: <?=$accept?>, label: "Accepted" },
          { y: <?=$pending?>, label: "Pending" },
          { y: <?=$deny?>, label: "Denied" },
        ]
      }]
    });
    chart.render();
    
    }
    </script> -->
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
	}
	</script>
 
                </div>
              
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              </div>
            </div>