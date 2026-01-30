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
                    <h4 class="card-title">ADD NEW</h4>
         <!--1. link the backend page using form tag -->
                    <form class="forms-sample" method="post" action="../controller/add-branch.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <!--2. keep the input box attributes -->
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Contact No</label>
                        <input type="tel" class="form-control" id="exampleInputPassword4" placeholder="Contact No" name="phone" required>
                      </div>
                     
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" required>
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
               
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" name="location" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Address</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="address" required></textarea>
                      </div>

                      <!--3. give name for button -->
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
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