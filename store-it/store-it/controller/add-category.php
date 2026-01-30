<?php

include '../config.php';
$admin=new Admin();


//4. take all the data from the form

if(isset($_POST['button'])){
    $name=$_POST['name'];
   

    $stmt=$admin->cud("INSERT INTO `category`(`cname`) VALUES (' $name')","saved");



    echo "

<script>

alert('Added Success!!');
window.location.href='../admin/view-category.php';


</script>


    ";




}

if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $cid = $_POST['cid'];

    $stmt = $admin->cud("UPDATE `category` SET `cname` = '$name' WHERE `c_id` = '$cid'", "updated");

    echo "
    <script>
        alert('Updated Successfully!');
        window.location.href='../admin/view-category.php';
    </script>
    ";
}



?>