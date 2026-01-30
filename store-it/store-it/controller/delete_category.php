<?php
include '../config.php';
$admin=new Admin();


$id=$_GET['id'];

$stmt=$admin->cud("DELETE FROM `category` WHERE `c_id`='$id'","saved");




echo "

<script>

alert('Deleted Success!!');
window.location.href='../admin/view-category.php';


</script>


    ";

?>