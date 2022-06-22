<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <table>
        <tr>
            <td><a href="../index-tour.php">Trang chủ </a></td>
            <td><a href="../show-list-tour.php">List tour</a></td>
            <td><a href="../../customer/show-customer.php"> List khách</a></td>
            <td><a href="">List nhân viên </a></td>
            <td><a href="">Thông tin cá nhân </a></td>
        </tr>
    </table>
    <?php
		include('../../../database/connect.php');
		$id = $_GET['id'];
		



		
        $laytour="select * from tours where ID='".$id."'";
        $laytourdetail="select * from tour_details where ID='".$id."'";
        $kqtour=mysqli_query($conn,$laytour ) or die("ko truy van dc");
        $kqtourdetail=mysqli_query($conn,$laytourdetail ) or die("ko truy van dc");
    ?>
    <?php
        if(isset($_POST['btnsua'])){
            if(isset($_POST["txttentour1"]))
				{
					$tentour=$_POST["txttentour1"];
				}
				if(isset($_POST['txtsonguoi1']))
				{
					$songuoi=$_POST['txtsonguoi1'];
				}
				if(isset($_POST['txtfileanh1']))
				{
					$fileanh=$_POST['txtfileanh1'];
				}
				if(isset($_POST['txtngaybd']))
				{
					$ngaybatdau=$_POST['txtngaybd'];
				}
				if(isset($_POST['txtngaykt']))
				{
					$ngayketthuc=$_POST['txtngaykt'];
				}
				if(isset($_POST['txtks']))
				{
					$khachsan=$_POST['txtks'];
				}
				if(isset($_POST['txtptien']))
				{
					$phuongtien=$_POST['txtptien'];
				}
				if(isset($_POST['txtgiatreem']))
				{
					$treem=$_POST['txtgiatreem'];
				}
				if(isset($_POST['txtgianguoilon']))
				{
					$nglon=$_POST['txtgianguoilon'];
				}
				if(isset($_POST['txtchuongtrinhtour1']))
				{
					$cttour1=$_POST['txtchuongtrinhtour1'];
                }
                if(isset($_POST['txtchuongtrinhtour2']))
				{
					$cttour2=$_POST['txtchuongtrinhtour2'];
                }
                if(isset($_POST['txtloaitour']))
				{
					$loaitour=$_POST['txtloaitour'];
                }
                if(isset($_POST['txtkhoihanh']))
				{
					$noikhoihanh=$_POST['txtkhoihanh'];
                }
  
                $updatetour = " UPDATE `tours` SET `NAME`='$tentour',`KIND_TOUR`='$loaitour',`MAX_PEOPLE`='$songuoi',`IMAGE`='$fileanh' WHERE ID='$id'";
                $updatechitiet = "UPDATE `tour_details` SET `STARTING_PLACE`='$phuongtien',`ADULT_PRICE`='$nglon',`CHILD_PRICE`='$treem',`NGAY`='$ngaybatdau',`END`='$ngayketthuc',`HOTEL_NAME`='$khachsan',`VEHICLE`='$phuongtien',`DAY_ONE`='$cttour1',`DAY_TWO`='$cttour2' WHERE  ID='$id'";
                $kqthemtour= mysqli_query($conn,$updatetour) or die(mysqli_error($conn));
				$kqthemchitiet= mysqli_query($conn,$updatechitiet) or die(mysqli_error($conn));
				?><script>
    alert("Sửa thành công !");
    </script>
    <?php }
    ?>

    <form method="post">
        <table>
            <tr align="center">
                <td>CHI TIẾT TOURS</td>
            </tr>
            <?php foreach($kqtour as $tour) {?>
            <?php foreach($kqtourdetail as $tourdetail) {?>
            <tr>
                <td>Tên tour</td>
                <td><input type="text" name="txttentour1" size='42' value="<?php echo $tour['NAME']?>"></td>
            </tr>
            <tr>
                <td>Loại tour</td>
                <td><input type="text" name="txtloaitour" size='42' value="<?php echo $tour['KIND_TOUR']?>"></td>
            </tr>
            <tr>
                <td>Khởi hành tại</td>
                <td><input type="text" name="txtkhoihanh" size='42' value="<?php echo $tourdetail['STARTING_PLACE']?>">
                </td>
            </tr>
            <tr>
                <td>Số người tối đa</td>
                <td><input type="number" name="txtsonguoi1" size='42' value="<?php echo $tour['MAX_PEOPLE']?>" min="1"
                        max="20"></td>
            </tr>
            <tr>
                <td>Tên file ảnh</td>
                <td><input type="file" name="txtfileanh1" size='42' value="<?php echo $tour['IMAGE']?>"></td>
            </tr>
            </tr>
            <tr>
                <td>Ngày bắt đầu</td>
                <td><input type="date" name="txtngaybd" size='42' value="<?php echo $tourdetail['NGAY']?>"></td>
            </tr>
            <tr>
                <td>Ngày kết thúc</td>
                <td><input type="date" name="txtngaykt" size='42' value="<?php echo $tourdetail['END']?>"></td>
            </tr>
            <tr>
                <td>Giá trẻ em</td>
                <td><input type="text" name="txtgiatreem" size='42' value="<?php echo $tourdetail['CHILD_PRICE']?>">
                </td>
            </tr>
            <tr>
                <td>Giá người lớn</td>
                <td><input type="text" name="txtgianguoilon" size='42' value="<?php echo $tourdetail['ADULT_PRICE']?>">
                </td>
            </tr>
            <tr>
                <td>Tên khách sạn</td>
                <td><input type="text" name="txtks" size='42' value="<?php echo $tourdetail['HOTEL_NAME']?>"></td>
            </tr>
            <tr>
                <td>Phương tiện di chuyển</td>
                <td><input type="text" name="txtptien" size='42' value="<?php echo $tourdetail['VEHICLE']?>"></td>
            </tr>
            <tr>
                <td>Chương trình tour ngay 1</td>
                <td><input type="text" name="txtchuongtrinhtour1" size='42' value="<?php echo $tourdetail['DAY_ONE']?>">
                </td>
            </tr>
            <tr>
                <td>Chương trình tour ngay 2</td>
                <td><input type="text" name="txtchuongtrinhtour2" size='42' value="<?php echo $tourdetail['DAY_TWO']?>">
                </td>
            </tr>
            <tr>
                <td>Xem trước ảnh</td>
                <td> <img src="../../../storage/img/<?php echo $tour['IMAGE'] ?>" width=300px height=150px></td>
            </tr>
            <?php } ?>
            <?php } ?>
            <tr align="center">
                <td colspan="2">
                    <button id="button1"><a href="../show-list-tour.php">Quay về danh sách tour</a></button>
                    <input type="submit" name='btnsua' value='Chỉnh sửa'>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>