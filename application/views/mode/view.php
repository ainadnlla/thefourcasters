 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Priveleges
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'user/manageuser'?>"><i class="fa fa-laptop"></i> Home</a></li>
        <li>User Priveleges</li>
        <li class="active">View</li>
      </ol>
    </section>
    <div class="container-fluid">
<div class="row">
<div class="col-md-3">
    
 </div>
    <div class="col-md-5">
        <h1 class="text-center">View</h1>
        
        <form method="POST" action="<?=base_url().'user/view/   '?>">
            
        <input value="<?=$item->id?>" type="text" name="id" class="form-control" placeholder="id" disabled> <br> </input>
            
        <input value="<?=$item->fname?>" type="text" name="fname" class="form-control" placeholder="fname" disabled> <br></input>
            
        <input value="<?=$item->mname?>" type="text" name="mname" class="form-control" placeholder="mname" disabled> <br></input>

        <input value="<?=$item->lname?>" type="text" name="lname" class="form-control" placeholder="lname" disabled> <br></input>
        <input value="<?=$item->password?>" type="password" name="password" class="form-control" placeholder="password" disabled> <br></input>
        <input value="<?=$item->email?>" type="text" name="email" class="form-control" placeholder="email" disabled> <br></input>
        <input value="<?=$item->contact?>" type="text" name="contact" class="form-control" placeholder="contact" disabled> <br></input>
        <input value="<?=$item->gender?>" type="text" name="gender" class="form-control" placeholder="gender" disabled> <br></input>
            
        
        
    
        <a href="<?= base_url().'user/manageuser'?>" class="btn btn-danger" role="button"> Back</a>

        </form>
        <br>
       

    </div>

</div>
</div>