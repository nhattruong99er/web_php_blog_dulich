<!DOCTYPE html>

<html>

<head>
    <title> Blog du lịch </title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="stypeindex.css">
</head>
<?php session_start(); ?>

<body>
    
    <?php 
        if (isset($_SESSION['username']) && $_SESSION['username']){
            echo 'Xin chào '.$_SESSION['username']."<br/>";
            echo '<a href="../user/logout.php">Đăng xuất</a>';
            ?>
    <table>
        <tr>
            <td><a href="index-tour.php">Trang chủ </a></td>
            <td><a href="show-list-tour.php">List tour</a></td>
            <td><a href="../customer/show-customer.php"> List khách</a></td>
            <td><a href="">List nhân viên </a></td>
            <td><a href="">Thông tin cá nhân </a></td>
        </tr>
    </table>
    <?php   }
        else{
            header('location:../user/login.php');
        }
    ?>



</body>



</html>