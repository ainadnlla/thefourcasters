<div class="content-wrapper">
    <section class="content-header">
      <h1>
        User Priveleges
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'user/userprivelege'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'user/userprivelege'?>">User Management</a></li>
        <li class="active">User Privelege</a></li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Staff Priveleges</h3>
            </div>

            <div class="box-body">  
              <table id="staff" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Staff Full Name</th>
                    <th width="15%">Delivery Approver</th>
                    <th width="15%">Truck Creator</th>
                    <th width="17%">Customer Management</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($emps as $emp): ?>
                    <tr>
                        <td><?= $emp->id?></td>
                        <td><?= $emp->fname?> <?= $emp->mname?> <?= $emp->lname?></td>
                        <td><center><input type="checkbox" name="privelege" value="approver"></center></td>
                        <td><center><input type="checkbox" name="privelege" value="creator"></center></td>
                        <td><center><input type="checkbox" name="privelege" value="managecust"></center></td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
            <center><?php echo $this->pagination->create_links();?></center>
            </div>
          </div>
        </div>        
    </section>
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>

