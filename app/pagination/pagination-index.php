<?php

    $dongtt=6;
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }
    else{
        $page=0;
    }
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }
    else{
        $page=0;
    }
    $kn = mysqli_connect("localhost","root","","travel") or die("ko ket noi dc");
    $laydl="select *from tours";
    $kqdong=mysqli_query($kn,$laydl);
    $sodongdl=mysqli_num_rows($kqdong);
    $demstdl=$sodongdl/$dongtt;
    $vtbd=$page*$dongtt;
    $pt="select *from tours limit {$vtbd},{$dongtt} ";
    $kqtour=mysqli_query($kn,$pt) or die("khong phan trang duoc");


?>