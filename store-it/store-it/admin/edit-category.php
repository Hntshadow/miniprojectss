<?php include 'navbar.php'; ?>


<?php 
$id=$_GET['id'];
$stmt=$admin->ret("select * from `category` where `c_id`='$id'");
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
                    <h4 class="card-title">EDIT CATEGORY</h4>
                
                    <form class="forms-sample"  method="post" action="../controller/add-category.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>





                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"  name="name"  value="<?php echo $row['cname']; ?>"  required>
                      </div>
                  <input type="hidden" name="cid" value="<?php echo $row['c_id']; ?>">
                     
                      <button type="submit" class="btn btn-primary mr-2"  name="edit" >Submit</button>
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