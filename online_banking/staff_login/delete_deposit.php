<?php
include 'include/DB.php';
include 'include/function.php';
//    include 'include/session.php';
$_SESSION['TrackingURL'] = $_SERVER['PHP_SELF'];
confirm_login();

//Delete Record in Database
global $con;
$get_id = $_GET['id'];
//    echo $get_id;
$sql = "DELETE FROM fixed_deposite WHERE f_id = '$get_id'";
$stmt = $con->query($sql);
$result = $stmt->execute();
if ($result){
    $_SESSION['success_message'] = "Delete Fixed Deposite Successfully.";
    redirect('view_deposite.php');
}else{
    $_SESSION['error_message'] = "Something went wrong. Try again.";
    redirect('view_deposite.php');
}
$con = null;

