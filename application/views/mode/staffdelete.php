
<div class="content-wrapper">

    <section class="content-header">
      <h1>
        User Priveleges
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'user/userdetails'?>"><i class="fa fa-laptop"></i> Home</a></li>
        <li>User Priveleges</li>
        <li class="active">Delete</li>
      </ol>
    </section>
<div class="row">
<div class="col-md-4">
    
 </div>
    <div class="col-md-4">
        <h1 class="text-center">Delete</h1>
        
        <form method="POST" action="<?=base_url().'user/del/'?>">
            
        <input value="<?=$item->id?>" type="text" name="id" class="form-control" placeholder="Name" disabled> <br> </input>
        
    <input value="<?=$item->fname?>" type="text" name="fname" class="form-control" placeholder="Name" disabled> <br></input>
        
    <input value="<?=$item->mname?>" type="text" name="mname" class="form-control" placeholder="Quantity" disabled> <br></input>

    <input value="<?=$item->lname?>" type="text" name="lname" class="form-control" placeholder="Price" disabled> <br></input>
    <input value="<?=$item->password?>" type="password" name="password" class="form-control" placeholder="Price" disabled> <br></input>
    <input value="<?=$item->email?>" type="text" name="email" class="form-control" placeholder="Price" disabled> <br></input>
    <input value="<?=$item->contact?>" type="text" name="contact" class="form-control" placeholder="Price" disabled> <br></input>
    <input value="<?=$item->gender?>" type="text" name="gender" class="form-control" placeholder="Price" disabled> <br></input>
        
        <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
        <a href="<?=base_url('user/del/'.$item->id)?>" class="btn btn-danger" role="button">
        <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" onlick='Are you sure?'></span>
        Delete</a>

    
        <a href="<?= base_url().'user/userdetails_staff'?>" class="btn btn-danger" role="button"> Back</a>

        </form>
        <br>
       

    </div>
<div class="col-md-3">
</div>
</div>
