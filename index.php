<!DOCTYPE html>
<html>

<head>
    <title> Blog du lịch </title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="./resources/css/index.css">
    <link rel="stylesheet" type="text/css" href="./resources/css/header.css">
    <link rel="stylesheet" type="text/css"
        href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <div id="wrapper">
        <div id="head" class="clearfix">
            <div class="wrapper_container">
                <div id="logo">
                    <a href="../blogdulich/index.php">
                        <img src="../img/logo.jpg">
                    </a>
                </div>
                <ul id="main_menu">
                    <li><a href="../blogdulich/index.php">TRANG CHỦ</a></li>
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
                    <li><a href="">KHÁCH SẠN</a>
                        <ul class="sub_menu">
                            <li><a href="">KHÁCH SẠN 1</a></li>
                            <li><a href="">KHÁCH SẠN 2</a></li>
                            <li><a href="">KHÁCH SẠN 3</a></li>
                        </ul>
                    </li>
                    <li><a href="">GIỚI THIỆU</a></li>
                    <li><a href="./send/sendmail.html">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php    
            include('./app/pagination/pagination-index.php')
    ?>
    <div class="search" textalign = "center">
        <form action="./app/tour/search.php?timkiem=<?php echo $searchS?>" method="get">
            <input type="text" name="search" class="form" placeholder="Nhập thông tin cần tìm..." />
            <button class="btn-timtour" type="submit">TÌM KIẾM</button>
        </form>
    </div>
    <?php
            if (isset($_REQUEST['ok'])) 
            {
                $search = addslashes($_GET['search']);
                if (empty($search)) {
                    echo "Yêu cầu nhập dữ liệu vào ô trống";
                } 
                else
                {
                    $query = "select * from tours where NAME like '%$search%'";
                    $kn=mysqli_connect("localhost", "root", "", "travel");
                    $sql = mysqli_query($kn,$query);
                    $num = mysqli_num_rows($sql);
                    if ($num > 0 && $search != "") 
                    {
                        echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
                        echo '<table border="1" cellspacing="0" cellpadding="10">';
                        while ($row = mysqli_fetch_array($sql)) {
                            echo '<tr>';
                                echo "<td>{$row['ID']}</td>";
                                echo "<td>{$row['MA_TOUR']}</td>";
                                echo "<td>{$row['NAME']}</td>";
                                echo "<td>{$row['KIND_TOUR']}</td>";
                                echo "<td>{$row['MAX_PEOPLE']}</td>";
                                echo "<td>{$row['IMAGE']}</td>";
                                echo "<td>{$row['NGAY']}</td>";
                            echo '</tr>';
                        }
                        echo '</table>';
                    } 
                    else {
                        echo "Không tìm thấy kết quả!";
                    }
                }
            }
            ?>
    <?php
        include('./database/connect.php')?>
    <?php
        $laytourdetail = "SELECT * FROM `tour_details`";
        $kqlaytourdetail= mysqli_query($conn,$laytourdetail);
    ?>
    <div class="container">
        <div class="title while">
            <h2 class="h3">NHỮNG KHU DU LỊCH HOT NHẤT 2022</h2>
        </div>

        <?php
            while($rowtour = mysqli_fetch_array($kqtour)){  
                $id=$rowtour['ID'];
                $laytourdetail = "SELECT * FROM `tour_details` where ID='".$id."'";
                $kqlaytourdetail= mysqli_query($conn,$laytourdetail);
                foreach( $kqlaytourdetail as $rowtourdetail ){
        ?>
        <div class="row">
            <div class="col">
                <div class="thumbnail block-tour shawdow" stype="height:456px;">
                    <a href="./app/tour/tour-detail/chitiet-tour.php?id=<?php echo $rowtour['ID']; ?>">
                        <img class="img-rounded" src="./storage/img/<?=$rowtour['IMAGE']?>" width="330px" height="262px">
                    </a>
                    <div class="caption">
                        <a class="title-tour "
                            href="./app/tour/tour-detail/chitiet-tour.php?id=<?php echo $rowtour['ID']; ?>"><?=$rowtour['NAME']?></a>
                        <div class="location" stype="magin-bottom:10px;">
                            <i class="fa fa-flag"></i>
                            <span>
                                <?=$rowtourdetail['STARTING_PLACE']?>
                            </span>
                            
                        </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } ?>
        <br>
        <!-- hien thi phan trang -->
        <?php
            for($i=0;$i<=$demstdl;$i++){
                $p=$i+1;
                echo" <a href='index.php?trang=$i'>$p</a>";
            }?>
    </div>
</body>


</html>