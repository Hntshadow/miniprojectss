<?php include 'navbar.php'; ?>
        <!-- OffCanvas Menu End -->
        <!-- Thank You area start -->
        <div class="thank-you-area">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="inner_complated">
                            <div class="img_cmpted"><img src="assets/images/icons/cmpted_logo.png" alt=""></div>
                            <p class="dsc_cmpted">Your Order Has Been Placed Successfully.</p>
                            <div class="btn_cmpted">
                                <a href="shop.php" class="shop-btn" title="Go To Shop">Continue Shopping </a>
                            </div>
                        </div>
                        <div class="main_quickorder text-align-center">
                            <h3 class="title">Your order number is: <b><?php echo htmlspecialchars($_GET['order_no']); ?></b></h3>
                            <div class="cntct typewriter-effect"><span class="call_desk"><a href="tel:+01234567890" id="typewriter_num">We appreciate your purchase and will process your order soon.</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php include 'footer.php'; ?>