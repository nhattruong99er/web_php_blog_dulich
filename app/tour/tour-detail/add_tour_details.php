<!DOCTYPE html>
<html>
    <head>
        <title> Blog du lịch </title>
        <meta charset="utf8">
        <link rel="stylesheet" type="text/css" href="stypeindex.css">
    </head>
    <body>
    <table>
            <tr>
                <td><a href="../index-tour.php">Trang chủ </a></td>
                <td><a href="../show-list-tour.php">List tour</a></td>
                <td><a href="../customer/show-customer.php"> List khách</a></td>
                <td><a href="">List nhân viên </a></td>
                <td><a href="">Thông tin cá nhân </a></td>
            </tr>  
            </table>
    <form action='add_tour_details.php' method='post'>
	<table id="abc">
		<tr align="center">
			<td colspan="2">THÊM CHI TIẾT TOURS</td>
		</tr>
        <tr>
            <td>Chọn mã tour </td>
            <td>
                <select name="select_matour">
                <?php
                    $kn = mysqli_connect("localhost","root","","travel") or die("ko ket noi dc");
                    $matour = "select *from tours ";
                    $kq = mysqli_query($kn,$matour);
                    foreach($kq as $ma){
                        echo "<option value='".$ma['ID']."'>".$ma['NAME'].' - '.$ma['ID']."</option>";
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
		<td>Ngày khởi hành</td>
			<td>
                <input type="date" name ="txtngaykhoihanh" required="required">
			</td>
		</tr>
        <tr>
			<td>Nơi khởi hành</td>
			<td>
                <input type="text" name ="txtnoikhoihanh" required="required">
			</td>
		</tr>
        
		<tr>
			<td>Tiền người lớn </td>
			<td><input type="text" name="txtnguoilon" required="required"  ></td>
		</tr>
        <tr>
			<td>Tiền trẻ em </td>
			<td><input type="text" name="txttreem" required="required" ></td>
		</tr>
		<tr>
			<td>Ngày kết thúc </td>
			<td><input type="date" name="txtngaykt" required="required"></td>
		</tr>
		<tr>
			<td>Khách sạn </td>
			<td>
                <input type="text" name ="txtkhachsan" required="required">
			</td>
		</tr>
        <tr>
			<td>Phương tiện</td>
			<td>
                <input type="text" name ="txtphuongtien" required="required">
			</td>
		</tr>
        <tr>
			<td>Chương trình Ngày 1</td>
			<td>
                <input type="text" name ="txtctngay1" required="required">
			</td>
		</tr>
        <tr>
			<td>Chương trình Ngày 2 </td>
			<td>
                <input type="text" name ="txtctngay2" required="required">
			</td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input id="button1" type="submit" name="btthemcttour" value="Thêm">

			</td>
		</tr>
	</table>

	</form>	
                  
 
    </body>
    <?php
    
    if(isset($_POST['btthemcttour'])){
        if(isset($_POST['txtngaykt'])){
            $ngaykt = $_POST['txtngaykt'];
        }
        if(isset($_POST['txtkhachsan'])){
            $khachsan = $_POST['txtkhachsan'];
        }
        if(isset($_POST['txtphuongtien'])){
            $phuongtien = $_POST['txtphuongtien'];
        }
        if(isset($_POST['txtctngay1'])){
            $ctngay1 = $_POST['txtctngay1'];
        }
        if(isset($_POST['txtctngay2'])){
            $ctngay2 = $_POST['txtctngay2'];
        }
        if(isset($_POST['txtngaykhoihanh'])){
            $ngaykhoihanh = $_POST['txtngaykhoihanh'];
        }
        if(isset($_POST['txtnguoilon'])){
            $nguoilon = $_POST['txtnguoilon'];
        }
        if(isset($_POST['txttreem'])){
            $treem = $_POST['txttreem'];
        }
		
		 if(isset($_POST['txtnoikhoihanh'])){
            $noikhoihanh = $_POST['txtnoikhoihanh'];
        }
        $selectoption=$_POST['select_matour'];
       
        $conn = mysqli_connect("localhost","root","","travel") or die("ko ket noi dc");
        mysqli_set_charset($conn,"SET NAMES 'utf8'");
        $sql= "INSERT INTO `tour_details`(`ID`, `STARTING_PLACE`, `ADULT_PRICE`, `CHILD_PRICE`, `NGAY`, `END`, `HOTEL_NAME`, `VEHICLE`, `DAY_ONE`, `DAY_TWO`) VALUES ('$selectoption','$noikhoihanh','$nguoilon','$treem','$ngaykhoihanh','$ngaykt','$khachsan','$phuongtien','$ctngay1','$ctngay2')";
        $k=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        ?>
        <script> alert("Thêm thành công !"); </script>
        <?php } ?>
        


      
</html>