
    <!-- <select value="<?//=$books->helper_name?>" name="helper_name" class="form-control">
            <?php 
              // foreach($trucks as $truck) { 
              //   echo '<option value="'.$truck->fname.' '.$row->lname.'">' .$row->fname.' '. $row->lname.'</option>';
              // }
            ?>

            
            </select> -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">Maintenance Information</h3>
            </div>

            <div class="box-body">  
              <table id="maintenance" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Supplier</th>
                    <th>Description</th>
                    <th>Purchase</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
                <?php foreach($books as $book): ?>
=======
                
>>>>>>> 53e147a97578b9c1edb25d788853018bbba3d68f
                    <tr>
                        <td><?= $mains->id?></td>
                        <td><?= $mains->supplier?></td>        
                        <td><?= $mains->description?></td>
                        <td><?= $mains->purchased?></td>
                        <td><?= $mains->price?></td>
                        <td><?= $mains->unit?></td>
                        <td><?= $mains->quantity?></td>
                        <td><?= $mains->amount?></td>
                        <td></td>
                    </tr>
                    
                </tfoot>
           
                </form>
              </table>
            </div>
            </div>
          </div>
        </div>

    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header"> 
              <h3 class="box-title">History Information</h3>
            </div>

            <!-- CONTENT HERE -->

            </div>
            </div>
          </div>
        </div>
        
    </section>
</div>

</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>