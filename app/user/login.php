<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../resources/bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Login</h1>
        <form action='login.php' method='POST'>
            <div class="form-group">
            <label for="email">Username:</label>
            <input type="text" class="form-control" id="txtUsername" placeholder="Enter email" name="txtUsername" value = "<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="txtPassword" placeholder="Enter password" name="txtPassword" value = "<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
            </div>
            <div class="form-group form-check">
            <label class="form-check-label">
                <input  class="form-check-input" type="checkbox"  name="remember" value = ""<?php if(isset($_COOKIE['username'])) echo "checked"; ?> > Remember me
            </label>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>

    <?php
        ob_start();
        session_start();
        include('../../database/connect.php');
     
        if (isset($_POST['login'])) 
        {
            
            $username = $_POST['txtUsername'];
            $password = $_POST['txtPassword'];
            if ( $username == "" || $password == "" ){
				echo"vui long nhap day du";
            }
            else{
                
                if (isset($_POST['remember'])) {
                   
                    setcookie ('username', $username, time() + 60,"/");
                    setcookie ('password', $password, time() + 60, "/");

                }
                
                $sql= "select *from login where USERNAME='$username' and PASSWORD='$password' ";
                $query = mysqli_query($conn,$sql);
                if($d = mysqli_fetch_array($query)){
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    header('location:../tour/index-tour.php');
                    
                }
                else{
                    echo"sai tai khoan hoac mat khau";
                }   
            }
        }
     
       
            
        ?>
    <script src="../../resources/bootstrap/jquery.min.js"></script>
    <script src="../../resources/bootstrap/popper.min.js"></script>
</body>

</html>