 <div class="content-wrapper">
    <section class="content-header">
      <h1>Staff Details</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?=base_url().'admin/userdetails'?>">User Accounts</a></li>
          <li><a href="<?=base_url().'admin/userdetails_staff'?>">Staff Details</a></li>
          <li class="active">Edit</li>
        </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Photo</h3>
            </div>

    <form  class="form-horizontal" action="<?=base_url()?>admin/update/<?=$emp->id?>"  method='post'>
      <fieldset>
        <div class="form-group">
          <div class="col-md-4">
            <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$emp->id?>" required="" >
          </div>
        </div>

      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
              <img src="<?= base_url().'images/'.$emp->img ?>" alt="..." class="img-thumbnail">
            </div>
          </div>
      <div>
      <hr/>
      <div class="form-group">
        <label class="col-md-1 control-label" for="upload"></label>  
            <div class="col-md-9">
            <?php echo form_open_multipart('admin/do_upload');?>
            <input class="form-control" type="file" name="img" size="20" >
            </div>
          </div>
          <br/>
            </div>
          </div>
        </div>
    </fieldset>

        <div class="col-md-9">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Personal Information</h3>
            </div>
            <div class="box-body">
          <div class="form-horizontal">
      <fieldset>

      <div class="form-group" >
        <label class="col-md-3 control-label" for ="fname" >First Name</label>  
          <div class="col-md-8">
            <input  value="<?=$emp->fname?>" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
            <?= form_error('fname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-3 control-label" >Middle Name</label>  
          <div class="col-md-8">
            <input  value="<?=$emp->mname?>" name="mname" type="text" placeholder="Middle Name" class="form-control input-md" >
            <?= form_error('mname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-3 control-label" for="textinput">Last Name</label>  
          <div class="col-md-8">
            <input  value="<?=$emp->lname?>" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
            <?= form_error('lname', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div> 

      <div class="form-group">
        <label class="col-md-3 control-label" >Gender</label>
            <div class="col-md-8">
                <select value="<?=$emp->gender?>" name="gender" class="form-control">
                <option value='<?=$emp->gender?>' selected><?=$emp->gender?></option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                </select>
            </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label">Contact</label>  
       <div class="col-md-8">
          <input  value="<?=$emp->contact?>" name="contact" type="text" placeholder="Contact No." class="form-control input-md" required="">
            <?= form_error('contact', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-3 control-label" >Employee Since</label>  
          <div class="col-md-8">
            <input value="<?=$emp->date?>" name="date" type="date" class="form-control input-md"> 
          </div>
      </div>

          </div>
        </div>
      </div>
     </div>
    </fieldset>
    </div> 
    <!-- END OF 1ST ROW -->

    <div class="row">
     <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">User Details</h3>
            </div>
            <div class="box-body">
          <div class="form-horizontal">
      <fieldset>

      <div class="form-group">
        <label class="col-md-4 control-label">Email</label>  
          <div class="col-md-5">
            <input  value="<?=$emp->email?>" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
            <?= form_error('email', '<span class="label label-danger">', '</span>'); ?>  
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>  
          <div class="col-md-5">
            <input  value="<?=$emp->password?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
            <?= form_error('password', '<span class="label label-danger">', '</span>') ?> 
          </div>
      </div> 

      <div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label>  
          <div class="col-md-5">
            <input  value="<?=$emp->repass?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
           <?= form_error('repass', '<span class="label label-danger">', '</span>') ?> 
          </div>
      </div>  

      <div class="form-group">
        <label class="col-md-4 control-label" >Status</label>
          <div class="col-md-5">
            <select  value="<?=$emp->status?>" name="status" class="form-control">
            <option Selected disabled>Unchanged</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" >Privilege</label>
          <div class="col-md-5">
            <select value="<?=$emp->priv?>" name="priv" class="form-control">
            <option Selected disabled>Level <?=$emp->priv?></option>
            <option value="1">(1) Admin</option>
            <option value="2">(2) Delivery Creator</option>
            <option value="3">(3) Truck Management</option>
            <option value="4">(4) Driver/Helper Management</option>
            <option value="5">(5) Customer Management</option>
            
            </select>
          </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
        <div class="col-md-5">
          <button id="button1id" name="submit" type="submit" value="submit" class="btn btn-success">Update</button>
          <a href="<?= base_url().'admin/userdetails_staff'?>" class="btn btn-danger" role="button"> Cancel</a>
        </div>
      </div>

          </div>
        </div>
      </div>
      </fieldset>
     </div>
     <!-- END OF 2ND ROW -->

  </section>
</div>
</form>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
</footer>
