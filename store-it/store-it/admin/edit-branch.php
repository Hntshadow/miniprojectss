<!-- step 2 copy add branch code and paste it  -->
<?php include 'navbar.php'; ?>



<?php 
$id=$_GET['id'];
$stmt=$admin->ret("select * from `branch` where `b_id`='$id'");
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
                    <h4 class="card-title">EDIT BRANCH</h4>
         <!--1. link the backend page using form tag -->
                    <form class="forms-sample" method="post" action="../controller/add-branch.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <!--2. keep the input box attributes -->
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?php echo $row['bname']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email"  value="<?php echo $row['bemail']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password"  value="<?php echo $row['bpassword']; ?>" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Contact No</label>
                        <input type="tel" class="form-control" id="exampleInputPassword4" placeholder="Phone" name="phone"   value="<?php echo $row['phone']; ?>" required>
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
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" name="location"  value="<?php echo $row['location']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Address</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="address" required>
                        <?php echo $row['address']; ?>
                        </textarea>
                      </div>

                      <input type="hidden" name="bid" value="<?php echo $row['b_id']; ?>">

                      <!--3. give name for button -->
                      <button type="submit" class="btn btn-primary mr-2" name="edit">Submit</button>
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