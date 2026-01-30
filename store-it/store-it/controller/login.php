<?php
include '../config.php';
$admin=new Admin();


if (isset($_POST['admin_login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);




    $stmt=$admin->ret("select * from `admin` where `aemail`='$email' and `apassword`='$password'");
    $count=$stmt->rowCount();
    if($count>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['a_id']=$row['a_id'];
     

        echo "<script>
        alert('Login Success');
        window.location.href='../admin/index.php';</script>";
    

    }else{

        echo "<script>
        alert('Invalid Email or Password');
        window.location.href='../admin/login.php';</script>";

    }

}



if (isset($_POST['user_login'])){
    $email=$_POST['email'];
    $password=md5($_POST['password']);




    $stmt=$admin->ret("select * from `branch` where `bemail`='$email' and `bpassword`='$password'");
    $count=$stmt->rowCount();
    if($count>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['b_id']=$row['b_id'];
     

        echo "<script>
        alert('Login Success');
        window.location.href='../index.php';</script>";
    

    }else{

        echo "<script>
        alert('Invalid Email or Password');
        window.location.href='../login.php';</script>";

    }

}






if(isset($_GET['role'])){

$role=$_GET['role'];
if($role=='admin'){
    session_destroy();
    unset($_SESSION['a_id']);
   
    echo "<script>
    alert('Logout Success');
    window.location.href='../admin/login.php';</script>";
}else{

    session_destroy();
    unset($_SESSION['u_id']);
   
    echo "<script>
    alert('Logout Success');
    window.location.href='../login.php';</script>";
}




}







?>  