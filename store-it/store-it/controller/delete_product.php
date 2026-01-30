<?php
include '../config.php';
$admin=new Admin();


$id=$_GET['id'];

$stmt=$admin->cud("DELETE FROM `products` WHERE `p_id`='$id'","saved");




echo "

<script>

alert('Deleted Success!!');
window.location.href='../admin/view-product.php';


</script>


    ";

?>