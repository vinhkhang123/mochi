<?php
session_start();
include 'connect\config.php';
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
    }elseif($taikhoan='')
    {
        echo '<script language="javascript">';
        echo 'alert("chưa nhập tài khoản")';
        echo '</script>';
    }
    elseif($matkhau=='')
    {
        echo '<script language="javascript">';
        echo 'alert("chưa nhập mật khẩu")';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("sai tài khoản hoặc mật khẩu")';
        echo '</script>';
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
            background-image: url("image/Mochi-dessert-1024x562-1.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            align-items: center;
            text-align: center;
            display:flex;
            justify-content:center;
            width: 100%;

        }
        .wrapper{
        width:15%;
        margin:0 auto;

        }
        .table-login
        {
            width:100%;
            text-align: center;
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
                    <td colspan="2"><input type="submit" name="dangnhap" value="Đăng Nhập"></td>
                </tr>
            </table>
            </form>
            
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    </body>
</html>