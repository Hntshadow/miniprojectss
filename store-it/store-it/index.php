<?php include 'navbar.php'; ?>

        <!-- OffCanvas Menu End -->
        <!-- Hero/Intro Slider Start -->
        <div class="section ">
            <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="assets/images/hero/bg/hero-bg-1.webp">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category" style="color:black;">Welcome To STORE IT</span>
                                        <h2 class="title-1" style="color:black;">Your Home <br>
                                        Smart Devices & <br>
                                         Best Solution </h2>
                                        <a href="shop.php" class="btn btn-primary text-capitalize" style="color:black;border:1px solid black;">Shop All Devices</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="assets/images/hero/inner-img/hero-1-1.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="assets/images/hero/bg/hero-bg-1.webp">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category" style="color:black;">Welcome To STORE IT</span>
                                        <h2 class="title-1" style="color:black;">Your Home <br>
                                        Smart Devices & <br>
                                         Best Solution </h2>
                                        <a href="shop.php" class="btn btn-primary text-capitalize" style="color:black;border:1px solid black;;">Shop All Devices</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="assets/images/hero/inner-img/hero-1-2.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- Hero/Intro Slider End -->
        <!-- Banner Area Start -->
        <div class="banner-area style-one pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-banner nth-child-1">
                            <img src="assets/images/banner/3.webp" alt="">
                            <div class="banner-content nth-child-1">
                                <h3 class="title" >Smart Watch For <br>
                                Your Hand</h3>
                                <span class="category">From ₹1229.00</span>
                                <a href="shop.php" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-banner nth-child-2 mb-30px mb-lm-30px mt-lm-30px ">
                            <img src="assets/images/banner/4.webp" alt="">
                            <div class="banner-content nth-child-2">
                                <h3 class="title">Headphones</h3>
                                <span class="category">From ₹5595.00</span>
                                <a href="shop.php" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="single-banner nth-child-2">
                            <img src="assets/images/banner/5.webp" alt="">
                            <div class="banner-content nth-child-3">
                                <h3 class="title">Smartphone</h3>
                                <span class="category">From ₹12000.00</span>
                                <a href="shop.php" class="shop-link"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Product Area Start -->
        <div class="product-area pb-100px">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <!-- Tab Start -->
                        <div class="tab-slider d-md-flex justify-content-md-between align-items-md-center">
                            <ul class="product-tab-nav nav justify-content-start align-items-center">
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#newarrivals">New Arrivals</button>
                                </li>
                                <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#toprated">Top Rated</button>
                                </li>
                                <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured">Featured</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="tab-content mt-60px">
                            <!-- 1st tab start -->
                            <div class="tab-pane fade show active" id="newarrivals">
                                <div class="row mb-n-30px">
                                <?php
                            $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id ORDER BY RAND() LIMIT 8");
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>



                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new" style="color:white"><?php echo $row['cname']; ?></span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-view.php?pid=<?php echo $row['p_id']; ?>" class="image">
                                                                <img src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                                <img class="hover-image" src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['cname']; ?></a></span>
                                                            <h5 class="title"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?>
                                                                </a>
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
                            <!-- 1st tab end -->
                            <!-- 2nd tab start -->
                            <div class="tab-pane fade" id="toprated">
                                <div class="row">
                                <?php
                            $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id ORDER BY RAND() LIMIT 8");
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>



                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new"><?php echo $row['cname']; ?></span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-view.php?pid=<?php echo $row['p_id']; ?>" class="image">
                                                                <img src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                                <img class="hover-image" src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['cname']; ?></a></span>
                                                            <h5 class="title"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?>
                                                                </a>
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
                            <!-- 2nd tab end -->
                            <!-- 3rd tab start -->
                            <div class="tab-pane fade" id="featured">
                                <div class="row">
                                <?php
                            $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id ORDER BY RAND() LIMIT 8");
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>



                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new"  style="color:white"><?php echo $row['cname']; ?></span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-view.php?pid=<?php echo $row['p_id']; ?>" class="image">
                                                                <img src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                                <img class="hover-image" src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['cname']; ?></a></span>
                                                            <h5 class="title"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?>
                                                                </a>
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
                            <!-- 3rd tab end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
        <!-- Fashion Area Start -->
        <div class="fashion-area" data-bg-image="assets/images/fashion/fashion-bg.webp">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 text-center">
                        <h2 class="title" style="color:black;"> <span>Smart Fashion</span> With Smart Devices </h2>
                        <a href="shop.php" class="btn btn-primary text-capitalize m-auto" style="color:black;border:1px solid black;">Shop All Devices</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fashion Area End -->
        <!-- Feature product area start -->
        <div class="feature-product-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Featured Offers</h2>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                            $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id  LIMIT 1");
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>



