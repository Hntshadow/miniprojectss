<?php include 'navbar.php'; ?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 Bundle JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="../track.css">
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
             
            </div>
            <div class="row">
       



              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">PAYMENT LISTS</h4>
            
                  
                    <table class="table table-hover">
                      <thead>
                      <tr> 
                          <th> <span class="f-light f-w-600">Sl No</span></th>
                            <th> <span class="f-light f-w-600">User</span></th>
                        
                     
                            <th> <span class="f-light f-w-600">Payment Date</span></th>
                            <th> <span class="f-light f-w-600">Mode</span></th>
                            <th> <span class="f-light f-w-600">Transaction Id</span></th>
                            <th> <span class="f-light f-w-600">Order No</span></th>
                            <th> <span class="f-light f-w-600">Amount</span></th>
                            <th> <span class="f-light f-w-600">Status</span></th>
                        
                            <th> <span class="f-light f-w-600">Action</span></th>
                          </tr>
                      </thead>
                      <tbody>



                     

                           
                <?php 
                $i=0;
                                                $st=$admin->ret("select * from `payment` inner join `branch` on branch.b_id=payment.b_id inner join `order` on order.order_no=payment.order_no");


                                             
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
                              <p class="f-light"><?php echo $row['pdate']; ?></p>
                            </td>
                            <td> 
                              <p class="f-light"><?php echo $row['mode']; ?></p>
                            </td>
                            <td> 
                              <p class="f-light"><?php echo $row['transaction_id']; ?></p>
                            </td>
                            <td> 
                              <p class="f-light"><?php echo $row['order_no']; ?></p>
                            </td>
                            <td> 
                              <p class="f-light">₹<?php echo $row['amount']; ?></p>
                            </td>
                    
                            <td> 
                            
   
   
                            <span class="badge badge-light-warning" style="color:red;"><?php echo $row['pstatus']; ?></span>




          
                            <td> 
                              <div class="product-action">
                                <?php
                                if($row['pstatus']=='pending'){
                                  ?>
                                      <a class="btn btn-outline-success" type="button" data-bs-toggle="tooltip" title="confirm" href="../controller/checkout.php?pid=<?php echo $row['p_id'].'&st=confirmed  '; ?>"><i data-feather="check-circle"></i>Accept</a>
                                      <a class="btn btn-outline-danger" type="button" data-bs-toggle="tooltip" title="reject" href="../controller/checkout.php?pid=<?php echo $row['p_id'].'&st=rejected  '; ?>"><i data-feather="alert-octagon"></i>Reject</a>

                                  <?php
                                } ?>
                          
                          <td>
    <div class="product-action">
        <button class="btn btn-outline-primary btn-lg" type="button"
                data-bs-toggle="modal"
                data-bs-target="#orderDetailsModal<?php echo $row['order_no']; ?>">
            <i data-feather="eye"></i> Order Details
        </button>
    </div>
</td>

<!-- Modal -->
<div class="modal fade" id="orderDetailsModal<?php echo $row['order_no']; ?>" tabindex="-1"
     aria-labelledby="orderDetailsLabel<?php echo $row['order_no']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderDetailsLabel<?php echo $row['order_no']; ?>">
                    Order #<?php echo $row['order_no']; ?> Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
            <main>
                    <div class="cart-page theme-default-margin" id="cart">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <h2 style="margin-bottom:20px;">Track My Orders</h2>

                                    <!-- Cart Table -->
                                    <div class="cart-table">

                                        <div class="container py-5 h-100">
                                            <div class="row d-flex justify-content-center align-items-center h-100">
                                                <div class="col-lg-8 col-xl-12">
                                                    <div class="card border-top border-bottom border-3">
                                                        <div class="card-body p-5">

                                                            <p class="lead fw-bold mb-5" style="color: #f37a27;">Order
                                                                Details</p>

                                                            <?php

                                                            $order_no=$row['order_no'];
                 $stm=$admin->ret("select * from `order` where `order_no`='$order_no'");
                 $row=$stm->fetch(PDO::FETCH_ASSOC); ?>

                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <p class="small text-muted mb-1">Date</p>
                                                                    <p><?php echo $row['order_date']; ?></p>
                                                                </div>
                                                                <div class="col mb-3">
                                                                    <p class="small text-muted mb-1">Order No.</p>
                                                                    <p><?php echo $row['order_no']; ?></p>
                                                                </div>
                                                            </div>

                                                            <div class="mx-n5 px-5 py-4"
                                                                style="background-color: #f2f2f2;">

                                                                <?php

