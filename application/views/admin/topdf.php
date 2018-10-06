<div class="row">
<h1>Angelogistics Forwarder Corporation</h1>        

          <strong></strong><br>
          103B A Halcon St. Cor Maria Clara<br>
          Quezon City, Philippines<br>
          Phone: (02) 714-1762<br>
          Email: jsanlangustelao@gmail.com
        </address>
      </div>
      <!-- /.col -->
    <br/><br/><br/>
    <!-- Table row -->
    <div class="row">
        <table class="table table-striped">
          <thead>
          <tr>
            <th><strong>Waybill</strong></th>
            <th><strong>Customer</strong></th>
            <th><strong>Date</strong></th>
            <th><strong>Cargo Size</strong></th>
            <th><strong>Destination</strong></th>
            <th><strong>Price</strong></th>
            <th><strong>Status</strong></th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($emps as $emp): ?>
          <tr>
            <td width="11%"><?= $emp->waybill?></td>
            <td width="17.5%"><?= $emp->custname?></td>
            <td><?= $emp->date?></td>
            <td><?= $emp->cargo?></td>
            <td><?= $emp->destination?></td>
            <td><?= $emp->price?></td>
            <td>  <?php if($emp->action==1){ ?>
            <div>
              <strong>Accepted</strong>
            </div>
            <?php }elseif($emp->action==2){ ?>
              <div>
                <strong>Denied</strong>
              </div></p>
            <?php }else{?>
              <div>
                <strong>Pending</strong>
              </div>
            <?php  }?>
            </td>
          </tr>
          <?php endforeach; ?> 
          </tbody>
        </table>
    </div>
      <p class="lead">Total Amount as of <?php date_default_timezone_set('Asia/Manila'); echo date('m/d/y'); ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Total:</th>
              <td>P <strong><?php echo $totalprice;?>.00</strong></td>
            </tr>
          </table>
        </div>
      </div>
