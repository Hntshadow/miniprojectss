<?php include 'navbar.php'; ?>


<?php 
$id=$_GET['id'];
$stmt=$admin->ret("select * from `products` inner join `category` on category.c_id=products.c_id where `p_id`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>








        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
    
            </div>
            <div class="row">
            



              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">EDIT PRODUCT</h4>
                 
                    <form class="forms-sample"  method="post" action="../controller/add-product.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="product_name"  value="<?php echo $row['pname']; ?>"  required>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Price"  name="price"  value="<?php echo $row['price']; ?>"  required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Stock</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Stock"  name="stock"  value="<?php echo $row['stock']; ?>"  required>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender" name="cid" required="">
                          <option value="<?php echo $row['c_id']; ?>" selected ><?php echo $row['cname']; ?></option>
                   <?php
                   $st=$admin->ret("select * from `category`");
                   while($rm=$st->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <option value="<?php echo $rm['c_id']; ?>"><?php echo $rm['cname']; ?></option>

                    <?php
                   } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Product Images</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <input type="hidden" name="pid" value="<?php echo $row['p_id']; ?>">
                    
                      <div class="form-group">
                        <label for="exampleTextarea1">Product Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="add text" name="desc" required>
                        <?php echo $row['pdesc']; ?>
                        </textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"  name="edit">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        <?php include 'footer.php'; ?>