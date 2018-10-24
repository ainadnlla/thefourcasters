<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Calendar
	<small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Calendar</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
	
	<div class="col-md-12">
	  <div class="box box-primary">
		<div class="box-body no-padding">
		  <!-- THE CALENDAR -->
		  <div id="calendar"></div>
		</div>
		<!-- /.box-body -->
	  </div>
	  <!-- /. box -->
	</div>
	<!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
<div class="pull-right hidden-xs">
  <b>The Fourcasters</b>
</div>
<strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
reserved.
</footer>

<script>
 $(document).ready(function() {
    $('#calendar').fullCalendar({
			header    : {
        left  : 'prev,next, today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay,listMonth'
      },
      buttonText: {
        today: 'Today',
        month: 'Month',
        week : 'Week',
        day  : 'Day',
				listMonth : 'List'
      },
			eventSources: [
         {
              backgroundColor: '#0073b7',
              borderColor    : '#0073b7',
            events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>admin/get_events', 
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix(),
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
         },
     ]
    });
});
</script>