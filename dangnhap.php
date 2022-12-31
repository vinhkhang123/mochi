<?php
session_start();
include 'C:\xampp\htdocs\baitap\connect\config.php';
if(isset($_POST['dangnhap']))
{
    $taikhoan=$_POST['username'];
    $matkhau=$_POST['password'];
    $sql = "SELECT * FROM account WHERE username='".$taikhoan."' AND password ='".$matkhau."' LIMIT 1";
    $row = mysqli_query($conn,$sql);
    $count=mysqli_num_rows($row);
    if($count>0)
    {
        $_SESSION['dangnhap']=$taikhoan;
        header('Location:lietke.php');
    }else
    {
        echo'<script> alert("tài khoản hoặc mật khẩu không đúng") </script>';
        header('Location:http://localhost/baitap/dangnhap.php');
    }
}
?>
<!DOCTYPE <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
        body{
            background:#FFE4E1;
        }
        .wrapper{
        width:15%;
        margin:0 auto;
        }
        .table-login
        {
            width:100%
        }
        .table-login tr td
        {
                padding:5px;
        }

        </style>
    </head>
    <body>
        <div class="wrapper">
            <form action="" autocomplete="off" method="POST">
            <table border="1" style="text-alight:center;border-collapse:collapse;" class="table-login">
                <tr>
                    <td colspan="2"><h3>Đăng Nhập</h3></td>
                </tr>
                <tr>
                    <td>Tài Khoản</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input colspan="2" type="submit" name="dangnhap" value="Đăng Nhập"></td>
                </tr>
            </table>
            </form>
            
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    </body>
</html>