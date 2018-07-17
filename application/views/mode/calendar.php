<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Calendar
	<small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Calendar</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
	<div class="col-md-3">
	  <div class="box box-solid">
		<div class="box-header with-border">
		  <h4 class="box-title">Draggable Events</h4>
		</div>
		<div class="box-body">
		  <!-- the events -->
		  <div id="external-events">
			<div class="external-event bg-green">Lunch</div>
			<div class="external-event bg-yellow">Go home</div>
			<div class="external-event bg-aqua">Do homework</div>
			<div class="external-event bg-light-blue">Work on UI design</div>
			<div class="external-event bg-red">Sleep tight</div>
			<div class="checkbox">
			  <label for="drop-remove">
				<input type="checkbox" id="drop-remove">
				remove after drop
			  </label>
			</div>
		  </div>
		</div>
		<!-- /.box-body -->
	  </div>
	  <!-- /. box -->
	  <div class="box box-solid">
		<div class="box-header with-border">
		  <h3 class="box-title">Create Event</h3>
		</div>
		<div class="box-body">
		  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
			<!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
			<ul class="fc-color-picker" id="color-chooser">
			  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
			  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
			</ul>
		  </div>
		  <!-- /btn-group -->
		  <div class="input-group">
			<input id="new-event" type="text" class="form-control" placeholder="Event Title">

			<div class="input-group-btn">
			  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
			</div>
			<!-- /btn-group -->
		  </div>
		  <!-- /input-group -->
		</div>
	  </div>
	</div>
	<!-- /.col -->
	<div class="col-md-9">
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
  <b>Version</b> 2.4.0
</div>
<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs -->
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <!-- Home tab content -->
  <div class="tab-pane" id="control-sidebar-home-tab">
	<h3 class="control-sidebar-heading">Recent Activity</h3>
	<ul class="control-sidebar-menu">
	  <li>
		<a href="javascript:void(0)">
		  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

		  <div class="menu-info">
			<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

			<p>Will be 23 on April 24th</p>
		  </div>
		</a>
	  </li>
	  <li>
		<a href="javascript:void(0)">
		  <i class="menu-icon fa fa-user bg-yellow"></i>

		  <div class="menu-info">
			<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

			<p>New phone +1(800)555-1234</p>
		  </div>
		</a>
	  </li>
	  <li>
		<a href="javascript:void(0)">
		  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

		  <div class="menu-info">
			<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

			<p>nora@example.com</p>
		  </div>
		</a>
	  </li>
	  <li>
		<a href="javascript:void(0)">
		  <i class="menu-icon fa fa-file-code-o bg-green"></i>

		  <div class="menu-info">
			<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

			<p>Execution time 5 seconds</p>
		  </div>
		</a>
	  </li>
	</ul>
	<!-- /.control-sidebar-menu -->

	<h3 class="control-sidebar-heading">Tasks Progress</h3>
	<ul class="control-sidebar-menu">
	  <li>
		<a href="javascript:void(0)">
		  <h4 class="control-sidebar-subheading">
			Custom Template Design
			<span class="label label-danger pull-right">70%</span>
		  </h4>

		  <div class="progress progress-xxs">
			<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
		  </div>
		</a>
	  </li>
	  <li>
		<a href="javascript:void(0)">
		  <h4 class="control-sidebar-subheading">
			Update Resume
			<span class="label label-success pull-right">95%</span>
		  </h4>

		  <div class="progress progress-xxs">
			<div class="progress-bar progress-bar-success" style="width: 95%"></div>
		  </div>
		</a>
	  </li>
	  <li>
		<a href="javascript:void(0)">
		  <h4 class="control-sidebar-subheading">
			Laravel Integration
			<span class="label label-warning pull-right">50%</span>
		  </h4>

		  <div class="progress progress-xxs">
			<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
		  </div>
		</a>
	  </li>
	  <li>
		<a href="javascript:void(0)">
		  <h4 class="control-sidebar-subheading">
			Back End Framework
			<span class="label label-primary pull-right">68%</span>
		  </h4>

		  <div class="progress progress-xxs">
			<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
		  </div>
		</a>
	  </li>
	</ul>
	<!-- /.control-sidebar-menu -->

  </div>
  <!-- /.tab-pane -->
  <!-- Stats tab content -->
  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
  <!-- /.tab-pane -->
  <!-- Settings tab content -->
  <div class="tab-pane" id="control-sidebar-settings-tab">
	<form method="post">
	  <h3 class="control-sidebar-heading">General Settings</h3>

	  <div class="form-group">
		<label class="control-sidebar-subheading">
		  Report panel usage
		  <input type="checkbox" class="pull-right" checked>
		</label>

		<p>
		  Some information about this general settings option
		</p>
	  </div>
	  <!-- /.form-group -->

	  <div class="form-group">
		<label class="control-sidebar-subheading">
		  Allow mail redirect
		  <input type="checkbox" class="pull-right" checked>
		</label>

		<p>
		  Other sets of options are available
		</p>
	  </div>
	  <!-- /.form-group -->

	  <div class="form-group">
		<label class="control-sidebar-subheading">
		  Expose author name in posts
		  <input type="checkbox" class="pull-right" checked>
		</label>

		<p>
		  Allow the user to show his name in blog posts
		</p>
	  </div>
	  <!-- /.form-group -->

	  <h3 class="control-sidebar-heading">Chat Settings</h3>

	  <div class="form-group">
		<label class="control-sidebar-subheading">
		  Show me as online
		  <input type="checkbox" class="pull-right" checked>
		</label>
	  </div>
	  <!-- /.form-group -->

	  <div class="form-group">
		<label class="control-sidebar-subheading">
		  Turn off notifications
		  <input type="checkbox" class="pull-right">
		</label>
	  </div>
	  <!-- /.form-group -->

	  <div class="form-group">
		<label class="control-sidebar-subheading">
		  Delete chat history
		  <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
		</label>
	  </div>
	  <!-- /.form-group -->
	</form>
  </div>
  <!-- /.tab-pane -->
</div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>