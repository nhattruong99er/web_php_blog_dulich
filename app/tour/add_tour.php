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
                <td><a href="index.php">Trang chủ </a></td>
                <td><a href="show-list-tour.php">List tour</a></td>
                <td><a href="../customer/show-customer.php"> List khách</a></td>
                <td><a href="">List nhân viên </a></td>
                <td><a href="">Thông tin cá nhân </a></td>
            </tr>  
            </table>
    <form action='add_tour.php' method='post'>
	<table id="abc">
		<tr align="center">
			<td colspan="2">THÊM TOURS</td>
		</tr>
		<tr>
			<td>Tên tour</td>
			<td><input type="text" name="txttentour" required="required"></td>
		</tr>
		<tr>
			<td>Loại tour</td>
			<td>
                <input type="text" name ="txtloaitour" required="required">
			</td>
		</tr>
        <tr>
			<td>Số người tối đa </td>
			<td>
                <input type="text" name ="txtsonguoi" required="required">
			</td>
		</tr>
		<tr>
			<td>Tên file ảnh</td>
			<td><input type="file" name="txtfileanh" required="required"></td>
		</tr>	
        
		<tr align="center">

			<td colspan="2">
				<button  id="button1"><a href="./tour-detail/add_tour_details.php">Thêm chi tiết</a></button>
				<input id="button1" type="submit" name="btthem" value="Thêm">

			</td>
		</tr>

	</table>

	</form>	
                  
 
    </body>
    <?php
    
    if(isset($_POST['btthem'])){
        if(isset($_POST['txttentour'])){
            $tentour = $_POST['txttentour'];
        }
        if(isset($_POST['txtloaitour'])){
            $loaitour = $_POST['txtloaitour'];
        }
        
        if(isset($_POST['txtfileanh'])){
            $anh = $_POST['txtfileanh'];
        }
        if(isset($_POST['txtsonguoi'])){
            $songuoi = $_POST['txtsonguoi'];
        }
       
        include('../../database/connect.php');
        ?>
        <?php
        mysqli_set_charset($conn,"SET NAMES 'utf8'");
        $sql= "INSERT INTO `tours`(`NAME`, `KIND_TOUR`, `MAX_PEOPLE`, `IMAGE`) VALUES ('$tentour','$loaitour','$songuoi','$anh')";
        $k=mysqli_query($conn,$sql) or die("ko truy van dc");
        
        ?>
        <script> alert("Thêm tour thành công !"); </script>
        <?php } ?>
        


      
</html>