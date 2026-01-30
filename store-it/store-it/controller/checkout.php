<?php

include '../config.php';
$admin=new Admin();


if(isset($_POST['billing'])){

    $name=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $zip=$_POST['zip_code'];
    $state=$_POST['state'];
    $order_no=random_int(1000,9999);
    $bid=$_SESSION['b_id'];
    $total=$_POST['total'];
    $transaction_id=$_POST['transaction_id'];
    $mode=$_POST['mode'];


    $st=$admin->cud("INSERT INTO `order`(`order_no`, `b_id`, `grand_total`, `fullname`, `email`, `phone`, `address`, `city`, `state`, `zip_code`, `order_status`,`mode`) VALUES ('$order_no','$bid','$total','$name','$email','$phone','$address','$city','$state','$zip','pending','$mode')","saved");
     if($mode=='upi'){
        
    $stmt=$admin->cud("INSERT INTO `payment`( `b_id`, `order_no`, `mode`, `amount`, `pstatus`,`transaction_id`) VALUES ('$bid','$order_no','$mode','$total','pending','$transaction_id')","saved");

     }

    $stm=$admin->cud("update `cart` set `order_no`='$order_no',cstatus='ordered' where `b_id`='$bid' and `cstatus`='pending'","saved");

    $stmc=$admin->ret("select * from `cart` inner join `products` on products.p_id=cart.p_id where `order_no`='$order_no'");
    while($rc=$stmc->fetch(PDO::FETCH_ASSOC)){
        $qty=$rc['qty'];
        $pid=$rc['p_id'];
        $stock=$rc['stock'];
        $stock=$stock-$qty;
        $s=$admin->cud("update `products` set `stock`='$stock' where `p_id`='$pid'","saved");
    }


    echo "<script>
    alert('Order Confirmed');
    window.location.href='../thankyou.php?total=$total&order_no=$order_no';</script>";

}






if(isset($_GET['st']) and isset($_GET['oid'])){
    $st=$_GET['st'];
    $oid=$_GET['oid'];


    if($st=='paid'){
        $stm=$admin->ret("select * from `order` where `order_id`='$oid'");
        $r=$stm->fetch(PDO::FETCH_ASSOC);
        $uid=$r['b_id'];
        $order_no=$r['order_no'];
        $mode=$r['mode'];
        $total=$r['grand_total'];
        $stmt=$admin->cud("INSERT INTO `payment`( `b_id`, `order_no`, `mode`, `amount`, `pstatus`) VALUES ('$uid','$order_no','$mode','$total','pending')","saved");
        
    echo "<script>
    alert('Payment Status Updated');
    window.location.href='../admin/manage-order.php?st=paid';</script>";


    }else{
    $stmt=$admin->cud("update `order` set `order_status`='$st' where `order_id`='$oid'","saved");
    echo "<script>
    alert('Order Status Updated');
    window.location.href='../admin/manage-order.php';</script>";

    }

}



if(isset($_GET['pid']) && isset($_GET['st'])){
    $st=$_GET['st'];
    $pid=$_GET['pid'];
    $stmt=$admin->cud("update `payment` set `pstatus`='$st' where `p_id`='$pid'","saved");
    echo "<script>
    alert('Payment Status Updated');
    window.location.href='../admin/manage-payment.php';</script>";
}






?>


