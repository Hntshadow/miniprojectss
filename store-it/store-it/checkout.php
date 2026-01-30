<?php include 'navbar.php'; ?>


<?php 
if(isset($_GET['total'])){
    $total = $_GET['total'];
    $order_no = isset($_GET['order_no']) ? $_GET['order_no'] : null;


} else {
    $total = null;
    $order_no = null;
}
?>
<!-- OffCanvas Menu End -->
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Checkout</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- checkout area start -->
<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3>Billing Details</h3>
                    <form action="controller/checkout.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-4">
                                <label>First Name</label>
                                <input type="text" name="fname" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-4">
                                <label>Last Name</label>
                                <input type="text" name="lname" required />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="billing-info mb-4">
                                <label>Address</label>
                                <input class="billing-address" placeholder="House number and street name" type="text"
                                    name="address" required />

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-4">
                                <label>Town / City</label>
                                <input type="text" name="city" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-4">
                                <label>State / County</label>
                                <input type="text" name="state" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-4">
                                <label>Postcode / ZIP</label>
                                <input type="text" name="zip_code" required />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-4">
                                <label>Phone</label>
                                <input type="text" name="phone" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-4">
                                <label>Email Address</label>
                                <input type="text" name="email" />
                            </div>
                        </div>
                    </div>


                    <input type="hidden" name="total" value="<?php echo $total; ?>">




                </div>
            </div>
            <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Product</li>
                                    <li>Total</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>


                                    <?php
        $stm=$admin->ret("select * from `cart` inner join `products` on cart.p_id=products.p_id where cart.b_id='$bid'");
        while($row=$stm->fetch(PDO::FETCH_ASSOC)){
            ?>

                                    <li><span class="order-middle-left"><?php echo $row['pname']; ?> X
                                            <?php echo $row['qty']; ?></span> <span
                                            class="order-price"><?php echo $row['total'];?> </span></li>


                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Shipping</li>
                                    <li>Free shipping</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li>₹<?php echo $total; ?></li>
                                </ul>
                            </div>
                        </div>

                        <style>
                        .small-radio {
                            transform: scale(0.8);
                            margin: 0;
                        }
                        </style>

<div class="payment-method">
    <div class="payment-accordion element-mrg">
        <div id="faq" class="panel-group">

            <!-- UPI Payment Panel -->
            <div class="panel panel-default single-my-account m-0">
                <div class="panel-heading my-account-title">
                    <h4 class="panel-title">
                        <a data-bs-toggle="collapse" href="#my-account-2" aria-expanded="false" class="collapsed">
                            UPI payments
                        </a>
                    </h4>
                </div>
                <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                    <div class="panel-body">
                        <label style="display: flex; align-items: center; gap: 8px;">
                            <input type="radio" class="small-radio" name="mode" value="upi" required>
                            <span>Select UPI</span>
                        </label>
                        <p>Scan the QR code below to make a UPI payment:</p>
                        <img src="qr.jpg" alt="UPI QR Code"
                             style="max-width: 200px; border: 1px solid #ccc; padding: 5px;">

                        <div style="margin-top: 15px;">
                            <label for="transactionId">Enter Transaction ID:</label>
                            <input type="text" id="transactionId" name="transaction_id"
                                   class="form-control" placeholder="e.g. UPI1234567890">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cash on Delivery Panel -->
            <div class="panel panel-default single-my-account m-0">
                <div class="panel-heading my-account-title">
                    <h4 class="panel-title">
                        <a data-bs-toggle="collapse" href="#my-account-3" class="collapsed">
                            Cash on delivery
                        </a>
                    </h4>
                </div>
                <div id="my-account-3" class="panel-collapse collapse" data-bs-parent="#faq">
                    <div class="panel-body">
                        <label style="display: flex; align-items: center; gap: 8px;">
                            <input type="radio" class="small-radio" name="mode" value="cod" required>
                            <span>Cash on Delivery</span>
                        </label>
                        <p style="margin-top: 10px;">
                            You will pay with cash upon delivery of the product.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Optional: Small radio CSS -->
<style>
    .small-radio {
        transform: scale(0.8);
        margin: 0;
    }
</style>

                    </div>
                    <div class="Place-order mt-25">
                        <button  type="submit" class="btn btn-outline-dark" style="background-color:black;color:white;" name="billing">Place Order</button>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>
</div>
<!-- checkout area end -->
<?php include 'footer.php'; ?>