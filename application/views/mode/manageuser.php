
<div class="container-fluid">
    <div class="row" >
    <div class="page-content">
    	<div class="row">
		  
          <div class="col-md-12">
          <div class="content-box-large">
            <div class="panel-heading">Staff Management</div>
            <div class="panel-body">
                <table class="table">
                    <tr><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email Address</th><th>Contact Number</th><th>Gender</th></tr>
                    <?php foreach($items as $item): ?>
                        <tr>
                            <td><?= $item->id?></td>
                            <td><?= $item->fname?></td>
                            <td><?= $item->mname?></td>
                            <td><?= $item->lname?></td>
                            <td><?= $item->email?></td>
                            <td><?= $item->contact?></td>
                            <td><?= $item->gender?></td>

                            <td>
                            <a href="<?= base_url().'user/view/'.$item->id?>" class="btn btn-primary" role="button">
                            <span class="glyphicon glyphicon-search" aria-hidden="true">
                            </span></a>

                            <a href="<?= base_url().'user/edit/'.$item->id?>"
                         class="btn btn-warning" role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                            </span></a>
                            <?php $onclick = array('onclick'=>"return confirm('Are you sure?')");?>
                            <a href="<?=base_url('user/delete/'.$item->id)?>" class="btn btn-danger" role="button">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" >
                            </span></a>
                            
                            </td>
                        </tr>
                         
                    <?php endforeach; ?>
                    
                </table>
                <a href="<?=base_url()?>user/add" class="btn btn-success" role="button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                            Add Staff</a>    
            </div>
       
            </div>
        </div>
    </div>
</div> 
</div>


</center>