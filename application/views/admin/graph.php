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
   <script>
    window.onload = function () {
      
    var chart = new CanvasJS.Chart("Hello", {
      animationEnabled: true,
      
      title:{
        text:"Total Number of Booking"
      },
      axisX:{
        interval: 1
      },
      axisY2:{
        // can edit the color of the grid and that interlace lol
        interlacedColor: "rgba(1,77,101,.2)",
        gridColor: "rgba(1,77,101,.1)",
        title: "On the Current Month"
      },
      data: [{
        type: "bar", 
        //  “line”,“column”,“bar”,“area”,“spline”,“splineArea”,“stepLine”,“scatter”,“bubble”,“stackedColumn”,“stackedBar”,“stackedArea”,“stackedColumn100”,“stackedBar100”“stackedArea100”“pie”“doughnut” types of chart
        name: "companies",
        axisYType: "secondary",
        color: "#014D65",
        dataPoints: [
          //i still don't know how to do this one making data query na base on number of booked which is accepted, denied, pending ggwa ko bagong model for chart lol
          { y: 3, label: "Sweden" },
          { y: 7, label: "Taiwan" },
          { y: 5, label: "Russia" },
          { y: 9, label: "Spain" },
          { y: 7, label: "Brazil" },
          { y: 7, label: "India" },
          { y: 9, label: "Italy" },
          { y: 8, label: "Australia" },
          { y: 11, label: "Canada" },
          { y: 15, label: "South Korea" },
          { y: 12, label: "Netherlands" },
          { y: 15, label: "Switzerland" },
          { y: 25, label: "Britain" },
          { y: 28, label: "Germany" },
          { y: 29, label: "France" },
          { y: 52, label: "Japan" },
          { y: 103, label: "China" },
          { y: 134, label: "US" }
        ]
      }]
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