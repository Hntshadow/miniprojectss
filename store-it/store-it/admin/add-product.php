<?php include 'navbar.php'; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
        
             
            </div>
            <div class="row">
            



              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ADD PRODUCT</h4>
                  
                    <form class="forms-sample"  method="post" action="../controller/add-product.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="product_name" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Price"  name="price" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Stock</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Stock"  name="stock" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender" name="cid" required="">
                          <option value="" selected disabled>select category</option>
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
                    
                      <div class="form-group">
                        <label for="exampleTextarea1">Product Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="add text" name="desc" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"  name="submit">Submit</button>
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