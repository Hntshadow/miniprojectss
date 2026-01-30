<?php

include 'config.php';
$admin=new  Admin();

$bid=$_SESSION['b_id'];


if(isset($_GET['cid'])){
    $cart_id=$_GET['cid'];
    $stm=$admin->ret("select * from `cart` where `cart_id`='$cart_id'");
    $row=$stm->fetch(PDO::FETCH_ASSOC);
    $qty=$row['qty']-1;
    $total=$row['price']*$qty;

    $s=$admin->cud("update `cart` set `qty`='$qty' ,`total`='$total' where `cart_id`='$cart_id'","saved");


    $st=$admin->ret("select * from `cart` inner join `products` on products.p_id=cart.p_id inner join `category` on products.c_id=category.c_id  where cart.b_id='$bid' and cart.cstatus='pending'");
    ?>
 <div class="container">
        <h3 class="cart-page-title">Your cart items</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                            $grand_total = 0;
                            $count = $st->rowCount();

                            if ($count == 0) {
                            ?>
                                <div class="empty-cart-area pb-100px pt-100px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cart-heading">
                                                    <h2>Your cart item</h2>
                                                </div>
                                                <div class="empty-text-contant text-center">
                                                    <i class="pe-7s-shopbag"></i>
                                                    <h3>There are no more items in your cart</h3>
                                                    <a class="empty-cart-btn" href="shop.php">
                                                        <i class="fa fa-arrow-left"> </i> Continue shopping
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                while ($rm = $st->fetch(PDO::FETCH_ASSOC)) {
                                    $grand_total += $rm['total'];

                                  
                            ?>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img class="img-responsive ml-15px"
                                                src="controller/<?php echo $rm['pimage']; ?>" alt="" /></a>
                                    </td>
                                    <td class="product-name"><a href="#"><?php echo $rm['pname']; ?></a></td>
                                    <td class="product-price-cart"><span
                                            class="amount">₹<?php echo $rm['price']; ?></span></td>
                                    <td class="product-quantity">
                                        <div style="display:flex;">
                                            <button class="btn btn-secondary" style="width:50px;"
                                                onclick="increment_cart(<?php echo $rm['cart_id']; ?>)">+</button>
                                            <input class="cart-plus-minus-box" type="text" style="width:50px;"
                                                name="qtybutton" value="<?php echo $rm['qty']; ?>"
                                                onchange="decrement_cart(<?php echo $rm['cart_id']; ?>)" />
                                            <button class="btn btn-secondary" style="width:50px;"
                                                onclick="decrement_cart(<?php echo $rm['cart_id']; ?>)">-</button>
                                        </div>

                                    </td>
                                    <td class="product-subtotal">₹<?php echo $rm['total']; ?></td>
                                    <td class="product-remove">

                                        <a href="controller/cart.php?cid=<?php echo $rm['cart_id']; ?>"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                                <?php }} ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="shop.php">Continue Shopping</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-4 col-md-12 ">
                    </div>
                    <div class="col-lg-4 col-md-12 ">
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span>₹<?php echo $grand_total; ?></span></h5>
                           
                            <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                            <a href="checkout.php?total=<?php echo $grand_total; ?>">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
        function increment_cart(cart_id) {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cart").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "increment_cart.php?cid=" + cart_id, true);
            xmlhttp.send();
        }






        function decrement_cart(cart_id) {
      


            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cart").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "decrement_cart.php?cid=" + cart_id, true);
            xmlhttp.send();
        }
        </script>


    </div>

    <?php } ?>