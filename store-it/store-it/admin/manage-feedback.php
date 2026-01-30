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
                    <h4 class="card-title">FEEDBACK LISTS</h4>
            
                  
                    <table class="table table-hover">
                      <thead>
                      <tr> 
                          <th> <span class="f-light f-w-600">Sl No</span></th>
                            <th> <span class="f-light f-w-600">User</span></th>
                        
                     
                            <th> <span class="f-light f-w-600"> Date</span></th>
                            <th> <span class="f-light f-w-600">Feed</span></th>
                       
                            <th> <span class="f-light f-w-600">Product</span></th>
                           
            
                        
                          </tr>
                      </thead>
                      <tbody>


                           
                      <?php 
                $i=0;
                                                $st=$admin->ret("select * from `feedback` inner join `branch` on branch.b_id=feedback.b_id inner join `products` on products.p_id=feedback.p_id");
                                                while($row=$st->fetch(PDO::FETCH_ASSOC)){
                                                    ?>
                                     <tr class="product-removes">
                            <td>
                              <?php echo $i=$i+1; ?>
                          
                            </td>
                            <td> 

                       <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../controller/<?php echo $row['profile']; ?>" alt="laptop"/></div>
                                <p><?php echo $row['bname']; ?></p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light"><?php echo $row['fdate']; ?></p>
                            </td>
                            <td> 
                            
                            <span class="badge badge-light-secondary"><?php echo $row['feed']; ?></span>
                            <td> 


  <div class="product-names">
    <div class="light-product-box"><img class="img-fluid" src="../controller/<?php echo $row['pimage']; ?>" alt="laptop"/></div>
    <p><?php echo $row['pname']; ?></p>
  </div>
</td>
                        
                           
                    
   
   
                      




          
                            
                          </tr>

                          <?php
                        } ?>
               
                      






                      
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