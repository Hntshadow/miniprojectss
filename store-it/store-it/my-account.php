<?php include 'navbar.php'; ?>
        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Account</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active">Account</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- account area start -->
        <div class="account-dashboard pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active" style="color:white">Dashboard</a></li>
                                <li> <a href="#orders"  style="color:white" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                                <!-- <li><a href="#downloads"  style="color:white" data-bs-toggle="tab" class="nav-link">Downloads</a></li>
                                <li><a href="#address" style="color:white" data-bs-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" style="color:white" data-bs-toggle="tab" class="nav-link">Account details</a>
                                </li> -->
                                <li><a href="controller/login.php?role=user" style="color:white" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h4>Dashboard </h4>
                                <p>Welocme! User.</p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h4>Orders</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                                        <th>Order No</th>
                    <th>Order Date</th>
             
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                
<?php 
                                $st=$admin->ret("select * from `order` where `b_id`='$bid'");
                                while($row=$st->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                    <tr>
                                     <td><?php echo $row['order_no']; ?></td>
                                     <td><?php echo $row['order_date']; ?></td>
                                     <td>₹<?php echo $row['grand_total']; ?></td>

                                     <td><span class="badge badge-success" style="color:red;"><?php echo $row['order_status']; ?></span></td>
  
    <td>
                                            <a href="track-order.php?order_no=<?php echo $row['order_no']; ?>" class="btn btn-outline-secondary btn-sm rounded-2" data-tooltip="tooltip" title="Track Order"  style="color:#20c997;"><i class="fas fa-map-marker-alt"></i> Track Order
                                            </a>
                                         
                                        </td>
                                        </tr>
  <?php
                        } ?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="downloads">
                                <h4>Downloads</h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Downloads</th>
                                                <th>Expires</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="danger">Expired</span></td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                            <tr>
                                                <td>Organic - ecommerce html template</td>
                                                <td>Sep 11, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <h5 class="billing-address">Billing address</h5>
                                <a href="#" class="view">Edit</a>
                                <p class="mb-2"><strong>Michael M Hoskins</strong></p>
                                <address>
                                    <span class="mb-1 d-inline-block"><strong>City:</strong> Seattle</span>,
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>State:</strong> Washington(WA)</span>,
                                    <br>
                                    <span class="mb-1 d-inline-block"><strong>ZIP:</strong> 98101</span>,
                                    <br>
                                    <span><strong>Country:</strong> USA</span>
                                </address>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginActive">Log in instead!</a></p>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                        name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                        name="id_gender"> Mrs.</span>
                                                </div> <br>
                                                <div class="default-form-box mb-20">
                                                    <label>First Name</label>
                                                    <input type="text" name="first-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Email</label>
                                                    <input type="text" name="email-name">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Password</label>
                                                    <input type="password" name="user-password">
                                                </div>
                                                <div class="default-form-box mb-20">
                                                    <label>Birthdate</label>
                                                    <input type="date" name="birthday">
                                                </div>
                                                <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                                <br>
                                                <label class="checkbox-default" for="offer">
                                                    <input type="checkbox" id="offer">
                                                    <span>Receive offers from our partners</span>
                                                </label>
                                                <br>
                                                <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                    <input type="checkbox" id="newsletter">
                                                    <span>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                        moment. For that purpose, please find our contact info in the
                                                        legal notice.</em></span>
                                                </label>
                                                <div class="save_button mt-3">
                                                    <button class="btn" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account area start -->
      <?php include 'footer.php'; ?>