<?php

include '../config.php';
$admin=new Admin();


//4. take all the data from the form

if(isset($_POST['submit'])){
    $cid=$_POST['cid'];
    $stock=$_POST['stock'];
    $price=$_POST['price'];
    $product_name=$_POST['product_name'];
    $desc=$_POST['desc'];



    $path="uploads/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$path);



    $stmt=$admin->cud("INSERT INTO `products`( `c_id`, `pdesc`, `pimage`, `price`, `stock`,  `pstatus`,`pname`) VALUES ('$cid','$desc','$path','$price','$stock','available','$product_name')","saved");



    echo "

<script>

alert('Added Success!!');
window.location.href='../admin/view-product.php';


</script>


    ";








}



if(isset($_POST['edit'])){
    $cid = $_POST['cid'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $product_name = $_POST['product_name'];
    $desc = $_POST['desc'];
    $pid = $_POST['pid'];

    // Check if a new image is uploaded
    if(!empty($_FILES['img']['name'])){
        $path = "uploads/" . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES['img']['tmp_name'], $path);

        $stmt = $admin->cud("UPDATE `products` SET 
            `c_id` = '$cid', 
            `pdesc` = '$desc', 
            `pimage` = '$path', 
            `price` = '$price', 
            `stock` = '$stock', 
            `pstatus` = 'available', 
            `pname` = '$product_name' 
            WHERE `p_id` = '$pid'", "updated");
    } else {
        // Update without changing the image
        $stmt = $admin->cud("UPDATE `products` SET 
            `c_id` = '$cid', 
            `pdesc` = '$desc', 
            `price` = '$price', 
            `stock` = '$stock', 
            `pstatus` = 'available', 
            `pname` = '$product_name' 
            WHERE `p_id` = '$pid'", "updated");
    }

    echo "
    <script>
        alert('Updated Successfully!');
        window.location.href='../admin/view-product.php';
    </script>
    ";
}

?>