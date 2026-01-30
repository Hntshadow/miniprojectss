<?php include 'navbar.php'; ?>


<?php
  $s=$admin->ret("select * from `order`");
  $c=$s->rowCount();

  $s1=$admin->ret("select * from `payment` ");
  $c1=$s1->rowCount();
  


  
  $s2=$admin->ret("select * from `branch` ");
  $c2=$s2->rowCount();

  
  $s3=$admin->ret("select * from `category` ");
  $c3=$s3->rowCount();

  
  $s4=$admin->ret("select * from `products` ");
  $c4=$s4->rowCount();

  
  $s5=$admin->ret("select * from `feedback` ");
  $c5=$s5->rowCount();
  
  
  
  
  ?>




        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              <div class="col-12">
               
              </div>
            </div>
            <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                
                <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                  <button class="btn bg-white p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1"  aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i><?php echo date('Y-m-d'); ?> </button>
                 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                 
                 
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $c; ?></h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><img src="assets/order.png" alt="" style="width:100px;height:100px;"></div>
                 
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Payments</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $c1; ?></h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><img src="assets/payment.png" alt="" style="width:100px;height:100px;"></div>
                        
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Branches</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $c2; ?></h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><img src="assets/branch.png" alt="" style="width:100px;height:100px;"></div>
                       
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Products</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $c4; ?></h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><img src="assets/product.png" alt="" style="width:100px;height:100px;"></div>
                         
                          </div>
                        </div>
                      </div>


                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Category</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $c3; ?></h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><img src="assets/categiry.png" alt="" style="width:100px;height:100px;"></div>
                      
                          </div>
                        </div>
                      </div>


                      
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Feedback</h5>
                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $c5; ?></h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><img src="assets/feed.png" alt="" style="width:100px;height:100px;"></div>
                    
                          </div>
                        </div>
                      </div>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
      <?php include 'footer.php'; ?>