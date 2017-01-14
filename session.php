<?php
    require "dbcon/dbcon.php";
        session_start();
    $checkemail = $_SESSION['email'];
    $ses_sql= "SELECT * FROM customers WHERE email = '".$checkemail."'";
    $query = mysqli_query($conn,$ses_sql);
    $res = mysqli_fetch_array($query);
    $email = $res['email'];
    if (!$email){
        header('Location: login.php');
    }
?>