<!DOCTYPE html>
<html>
    <head>
        <title> Blog du lịch </title>
        <meta charset="utf8">
        <link rel="stylesheet" type="text/css" href="../../resources/css/header.css">
    </head>
    <body>
       
    <div id="wrapper">
                <div id="head" class="clearfix">
                    <div class="wrapper_container">
                        <div id="logo">
                            <a href="../../index.php">
                                <img src="../img/logo.jpg">
                            </a>
                        </div>
                        <ul id="main_menu">
                            <li><a href="../../index.php">TRANG CHỦ</a></li>
                            <li>
                                <a href="">TOUR DU LỊCH</a>
                                <ul class="sub_menu">
                                    <li><a href="">MIỀN BẮC</a>
                                        <ul class="sub_menu">
                                            <li><a href="">SA PA</a></li>
                                            <li><a href="">LÀO CAI</a></li>
                                            <li><a href="">HẠ LONG</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">MIỀN TRUNG</a>
                                        <ul class="sub_menu">
                                            <li><a href="">HUẾ</a></li>
                                            <li><a href="">ĐÀ NẴNG</a></li>
                                            <li><a href="">QUY NHƠN</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">MIỀN NAM</a>
                                        <ul class="sub_menu">
                                            <li><a href="">PHÚ QUỐC</a></li>
                                            <li><a href="">CẦN THƠ</a></li>
                                            <li><a href="">BẠC LIÊU</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">LIÊN HỆ</a></li>
                            <li><a href="">GIỚI THIỆU</a></li>
                            <li><a href="">KHÁCH SẠN</a>
                                <ul class="sub_menu">
                                    <li><a href="">KHÁCH SẠN 1</a></li>
                                    <li><a href="">KHÁCH SẠN 2</a></li>
                                    <li><a href="">KHÁCH SẠN 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>

    <?php 
        include('../../database/connect.php');?>
    <?php
        $search = $_GET['search'];
        $query = "select * from tours where NAME like '%$search%'";
        $sql = mysqli_query($conn,$query);
        $tours= $sql;
    ?>

    <div>
    <?php
        foreach ($tours as $tour) 
        {
    ?>
        <div class="thumbnail block-tour"stype="height:506px;">                                    
            <a href="chitiet.php?id=<?php echo $tour['ID']; ?>" >
                <img class="img-rounded" src="../../storage/img/<?=$tour['IMAGE']?>" width="330px" height="262px" >   
            </a>                                   
            <div class="caption">
                <a class="title-tour" href="chitiet-tour.php?id=<?php echo $tour['ID']; ?>" ><?=$tour['NAME']?></a>
                <div class="location">
                    <i class=fa fa-flag>
                    </i>
                    <!-- <span><?=$row['STARTING_PLACE']?></span> -->

                </div>
                <i class="fa fa-clock-o"></i>
                <span><?=$tour['NGAY']?></span>
            </div>
            <div class="bottom">
                <a class="text-center btn btn-second" href="chitiet.php?id=<?php echo $tour['ID']; ?>" >ĐẶT NGAY</a>
            </div>
    
    
        </div>
    <?php } ?>
</div>
    </div>
</body>
</html>