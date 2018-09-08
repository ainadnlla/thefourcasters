<div class="content-wrapper">
    <section class="content-header">
      <h1>
        User Priveleges
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/userprivelege'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'admin/userprivelege'?>">User Management</a></li>
        <li class="active">User Privelege</a></li>
      </ol>
    </section>
    
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Staff Priveleges</h3>
            </div>

            <div class="box-body">  
              <table id="staff" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="10%">Profile</th>
                    <th>Staff Full Name</th>
                    <th width="30%"><center>User Access Level<center></th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($emps as $emp): ?>
                    <tr>
                        <td><?= $emp->id?></td>
                        <td><img src="<?=base_url().'images/'.$emp->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        <td><?= $emp->fname?> <?= $emp->mname?> <?= $emp->lname?></td>
                        <td></td>
                 
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







  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        User Priveleges
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/userprivelege'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?=base_url().'admin/userprivelege'?>">User Management</a></li>
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
                    <th width="5%">ID</th>
                    <th width="10%">Profile</th>
                    <th>Staff Full Name</th>
                    <th width="30%"><center>User Access Level<center></th>
                    <th>Change</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($emps as $emp): ?>
                    <tr>
                        <td><?= $emp->id?></td>
                        <td><img src="<?=base_url().'images/'.$emp->img?>" width = "50px" alt="Image" class="img-thumbnail"></td>
                        <td><?= $emp->fname?> <?= $emp->mname?> <?= $emp->lname?></td>
                        <td></td>
                        <td></td>
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



