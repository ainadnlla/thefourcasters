 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
   <h1>
     Dashboard
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
     <li class="active">Dashboard</li>
   </ol>
 </section>

 
 <!-- Main content -->
 <section class="content">
 <div class="row">
 <div class="col-md-12">
   <div class="box">
     <div class="box-header with-border">
       <h3 class="box-title">Monthly Recap Report</h3>

       <div class="box-tools pull-right">
         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
         </button>
         <div class="btn-group">
           <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-wrench"></i></button>
           <ul class="dropdown-menu" role="menu">
             <li><a href="#">Action</a></li>
             <li><a href="#">Another action</a></li>
             <li><a href="#">Something else here</a></li>
             <li class="divider"></li>
             <li><a href="#">Separated link</a></li>
           </ul>
         </div>
         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
       </div>
     </div>
     <!-- /.box-header -->
     <div class="box-body">
       <div class="row">
         <div class="col-md-8">
           <p class="text-center">
             <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
           </p>

           <div class="chart">
             <!-- Sales Chart Canvas -->
             <canvas id="salesChart" style="height: 180px;"></canvas>
           </div>
           <!-- /.chart-responsive -->
         </div>
         <!-- /.col -->
         <div class="col-md-4">
           <p class="text-center">
             <strong>Goal Completion</strong>
           </p>

           <div class="progress-group">
             <span class="progress-text">Add Products to Cart</span>
             <span class="progress-number"><b>160</b>/200</span>

             <div class="progress sm">
               <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
             </div>
           </div>
           <!-- /.progress-group -->
           <div class="progress-group">
             <span class="progress-text">Complete Purchase</span>
             <span class="progress-number"><b>310</b>/400</span>

             <div class="progress sm">
               <div class="progress-bar progress-bar-red" style="width: 80%"></div>
             </div>
           </div>
           <!-- /.progress-group -->
           <div class="progress-group">
             <span class="progress-text">Visit Premium Page</span>
             <span class="progress-number"><b>480</b>/800</span>

             <div class="progress sm">
               <div class="progress-bar progress-bar-green" style="width: 80%"></div>
             </div>
           </div>
           <!-- /.progress-group -->
           <div class="progress-group">
             <span class="progress-text">Send Inquiries</span>
             <span class="progress-number"><b>250</b>/500</span>

             <div class="progress sm">
               <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
             </div>
           </div>
           <!-- /.progress-group -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </div>
     <!-- ./box-body -->
     
     <br>
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table  id="example1" class="table no-margin">
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
                  <?php foreach($emps as $emp): ?>
                  <tbody>
                  <tr>
               
                  <td><?= $emp->waybill?></td>
                  <td><?= $emp->custname?></td>
                  <td><?= $emp->date?></td>
                  <td><?= $emp->cargo?></td>
                  <td><?= $emp->destination?></td>
                  <td><?= $emp->price?></td>
                  <td>  <?php if($emp->action==1){ ?>
                          <div class="label label-success">
                            <strong>Accepted</strong>
                          </div>
                        <?php }elseif($emp->action==2){ ?>
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
                  </tbody>
                  <?php endforeach; ?> 
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
           
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              
              <a href="<?=base_url().'admin/booking'?>" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
              
            </div>
            <!-- /.box-footer -->
          </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
 <div class="pull-right hidden-xs">
   <b>The Fourcasters</b>
 </div>
 <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation </a>.</strong> All rights
 reserved.
</footer>
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