$stm=$admin->ret("select * from  `cart` inner join `products` on cart.p_id=products.p_id  inner join `category` on products.c_id=category.c_id where cart.order_no='$order_no'");
while($rm=$stm->fetch(PDO::FETCH_ASSOC)){
    ?>
                                                                <div class="row">
                                                                    <div class="col-md-8 col-lg-9"
                                                                        style="display:flex;align-items:center;gap:20px;justify-content:flex-start;">
                                                                 
                                                                        <img src="../controller/<?php echo $rm['pimage']; ?>" alt=""
                                                                            style="width:70px;height:80px;border:1px solid black;border-radius:10px;margin:2px;">
                                                                        <p><?php echo $rm['pname']; ?>&nbsp;&nbsp;[<?php echo $rm['qty']; ?>*₹<?php echo $rm['price']; ?>]
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-4 col-lg-3"
                                                                        style="display:flex;align-items:center;gap:20px;justify-content:flex-start;">
                                                                        <p>₹<?php echo $rm['total']; ?></p>
                                                                    </div>
                                                                </div>

                                                                <?php } ?>

                                                            </div>

                                                            <div class="row my-4">
                                                                <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                                                    <p class="lead fw-bold mb-0"
                                                                        style="color: #f37a27;">
                                                                        ₹<?php echo $row['grand_total']; ?></p>
                                                                </div>
                                                            </div>

                                                            <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">
                                                                Tracking Order</p>

                                                            <div class="row">
                                                                <div class="col-lg-12">

                                                                    <div class="horizontal-timeline">

                                                                        <ul
                                                                            class="list-inline items d-flex justify-content-between">


                                                                            <?php
                    if($row['order_status']=='ordered' || $row['order_status']=='pending'){
                      ?>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Ordered</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="margin-right: 8px;">Shipped
                                                                                </p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="margin-right: 8px;">On the
                                                                                    way
                                                                                </p>
                                                                            </li>
                                                                            <li class="list-inline-item items-list text-end"
                                                                                style="margin-right: 8px;">
                                                                                <p style="margin-right: -8px;">Delivered
                                                                                </p>
                                                                            </li>

                                                                            <?php

                    }else  if($row['order_status']=='shipped'){
                      ?>

                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Ordered</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Shipped</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="margin-right: 8px;">On the
                                                                                    way
                                                                                </p>
                                                                            </li>
                                                                            <li class="list-inline-item items-list text-end"
                                                                                style="margin-right: 8px;">
                                                                                <p style="margin-right: -8px;">Delivered
                                                                                </p>
                                                                            </li>
                                                                            <?php

                    }else if($row['order_status']=='on_the_way'){
                      ?>

                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Ordered</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Shipped</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    On the way
                                                                                </p>
                                                                            </li>
                                                                            <li class="list-inline-item items-list text-end"
                                                                                style="margin-right: 8px;">
                                                                                <p style="margin-right: -8px;">Delivered
                                                                                </p>
                                                                            </li>
                                                                            <?php

                    }else  if($row['order_status']=='delivered'){

                      ?>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Ordered</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    Shipped</p
                                                                                    class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                            </li>
                                                                            <li class="list-inline-item items-list">
                                                                                <p class="py-1 px-2 rounded text-white"
                                                                                    style="background-color: #f37a27;">
                                                                                    On the way
                                                                                </p>
                                                                            </li>
                                                                            <li class="list-inline-item items-list text-end"
                                                                                style="background-color: #f37a27;">
                                                                                <p style="margin-right: -8px;">Delivered
                                                                                </p>
                                                                            </li>


                                                                            <?php

                    }
                       ?>

                                                                        </ul>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                    </div>

                                </div>
                            </div>
                        </div>




                    </div>
                </main>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                       
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