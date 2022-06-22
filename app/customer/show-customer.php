<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../css/show-tour.css">
	<title></title>
</head>
<body>
            <table>
            <tr>
                <td><a href="../tour/index-tour.php">Trang chủ </a></td>
                <td><a href="../tour/show-list-tour.php">List tour</a></td>
                <td><a href="show-customer.php"> List khách</a></td>
                <td><a href="">List nhân viên </a></td>
                <td><a href="">Thông tin cá nhân </a></td>
            </tr>  
            </table>
	<div class="titleOfTable"><h1 align="center">DANH SÁCH KHÁCH</h1></div>
	
	<br>
	<table id="customers">
		<tr bgcolor="lightblue" >
			<th class="idCustomer"  >
				ID 
			</th>
			<th class="nametour"  >
				Tên khách
			</th>
			<th class="phonetour"  >
				Địa chỉ
			</th>
			<th class="mailtour" >
				Điện thoại
			</th>
			<th class="mailtour" >
				Ngày sinh
			</th>
			<th class="mailtour">
				Email
			</th>
			<th class="mailtour"  >
				Số lượng trẻ em
			</th>
            <th class="mailtour"  >
				Số lượng người lớn
			</th>
			<th class="mailtour" >
				Chức năng
			</th>
		</tr>
		<?php
			include('../pagination/pagination-show-customer.php')?>
			<?php
                while ($customer = mysqli_fetch_array($kq)){			
			?>
			<tr>
				<td><?php echo $customer['ID'] ?></td>
				<td><?php echo $customer['NAME']?></td>
				<td><?php echo $customer['ADDRESS']?></td>
				<td><?php echo $customer['PHONENUMBER'] ?></td>
				<td><?php echo $customer['BIRTHDAY'] ?></td>
				<td><?php echo $customer['EMAIL'] ?></td>
				<td><?php echo $customer['NUMBERCHILDREN'] ?></td>
				<td><?php echo $customer['NUMBERADULTS'] ?></td>
				<td><button type="button" onclick="confDelete()"><a id="demo" href="delete-customer.php?id=<?php echo $customer['ID']?>">Xóa</a></button></td>

			</tr>
			<?php } ?>
	</table>
    <?php
		for ($i = 0; $i <= $sotrang; $i++){

			if ($i == $page){
                $p=$i+1;
				echo '<span>'.$p.'</span> | ';
			}
			else{
                $p=$i+1;
				echo '<a style="color:black" href="show-customer.php?page='.$i.'">'.$p.'</a> | ';
			}
		}
		if ($page < $sotrang && $sotrang > 0){
			echo '<a style="color:black" href="show-customer.php?page='.($page+1).'">Next</a> | ';
		}
		?>
	<br><br>
	<?php

		?>

	<script>
		function confDelete(){
			if(confirm("Bấm vào nút OK để tiếp tục"))
			{
				document.getElementById("demo").setAttribute('target','');
			}
			else
			{	
				document.getElementById("demo").setAttribute('href','show-customer.php');
				alert("Xóa ko thành công!");
			}
		}
	</script>


</body>
</html>