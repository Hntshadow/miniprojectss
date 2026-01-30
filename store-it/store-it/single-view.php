<?php include 'navbar.php'; ?>

<?php
if(isset($_GET['pid'])){
    $pid=$_GET['pid'];
    $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id where products.p_id='$pid'");

    $row=$stmt->fetch(PDO::FETCH_ASSOC);


    // $stm=$admin->ret("select * from `feedback` inner join `branch` on branch.b_id=feedback.b_id where `p_id`='$pid' ");
    // $count=$stm->rowCount();
    // $ratings=0;
    // while($r=$stm->fetch(PDO::FETCH_ASSOC)){
    //     $ratings=$ratings+$r['rating'];

    // }

    // if ($count != 0) {
    //     $avg_ratings = $ratings / $count;
    // } else {
    //     $avg_ratings = 0; // Default value when count is zero
    // }
    

}
?>
        <!-- OffCanvas Menu End -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Single Product</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="controller/<?php echo $row['pimage']; ?>"  alt="">
                                    <a class="venobox full-preview" data-gall="myGallery" href="controller/<?php echo $row['pimage']; ?>">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                              
                            </div>
                        </div>
                        <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">


                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="controller/<?php echo $row['pimage']; ?>"  alt="">
                                </div>
                               
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content ml-25px">
                            <h2><?php echo $row['pname']; ?></h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">₹<?php echo $row['price']; ?></li>
                                </ul>
                            </div>
                         
                            <p class="mt-30px"><?php echo $row['pdesc']; ?></p>
                           
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><?php echo $row['cname']; ?> </a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <form action="controller/cart.php" method="post">
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qty" value="1" />
                                </div>


                                <?php if(isset($_SESSION['b_id'])) { ?>
       
       <input type="hidden" name="pid" value="<?php echo $row['p_id']; ?>">
       <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
       <input type="hidden" name="bid" value="<?php echo $_SESSION['b_id']; ?>">

       <?php if($row['stock'] == 0) { ?>

           <div class="pro-details-cart" style="background-color:red;color:white;">
                                    <button class="add-cart"> Out of Stock</button>
                                </div>
       <?php } else { ?>

        <div class="pro-details-cart">
                                    <button type="submit" class="add-cart" name="add"> Add To
                                        Purchase</button>
                                </div>
       
       <?php } ?>
   </form>
<?php } else { ?>

    <div class="pro-details-cart">
                                    <a class="add-cart" href="login.php"> Add To
                                        Purchase</a>
                                </div>


 
<?php } ?>
                              
                              
                             
                            </div>
                        </div>
                        <!-- product details description area start -->
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                              
                                <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                                <button data-bs-toggle="tab" data-bs-target="#des-details3">Reviews</button>
                            </div>
                            <div class="tab-content description-review-bottom">
                               
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <p>
                                        <?php echo $row['pdesc']; ?>
                                        </p>
                                    </div>
                                </div>
                                <div id="des-details3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="review-wrapper">

                                            <?php 
            $stms = $admin->ret("SELECT * FROM `feedback` INNER JOIN `branch` ON branch.b_id=feedback.b_id WHERE `p_id`='$pid' ");
            $count = $stms->rowCount();
            
            if ($count == 0) {
                echo '<p style="color:red;">No Reviews found!!!</p>';
            }
            
            while ($rms = $stms->fetch(PDO::FETCH_ASSOC)) {

                ?>
                                                <div class="single-review">
                                                    <div class="review-img">
                                                        <img src="controller/<?php echo $rms['profile']; ?>" alt="" />
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4><?php echo $rms['bname']; ?></h4>
                                                                </div>
                                                             
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>
                                                            <?php echo $rms['feed']; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
<?php } ?>



                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="ratting-form-wrapper pl-50">
                                                <h3>Add a Review</h3>
                                                <div class="ratting-form">
                                                    <form action="controller/review.php" method="post">
                                                     
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style">
                                                                    <input placeholder="Name" type="text" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style">
                                                                    <input placeholder="Email" type="email" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="rating-form-style form-submit">
                                                                    <textarea name="feed" placeholder="Message" required></textarea>


                                                                    <?php 
                                                                    if(isset($_SESSION['b_id'])){
                                                                        ?>
                                                                        <input type="hidden" name="pid" value="<?php echo $row['p_id']; ?>">

                                                                        <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                                                                                 <button class="btn btn-primary btn-hover-color-primary " style="color:white;" type="submit" 
                                                                                 name="submit" value="Submit">Submit</button>
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                                 <button class="btn btn-primary btn-hover-color-primary " style="color:white;" type="submit" value="Submit">Sign In</button>

                                                                        <?php
                                                                    } ?>
                                                           
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details description area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area Start -->
        <div class="product-area related-product">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center m-0">
                            <h2 class="title">Related Products</h2>
                
                        </div>
                    </div>
                </div>
                <!-- Section Title & Tab End -->
                <div class="row">
                    <div class="col">
                        <div class="new-product-slider swiper-container slider-nav-style-1">
                            <div class="swiper-wrapper">



                            
                                            
                            <?php
                            $stmt=$admin->ret("select * from `products` inner join `category` on products.c_id=category.c_id ");
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>

                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
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
                                                            <h5 class="title"><a href="single-view.php?pid=<?php echo $row['p_id']; ?>"><?php echo $row['pname']; ?>
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">₹<?php echo $row['price']; ?></span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                           
                                                            <a class="action quickview" data-link-action="quickview" title="Quick view" href="single-view.php?pid=<?php echo $row['p_id']; ?>"><i class="pe-7s-look"></i></a>
                                                           
                                                        </div>
                                                    </div>
                                </div>
<?php } ?>

                              
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
        <!-- Product Area End -->
        <?php include 'footer.php'; ?>