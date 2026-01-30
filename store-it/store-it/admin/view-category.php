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
                    <h4 class="card-title">CATEGORY LISTS</h4>
            
                  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category Name</th>
                          
                       
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>



                      <?php

                      $stmt=$admin->ret("SELECT * FROM `category`");
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
                        
                       
                    
                      </td>
                      <td>
                      <span><?php echo $row['cname']; ?></span>
                      </td>
                       
                    
                        <td> <a type="button" class="btn btn-danger btn-rounded btn-icon" title="Delete" href="../controller/delete_category.php?id=<?php echo $row['c_id']; ?>">
                        <br> <i class="mdi mdi-delete"></i>
                      </a>

                          <a type="button" class="btn btn-primary btn-rounded btn-icon" title="Edit" href="edit-category.php?id=<?php echo $row['c_id'];?>">
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