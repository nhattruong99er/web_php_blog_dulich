<?php 
    $dongtt=5;
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }
    else{
        $page=0;
    }
    $conn= mysqli_connect("localhost","root","","travel");
    $layld="select *from tours";
    $kqdong = mysqli_query($conn,$layld);
    $sodong=mysqli_num_rows($kqdong);
    $sotrang=$sodong / $dongtt;
    $vtbd=$page*$dongtt;
    $pt = "select * from tours limit {$vtbd},{$dongtt}";
    $kq = mysqli_query($conn,$pt) or die("ko pt dc");
?>