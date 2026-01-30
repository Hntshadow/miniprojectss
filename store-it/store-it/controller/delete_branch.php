<?php
include '../config.php';
$admin=new Admin();


$id=$_GET['id'];

$stmt=$admin->cud("DELETE FROM `branch` WHERE `b_id`='$id'","saved");




echo "

<script>

alert('Deleted Success!!');
window.location.href='../admin/view-branch.php';


</script>


    ";

?>