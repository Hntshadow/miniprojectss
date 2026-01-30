<?php

include '../config.php';
$admin=new Admin();


//4. take all the data from the form

if(isset($_POST['submit'])){
    //take form values 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $address=$_POST['address'];

    // uploading the file

    $path="uploads/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$path);

// store it in db table
    $stmt=$admin->cud("INSERT INTO `branch`( `bname`, `bemail`, `bpassword`, `location`,  `status`, `profile`, `address`, `phone`) VALUES ('$name','$email','$password','$location','active','$path','$address','$phone')","saved");



    echo "

<script>

alert('Added Success!!');
window.location.href='../admin/view-branch.php';


</script>


    ";



}



if(isset($_POST['edit'])){
    //take form values 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $address=$_POST['address'];
    $bid=$_POST['bid'];

    // uploading the file

    $path="uploads/".basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$path);


    if($path=="uploads/"){

        $stmt = $admin->cud("UPDATE `branch` 
        SET 
            `bname` = '$name',
            `bemail` = '$email',
            `bpassword` = '$password',
            `location` = '$location',
            `status` = 'active',
            `address` = '$address',
            `phone` = '$phone'
        WHERE `b_id` = '$bid'", "updated");
    

    }else{

        $stmt = $admin->cud("UPDATE `branch` 
    SET 
        `bname` = '$name',
        `bemail` = '$email',
        `bpassword` = '$password',
        `location` = '$location',
        `status` = 'active',
        `profile` = '$path',
        `address` = '$address',
        `phone` = '$phone'
    WHERE `b_id` = '$bid'", "updated");


    }





    echo "

<script>

alert('Updated Success!!');
window.location.href='../admin/view-branch.php';


</script>


    ";



}



?>