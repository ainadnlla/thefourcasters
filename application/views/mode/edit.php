<div class="content-wrapper">
    <section class="content-header">
      <h1>User Priveleges</h1>
        <ol class="breadcrumb">
          <li><a href="<?=base_url().'user/userdetails'?>"><i class="fa fa-laptop"></i> Home</a></li>
          <li>User Priveleges</li>
          <li class="active">Edit</li>
        </ol>
    </section>

 <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Details</h3>
            </div>

    <form  class="form-horizontal"  action ="<?=base_url()?>user/update/<?=$item->id?>"  method='post'>
<fieldset>

<!-- Text input-->
<!-- Text input-->
<div class="form-group">
 
  <div class="col-md-4">
  <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$item->id?>" required="" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for ="fname" >First Name</label>  
  <div class="col-md-4">
  <input  value="<?=$item->fname?>" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
  <?= form_error('fname', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  
<div class="form-group">
  <label class="col-md-4 control-label" >Middle Name</label>  
  <div class="col-md-4">
  <input  value="<?=$item->mname?>" name="mname" type="text" placeholder="Middle Name" class="form-control input-md" >
  <?= form_error('mname', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <input  value="<?=$item->lname?>" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
  <?= form_error('lname', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  
<div class="form-group">
  <label class="col-md-4 control-label" >Password</label>  
  <div class="col-md-4">
  <input  value="<?=$item->password?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
  <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  
<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label>  
  <div class="col-md-4">
  <input  value="<?=$item->repass?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
  <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  
<div class="form-group">
  <label class="col-md-4 control-label">Email</label>  
  <div class="col-md-4">
  <input  value="<?=$item->email?>" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
  <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  
<div class="form-group">
  <label class="col-md-4 control-label" >Contact No. </label>  
  <div class="col-md-4">
  <input  value="<?=$item->contact?>" name="contact" type="text" placeholder="Product Name" class="form-control input-md" required="">
  <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
  </div>
</div>  

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >Gender</label>
  <div class="col-md-4">
    <select  value="<?=$item->gender?>" name="gender" class="form-control">
    <option value='<?=$item->gender?>' selected><?=$item->gender?></option>
      <option value="M">M</option>
      <option value="F">F</option>
     
    </select>
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="submit" value="submit" class="btn btn-success">Edit</button>
    <a href="<?= base_url().'user/userdetails_staff'?>" class="btn btn-danger" role="button"> Cancel</a>
  </div>
</div>


</fieldset>
</form>
