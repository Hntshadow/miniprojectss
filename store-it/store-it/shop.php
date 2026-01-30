<?php include 'navbar.php'; ?>


        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Product Page</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Shop Page Start  -->
        <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

            
                        <!-- Shop Top Area Start -->
                        <div class="shop-top-bar d-flex">
                        <div class="search-element ">
                                <form action="#" style="border:1px solid gray;border-radius:6px;">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>

                         
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Filter :</p>
                                </div>
                                <!-- Single Wedge End -->
                                <div class="header-bottom-set dropdown">
                                    <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Select Category <i class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">

                                    <?php
                                    $s=$admin->ret("select * from `category`");
                                    while($r=$s->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                              <li><a class="dropdown-item" href="shop.php?cid=<?php echo $r['c_id']; ?>"><?php echo $r['cname']; ?></a></li>

                                        <?php
                                    } ?>
                                  
                                        
                                    </ul>
                                </div>
                                <!-- Single Wedge Start -->
                            </div>
                            <!-- Right Side End -->
                        </div>
                        <!-- Shop Top Area End -->
                        <!-- Shop Bottom Area Start -->
                        <div class="shop-bottom-area">
                            <!-- Tab Content Area Start -->
                            <div class="row">
                                <div class="col">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="shop-grid">
                                            <div class="row mb-n-30px">



                                            
                            <?php


                           if (isset($_GET['cid'])) {
        $cid = $_GET['cid'];
        $stmt = $admin->ret("SELECT * FROM `products` INNER JOIN `category` ON products.c_id = category.c_id WHERE products.c_id='$cid'");
    } else {
        $stmt = $admin->ret("SELECT * FROM `products` INNER JOIN `category` ON products.c_id = category.c_id");
    }

    $count = $stmt->rowCount();
    if ($count == 0) {
        echo '<p style="color:#28a745;text-align:center;">Oops! No Product Found</p>';
    }
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>



<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px product-item">

                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new" style="color:white;"><?php echo $row['cname']; ?></span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-view.php?pid=<?php echo $row['p_id']; ?>" class="image">
                                                                <img src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                                <img class="hover-image" src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['cname']; ?></a></span>
                                                            <h5 class="title product-name">
    <a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?></a>
</h5>

                                                            <span class="price">
                                                            <span class="new">₹<?php echo $row['price']; ?></span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <!-- <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button> -->
                                                           
                                                            <a class="action quickview" data-link-action="quickview" title="Quick view" href="single-view.php?pid=<?php echo $row['p_id']; ?>"><i class="pe-7s-look"></i></a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>



<?php } ?>


                                             
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content Area End -->
                            <!--  Pagination Area Start -->
                         
                            <!--  Pagination Area End -->
                        </div>
                        <!-- Shop Bottom Area End -->
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".search-element input").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $(".product-item").filter(function () {
                $(this).toggle($(this).find(".product-name").text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

        <!-- Shop Page End  -->
        <!-- Footer Area Start -->
        <?php include 'footer.php'; ?>