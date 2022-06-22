<!DOCTYPE html>
<html>

<head>
    <title> Blog du lịch </title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="../../../resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="../../../resources/css/chitiet-tour.css">
    
    <link rel="stylesheet" type="text/css"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="head" class="clearfix">
            <div class="wrapper_container">
                <div id="logo">
                    <a href="../../../index.php">
                        <img src="../../../storage/img/logo.jpg">
                    </a>
                </div>
                <ul id="main_menu">
                    <li><a href="../../../index.php">TRANG CHỦ</a></li>
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
            include('../../../database/connect.php')?>
    <?php
            $id = $_GET['id'];
            $laytour="select * from tours where ID='".$id."'";
            $laytourdetail="select * from tour_details where ID='".$id."'";
            $kqtour=mysqli_query($conn,$laytour ) or die("ko truy van dc");
            $kqtourdetail=mysqli_query($conn,$laytourdetail ) or die("ko truy van dc");
        ?>
    <?php while($rowtour=mysqli_fetch_array($kqtour)){ ?>
         <?php while($rowtourdetail=mysqli_fetch_array($kqtourdetail)){ ?>

    <div class="blog">
        <img src="../../../storage/img/chitiet.jpg">
        <div class="blog-title">
            <h1 style="font-size: 30px;"><?=$rowtour['NAME']?></h1>
        </div>
    </div>

    <div class="container">
        <div class="col-sm-8">
            <div id="sesion" class="panel">
                <div class="panel-heading">
                    <i class="fa fa-image"></i> HÌNH ẢNH
                </div>
            </div>
            <div class="img-block panel-footer">
                <div class="main-img">
                    <img src="../../../storage/img/<?=$rowtour['IMAGE']?> "width="704px" height="410">
                </div>
             </div>
        
            <div class="panel-footer">
                <div class="step-heading">Ngày 1 </div>
                <p style="text-align:justify"><em><strong>CHƯƠNG TRÌNH THAM QUAN GỢI Ý</strong></em></p>
                <p style="text-align:justify"><?=$rowtourdetail['DAY_ONE']?></p>
                <div class="step-heading">Ngày 2 </div>
                <p style="text-align:justify"><em><strong>CHƯƠNG TRÌNH THAM QUAN GỢI Ý </strong></em></p>
                <p style="text-align:justify"><?=$rowtourdetail['DAY_TWO']?></p>
                <p><strong><em>Hẹn ngày gặp lại Quý khách trong những tour du lịch tuyệt vời sắp tới!</em></strong></p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="tour-info panel hidden-xs">
                <div class="panel-heading"><i class="fa fa-align-left"></i> THÔNG TIN TOUR</div>
                <div class="panel-body">
                    <p class="sign"><strong><?=$rowtour['NAME']?></strong></p>
                    <p class="child">Số chỗ còn: <strong><?=$rowtour['MAX_PEOPLE']?> chỗ</strong></p>
                    <p class="plane">Phương tiện: <strong><?=$rowtourdetail['VEHICLE']?></strong>
                    </p>
                    <p class="flag">
                        <span>Khởi hành tại:<strong><?=$rowtourdetail['STARTING_PLACE']?></strong>
                        </span>
                    </p>
                </div>
                <div class="panel-footer">
                    <a href="tel:1900 6668">
                        <i class="fa fa-phone"></i> 1900 6668
                    </a>
                </div>
            </div>
            <div class="panel hidden-xs">
                <div class="panel-footer">
                    <div class="thumbnail block-tour shadow">
                    <img class="img-rounded" src="../../../storage/img/<?=$rowtour['IMAGE']?>" >
                            <div class="caption">
                                <a class="title-tour" href="./app/tour/tour-detail/chitiet-tour.php?id=<?php echo $rowtour['ID']; ?>" ><?=$rowtour['NAME']?></a>
                                <i class="fa fa-clock-o"></i> <span><?=$rowtourdetail['NGAY']?></span>
                            </div>
                            <div class="bottom">
                                <i class="fa fa-money"></i> <span><?=$rowtourdetail['ADULT_PRICE']?>đ</span>
                                <a href="../dang-ki-tour.php" class="text-center btn btn-second" style="width: 38.888%!important;">ĐẶT NGAY</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
    <?php } ?>

    </div>
</body>

</html>