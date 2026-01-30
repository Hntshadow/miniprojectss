<?php
include '../config.php';
$admin=new Admin();



if (isset($_POST['add'])) {

    $pid = $_POST['pid'];
    $bid = $_POST['bid'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];


    $total = (int)$price * (int)$qty; // Correctly calculate the total



    $stm=$admin->ret("select * from `products` where `p_id`='$pid'");
    $rm=$stm->fetch(PDO::FETCH_ASSOC);

    $stock=$rm['stock'];


    $st=$admin->ret("select  * from `cart` where `p_id`='$pid' and `b_id`='$bid' and `cstatus`='pending'");
    $count=$st->rowCount();


    if($count>0){
        $row=$st->fetch(PDO::FETCH_ASSOC);
        $qty=$row['qty']+$qty;


        $total = (int)$price * (int)$qty; 
        $cid=$row['cart_id'];



       if($qty>$stock){

        echo "<script>
        alert('Product Out of Stock');
        window.location.href='../shop.php';</script>";
       }else{
        $stmt = $admin->cud(
            "UPDATE `cart` set `qty`='$qty',`total`='$total' where `cart_id`='$cid'", 
            "saved"
        );


        echo "<script>
        alert('Added to Cart');
        window.location.href='../cart.php';</script>";

       }





    }else if($count==0){



        if($qty>$stock){
            echo "<script>
            alert('Product Out of Stock');
            window.location.href='../shop.php';</script>";



        }else{
                        // Updated and corrected query
    $stmt = $admin->cud(
        "INSERT INTO `cart` (`b_id`, `p_id`, `qty`, `price`, `total`, `cstatus`) 
        VALUES ('$bid', '$pid', '$qty', '$price', '$total', 'pending')", 
        "saved"
    );


    echo "<script>
    alert('Added to Cart');
    window.location.href='../cart.php';</script>";


        }


    }








}




if(isset($_GET['cid'])){
    $cid=$_GET['cid'];
    $st=$admin->cud("delete from `cart` where `cart_id`='$cid'","saved");
    echo "<script>
    alert('Cart Item Removed');
    window.location.href='../cart.php';</script>";



}







?>