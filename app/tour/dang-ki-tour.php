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
        </div>
    
        <?php
            include('../../database/connect.php')?>
        <!-- <?php
 
           $id = $_GET['id'];
           $laytour="select * from tours where ID='".$id."'";
           $laytourdetail="select * from tour_details where ID='".$id."'";
           $kqtour=mysqli_query($conn,$laytour ) or die("ko truy van dc");
           $kqtourdetail=mysqli_query($conn,$laytourdetail ) or die("ko truy van dc");
           
        ?> -->
        
            <?php
                while($rowtour=mysqli_fetch_array($kqtour)){
                    while($rowtourdetail=mysqli_fetch_array($kqtourdetail)){
            ?>
            <div>
                <p><?=$rowtour['NAME']?></p>
                <p>ngày khởi hành:<?=$rowtourdetail['NGAY']?></p>
                <p>số chỗ còn nhận:<?=$rowtour['MAX_PEOPLE']?></p>
            </div>
            <?php } ?>
            <?php } ?>
           
            <div>
            
                <table id="thongtinll" align="center"   cellspacing="15px">
                    <tr>                 
                        <td>Tên khách hàng:</td>
                        <td ><input type="text" name="txttenkh" size="20px" required="required"></td>
                    </tr>
                    <tr>                   
                        <td >Chứng minh nhân dân:</td>
                        <td ><input type="text" name="txtcmnd" size="20px" required="required"></td>
                    </tr>
                    <tr>             
                        <td >Địa chỉ:</td>
                        <td ><input type="text" name="txtdiachi" size="20px" required="required"></td>
                    </tr>
                    <tr>  
                        <td >Số điện thoại:</td>
                        <td ><input type="tel" name="txtsdt" size="20px" required="required"></td>
                    </tr>
                    <tr>      
                        <td >Ngày sinh:</td>
                        <td ><input type="date" name="txtns" size="20px" required="required"></td>
                    </tr>
                    
                    <tr>     
                        <td >Email:</td>
                        <td ><input type="email" name="txtemail" size="20px" required="required"></td>
                    </tr>

                    <tr>     
                        <td >Số lượng người lớn</td>
                        <td ><input type="number" name="txtnumberadult" size="20px" required="required"></td>
                    </tr>

                    <tr>     
                        <td >Số lượng trẻ em</td>
                        <td ><input type="number" name="txtnumberchildren" size="20px" required="required"></td>
                    </tr>
                    
                
                    <br>
                  
                </table> 
               
                <strong>Tổng</strong>
                <span></span>
                <br>
                <button class="btnthanhtoan">Thanh toán</button>   
            </div>
         
        <script>
            //lay thanh phan, phan tu cua 1 the
            var quantityPeopleElement = document.getElementById("quantityPeople");
            var priceElement = document.getElementById("price");
            //xoa khoang trang toan bo tren 1 dong`
            var price = priceElement.innerHTML.replace(/ /g,"");
            //cat chuoi tu vi tri thu 1 den cuoi chuoi
            price = price.substr(1);
            //su kien onchange
            quantityPeopleElement.onchange = function(event){
                var quantity = event.target.value;
                var totalElement = document.getElementById("total");
                quantity = quantity * price
                totalElement.innerHTML = "= "+ quantity;
                var_dump(totalElement);
            };
        </script>
        <script>
                var quantityPeopleElementChild = document.getElementById("quantityPeopleChild");
                var priceElementChild = document.getElementById("priceChild");
                var priceChild = priceElementChild.innerHTML.replace(/ /g,"");
                priceChild = priceChild.substr(1);
                quantityPeopleElementChild.onchange = function (event){
                    var quatityChild = event.target.value;
                    var totalElementChild = document.getElementById("totalChild");
                    quantityChild = quantityChild * priceChild
                    totalElementChild.innerHTML = "= "+ quantityChild;
                } ;    
        </script>
    </body>    
</html>