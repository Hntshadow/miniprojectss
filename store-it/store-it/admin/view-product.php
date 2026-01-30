<?php include 'navbar.php'; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
 
           
            </div>
            <div class="row">
       



              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PRODUCT LISTS</h4>
            
                  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Price</th>
                          <th>Stock</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>



                      <?php

                      $stmt=$admin->ret("SELECT * FROM `products` inner join `category` on category.c_id=products.c_id");
                      $count=$stmt->rowCount();
                      if($count==0){
                        ?>
                        <p>No Data Found!!!</p>

                        <?php
                      }

                      $i=0;
                      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>


                        <tr>
                        <td><?php echo $i=$i+1; ?></td>
                        <td><img src="../controller/<?php echo $row['pimage']; ?>" alt="" style="width:100px;height:100px;border-radius:0;">
                        <br>
                        <span><?php echo $row['pname']; ?></span>
                      </td>
                        <td><?php echo $row['cname']; ?></td>
                        <td>₹<?php echo $row['price']; ?></td>
                        <td class="text-danger"><?php echo $row['stock']; ?><i class="mdi mdi-map"></i></td>


                        <td>
                          <textarea name="" id=""> <?php echo $row['pdesc']; ?></textarea>
                         </td>
                        <td><label class="badge badge-danger"> <?php echo $row['pstatus']; ?></label></td>
                        <td> <a type="button" class="btn btn-danger btn-rounded btn-icon" title="Delete"  href="../controller/delete_product.php?id=<?php echo $row['p_id']; ?>">
                            
                        <br><i class="mdi mdi-delete"></i>
                      </a>

                          <a type="button" class="btn btn-primary btn-rounded btn-icon" title="Edit" href="edit-product.php?id=<?php echo $row['p_id']; ?>">
                            <br>
                            <i class="mdi mdi-grease-pencil"></i>
                      </a>
                        
                        
                        
                        </td>
                      </tr>


<?php
                      }
                      
                      
                      ?>
                      






                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>



           
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
     <?php include 'footer.php'; ?>