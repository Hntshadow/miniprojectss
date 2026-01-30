<?php
include '../config.php';
$admin=new Admin();

if(isset($_POST['submit'])){
    $bid=$_POST['bid'];
    $feed=$_POST['feed'];

    $pid=$_POST['pid'];
    $stm=$admin->cud("insert into `feedback`(`b_id`,`p_id`,`feed`)values('$bid','$pid','$feed') ","saved");


    echo "<script>
    alert('Review Given');
    window.location.href='../shop.php';</script>";





}


?>