<?php include 'navbar.php'; ?>


<?php
if(!isset($_SESSION['b_id'])){
    
    echo "<script>
    alert('Please Login');
    window.location.href='login.php';</script>";

}



$order_no=$_GET['order_no'];



?>


<!-- OffCanvas Menu End -->
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Track Order Details</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active">Track Order Details</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->



<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px" id="cart">
    <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        <div class="row">
           


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
                                       
                                                                        <img src="controller/<?php echo $rm['pimage'];; ?>" alt=""
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

                                                            <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!"
                                                                    style="color: #f37a27;">Please contact
                                                                    us</a></p>

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


      
    </div>
</div>
<!-- Cart Area End -->
<!-- Footer Area Start -->
<?php include 'footer.php'; ?>