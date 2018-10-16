
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script src="<?//=base_url()?>bs/js/bootstrap.min.js"></script>-->

<!-- Chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script src="<?=base_url()?>js/datatables.min.js"></script>

<script src="<?=base_url()?>dashboard/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>dashboard/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>dashboard/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?=base_url()?>dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>dashboard/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>dashboard/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>dashboard/dist/js/demo.js"></script>
<!-- datatable -->
<script src="<?=base_url()?>dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- PACE -->
<script src="<?=base_url()?>dashboard/bower_components/PACE/pace.min.js"></script>
<link rel="stylesheet" href="<?=base_url()?>dashboard/bower_components/PACE/themes/white/pace-theme-flash.css">
<!-- fullCalendar -->
<script src="<?=base_url()?>dashboard/bower_components/moment/moment.js"></script>
<script src="<?=base_url()?>dashboard/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?=base_url()?>dashboard/bower_components/fullcalendar/dist/gcal.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>