<div class="col-xl-6 col-lg-6 mb-md-35px mb-lm-35px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new" style="color:white"><?php echo $row['cname']; ?></span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-view.php?pid=<?php echo $row['p_id']; ?>" class="image">
                                                                <img src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                                <img class="hover-image" src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['cname']; ?></a></span>
                                                            <h5 class="title"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?>
                                                                </a>
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

<?php
                            $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id ORDER BY RAND() LIMIT 1");
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>



<div class="col-xl-6 col-lg-6">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new" style="color:white"><?php echo $row['cname']; ?></span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-view.php?pid=<?php echo $row['p_id']; ?>" class="image">
                                                                <img src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                                <img class="hover-image" src="controller/<?php echo $row['pimage']; ?>" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['cname']; ?></a></span>
                                                            <h5 class="title"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?>
                                                                </a>
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
        <!-- Feature product area End -->
        <!-- Testimonial area start -->
        <div class="trstimonial-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center m-0">
                    <h2 class="title">Branch Feedback</h2>
                    <p>Here’s what our branches say about using Store It for electronics procurement.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Swiper -->
                <div class="swiper-container content-top slider-nav-style-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>Store It has streamlined our ordering process! We now get the required electronics much faster with full visibility on order status. The platform is smooth and easy to use.</p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <img class="img-responsive" src="assets/images/testimonial/1.png" alt="">
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Neha Kapoor<span>Branch Manager – Delhi</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>The admin dashboard makes it so easy to track all orders and manage inventory. We’ve saved time and reduced errors significantly after shifting to Store It.</p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <img class="img-responsive" src="assets/images/testimonial/2.png" alt="">
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Ravi Shankar<span>Admin – Head Office</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-inner">
                                <div class="testi-content">
                                    <p>I appreciate how seamless and intuitive the Store It interface is. It helps us focus more on branch operations and less on procurement headaches.</p>
                                </div>
                                <div class="testi-author">
                                    <div class="author-image">
                                        <img class="img-responsive" src="assets/images/testimonial/3.png" alt="">
                                    </div>
                                    <div class="author-name">
                                        <h4 class="name">Ayesha Khan<span>Branch Manager – Bangalore</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Testimonial area end-->
        <!-- Brand area start -->
        <div class="brand-area pt-100px pb-100px">
            <div class="container">
                <div class="brand-slider swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="assets/images/partner/1.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="assets/images/partner/2.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="assets/images/partner/3.png" alt="" /></a>
                        </div>
                        <div class="swiper-slide brand-slider-item text-center">
                            <a href="#"><img class=" img-fluid" src="assets/images/partner/4.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand area end -->
        <!-- Blog area start from here -->
        <div class="main-blog-area pb-100px pt-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-30px0px">
                    <h2 class="title">Store It Blog</h2>
                    <p>Explore the latest updates and insights from our procurement and tech team</p>
                </div>
            </div>
        </div>
        <!-- section title end -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 mb-xs-30px">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/1.webp" class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date line-height-1">
                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 05, Apr 2025</span>
                            <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Store It Admin</a></span>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">New Approval System Now Live for Branch Orders</a></h5>
                        <p>We’ve introduced a smarter way for admins to manage branch electronics requests more efficiently and transparently.</p>
                        <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
            <div class="col-lg-6 col-sm-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/2.webp" class="img-responsive w-100" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date line-height-1">
                            <span class="blog-date"><i class="fa fa-calendar" aria-hidden="true"></i> 28, Mar 2025</span>
                            <span><a class="blog-author" href="blog-grid.html"><i class="fa fa-user" aria-hidden="true"></i> Tech Team</a></span>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Top Electronics Picks for Branch Efficiency</a></h5>
                        <p>Check out our curated list of high-demand electronics tools boosting productivity across Store It branches this month.</p>
                        <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More</a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
        </div>
    </div>
</div>

        <!-- Blog area end here -->
    <?php include 'footer.php'; ?>