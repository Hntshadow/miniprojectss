<?php include 'navbar.php'; ?>


<!-- step 1 clean the page,keep one row in table ,remove other -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
      
             
            </div>
            <div class="row">
       



              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">BRANCH DETAILS</h4>
            
                  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Branch</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Location</th>
                          <th>Address</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>



                      <?php

                      $stmt=$admin->ret("SELECT * FROM `branch`");
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
                        <td><img src="../controller/<?php echo $row['profile']; ?>" alt="" style="width:100px;height:100px;border-radius:0;">
                        <br>
                        <span><?php echo $row['bname']; ?></span>
                      </td>
                        <td><?php echo $row['bemail']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td class="text-danger"><?php echo $row['location']; ?><i class="mdi mdi-map"></i></td>


                        <td>
                          <textarea name="" id=""> <?php echo $row['address']; ?></textarea>
                         </td>
                        <td><label class="badge badge-danger"> <?php echo $row['status']; ?></label></td>
                        <td> 
                     
                          <a type="button" class="btn btn-danger btn-rounded btn-icon" title="Delete" href="../controller/delete_branch.php?id=<?php echo $row['b_id']; ?>">
                            <br>

                            <i class="mdi mdi-delete" ></i>
                      </a>
                    <!-- step1 create and link page -->

                          <a type="button" class="btn btn-primary btn-rounded btn-icon" title="Edit" href="edit-branch.php?id=<?php echo $row['b_id']; ?>">
                           <br> <i class="mdi mdi-grease-pencil"></i>
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