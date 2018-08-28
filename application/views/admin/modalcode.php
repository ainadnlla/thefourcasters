<!-- view -->
<a href="<?= base_url().'customer/view/'.$cust->id?>" class="btn btn-primary" role="button">
<span class="glyphicon glyphicon" aria-hidden="true">Modal</span></a>
<button type="button" class="btn btn-primary" data-toggle="modal" onclick="<?$cust->id;?>" data-target="#modal-info"><span class="glyphicon glyphicon-search" aria-hidden="true"> </span></button>
<a href="<?= base_url().'customer/edit/'.$cust->id?>" class="btn btn-warning" role="button">
<span class="glyphicon glyphicon" aria-hidden="true">Modal</span></a>
<!-- edit -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning"onclick="<?$cust->id?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
<!-- del -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true" name="delete" ></span></button>

   </td>
                    </tr>        
                <?php endforeach; ?> 
                </tfoot>
              </table>
            </div>
                <div class="box-footer">
                <a href="<?=base_url()?>customer/add" class="btn btn-success btn-block btn-sm" role="button">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Customer</a>
                </div>
                 <center><?php echo $this->pagination->create_links();?></center>
            </div>
    </section>
</div>
<!-- delete -->
<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm Delete</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete this user?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Cancel</button>
                <a href="<?=base_url('customer/del/'.$cust->id)?>"  role="button" class="btn btn-outline" >Delete</a>
              </div>
            </div>
          </div>
        </div>
<!-- view -->
<div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">View</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal">
              <div class="box-body">
              <form method="POST" action="<?=base_url().'customer/view/'.$cust->id?>">
         
                <div class="form-group">
                  <label for="id" class="col-sm-4 control-label">ID</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->id?>" type="text" name="id" class="form-control" placeholder="id" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="fname" class="col-sm-4 control-label">Customer/Brokerage</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->name?>" type="text" name="name" class="form-control" placeholder="name" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="fname" class="col-sm-4 control-label">Customer Type</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->cust_type?>" type="text" name="cust_type" class="form-control" placeholder="name" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->email?>" type="text" name="email" class="form-control" placeholder="email" disabled></input>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contact" class="col-sm-4 control-label">Contact No.</label>
                  <div class="col-sm-4">
                  <input value="<?=$cust->contact?>" type="text" name="contact" class="form-control" placeholder="contact" disabled></input>
                  </div>
                </div>
              </div>
              </form>
            </form> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button> 
              </div>
            </div>
          </div>
        </div>
<!-- Edit -->
<div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal"  action = "<?=base_url()?>customer/update/<?=$cust->id?>"  method='post'>
        <fieldset>
            <div class="form-group">
                <div class="col-md-4">
                    <input type="hidden" name="id" type="text" placeholder="ID" class="form-control input-md"value="<?=$cust->id?>" required="" >
                </div>
            </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="name" >Customer/Importer</label>  
            <div class="col-md-4">
                <input  value="<?=$cust->name?>" name="name" type="text" placeholder="Customer/Importer" class="form-control input-md" required="">
                <?= form_error('name', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Customer Type</label>
          <div class="col-md-4">
            <select  value="<?=$cust->cust_type?>" name="cust_type" class="form-control">
            <option value='<?=$cust->cust_type?>' selected><?=$cust->cust_type?></option>
            <option disabled>----------------</option>
            <option Selected disabled="disabled" >Customer Type</option>
            <option value="In-house Brokerage">In-house Brokerage</option>
            <option value="Broker/Agent">Broker/Agent</option>
            <option value="Freight Forwarder">Freight Forwarder</option>
            <option value="Local/Sub-contractor">Local/Sub-contractor</option>
            </select>
          </div>
      </div>


    <div class="form-group">
        <label class="col-md-4 control-label" >Password</label>  
            <div class="col-md-4">
                <input  value="<?=$cust->password?>" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
                <?= form_error('password', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label>  
            <div class="col-md-4">
                <input  value="<?=$cust->repass?>" name="repass" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
                <?= form_error('repass', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label">Email</label>  
            <div class="col-md-4">
                <input  value="<?=$cust->email?>" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
                <?= form_error('email', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>  

    <div class="form-group">
        <label class="col-md-4 control-label" >Contact No.</label>  
            <div class="col-md-4">
                <input  value="<?=$cust->contact?>" name="contact" type="text" placeholder="Product Name" class="form-control input-md" required="">
                <?= form_error('contact', '<span class="label label-danger">', '</span>') ?>  
            </div>
    </div>
              </div>
              <div class="modal-footer">
              <div class="form-group">
        <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                <button role="button" id="button1id" name="submit" value="submit" class="btn btn-outline">Update</button>
            </div>
    </div>
</fieldset>
</form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        