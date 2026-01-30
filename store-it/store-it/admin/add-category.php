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
                    <h4 class="card-title">ADD CATEGORY</h4>
                 
                    <form class="forms-sample"  method="post" action="../controller/add-category.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>





                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"  name="name" required>
                      </div>
                  
                     
                      <button type="submit" class="btn btn-primary mr-2"  name="button" >Submit</button>
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