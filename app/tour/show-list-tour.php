<!DOCTYPE html>
<html>
    <head>
        <title> Blog du lịch </title>
        <meta charset="utf8">
        <link rel="stylesheet" type="text/css" href="../../resources/css/show-tour.css">
    </head>
    <body>
            <table>
            <tr>
                <td><a href="../tour/index-tour.php">Trang chủ </a></td>
                <td><a href="show-list-tour.php">List tour</a></td>
                <td><a href="../customer/show-customer.php"> List khách</a></td>
                <td><a href="">List nhân viên </a></td>
                <td><a href="">Thông tin cá nhân </a></td>
            </tr>  
            </table>
        <div class="titleOfTable"><h1 align="center">DANH SÁCH TOUR</h1></div>
        <br>
        <h3 align="center"><button class="btn btn-info"><a href="add_tour.php" style="color: black">Thêm mới tour du lịch</a></button></h3>
        <br>
        <table id="customers">
            <tr>
                <th class="listtour"  >
                    ID tour
                </th>
                <th class="listtour" >
                    Loại tour
                </th>
                <th class="listtour" >
                    Tên tour
                </th>
                <th class="listtour" >
                     Số người tối đa
                </th>
                <th class="listtour">
                    Hình ảnh 
                </th>
                <th class="listtour"  >
                    Chức năng
                </td>
            </tr>
            <?php

               include('../pagination/pagination-show-tour.php')?>
               <?php
                while ($row = mysqli_fetch_array($kq)){
                ?>
                <tr>
                    <td align="center"><?php echo $row['ID'] ?></td>
                    <td align="center"><?php echo $row['KIND_TOUR']?></td>
                    <td align="center"><?php echo $row['NAME'] ?></td>
                    <td align="center"><?php echo $row['MAX_PEOPLE'] ?></td>
                    <td align="center"><?php echo $row['IMAGE']?></td>
                    <td align="center">
                        <button type="button" class="btn btn-danger" ><a href="./tour-detail/show_tour_details.php?id=<?php echo $row['ID'] ?>" style="color: black">Chi tiết</a></button>

                        <a  href="delete_tour.php?id=<?php echo $row['ID'] ?>"><input type="button" value="Xóa" class="btn btn-info" onclick="confDelete()"></a>
                    </td>
                </tr>			
            <?php  } ?>
            </table>

<div id="pagination" align="center" style="color: black">
		<?php
		for ($i = 0; $i <= $sotrang; $i++){

			if ($i == $page){
                $p=$i+1;
				echo '<span>'.$p.'</span> | ';
			}
			else{
                $p=$i+1;
				echo '<a style="color:black" href="show-list-tour.php?page='.$i.'">'.$p.'</a> | ';
			}
		}
		if ($page < $sotrang && $sotrang > 0){
			echo '<a style="color:black" href="show-list-tour.php?page='.($page+1).'">Next</a> | ';
		}
		?>
	</div>	
                  
 
    </body>


      
</html>