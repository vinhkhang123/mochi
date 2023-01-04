<?php
session_start();
if(!isset($_SESSION['dangnhap']))
{
    header('location:dangnhap.php');
}else
if(isset($_GET['action'])=='dangxuat')
{
    unset($_SESSION['dangnhap']);
    header('location:dangnhap.php');
}
?>
<html>
    <head>
    <?php
    include 'C:\xampp\htdocs\baitap\connect\config.php';
    $sql_sp="SELECT * FROM sanpham ";
    $query_sp=mysqli_query($conn,$sql_sp);
        
    ?>
    <script src="javatin.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <?php
    ?>
    <style>
    </style>
    <title>Thêm tin</title>
    </head>
    <body>
    <div class="body" style="       background-image: url(image/pngtree-strawberry-daifuku-pink-dessert-ice-cold-summer-picture-image_1551761.jpg);
            background-repeat:no-repeat;
            background-size:cover;">
        <div class="menu">
            <div class="MenuItem"> 
                
            <label for="openNaV" class="openNaV">
                <div class="logo"><img src="image/320577066_568785604679266_5437479403153405636_n.png" style="width:100px;"></div>
            </label>
                <nav>
                        <a href="index.php">Trang Chủ</a>
                        <a href="menu.php">Menu</a>
                        <a href="tintuc.php">Tin Tức</a>
                        <a href="lietke.php?action=dangxuat">Đăng Xuất <?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap'];} ?></a>
                        <div class="HoatAnh start-home"></div>
                </nav>    
        
            </div>
        </div>
        <div id="main">
        <h1 id="ha">Thêm tin</h1>
            <div class="bang">
                <table style="witdth:100%" border="1" text-align:center>
            <form id="themne" method="POST" action="xulytin.php" enctype="multipart/form-data">
                    <tr>    
                        <td>Tên tin:</td>
                        <td><input type="text" name="tenbaiviet"></td>
                    </tr>
                    <tr>    
                        <td>Hình Ảnh:</td>
                        <td><input type="file" name="HinhAnh"></td>
                    </tr>
                    <tr>    
                        <td>Tóm tắt:</td>
                        <td><textarea rows="10" name="tomtat" style="resize:none"></textarea></td>
                    </tr>
                    <tr>    
                        <td>Chi Tiết:</td>
                        <td><textarea rows="10" name="noidung" style="resize:none"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input onclick="themtin()"type="submit" name="themtin" value="Thêm tin"></td>
                    </tr>
            </form>
                    
                    </table>
            </div>
            <div class="but">
            <button type="button" onclick="location.href='lietketin.php';" class="csw-btn-buttonXoa" >quản lý</button>
            </div>
            <br>
        </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
           <div class="container">
            <div class="row">
                <div class="row-col">
                    <h4></h4>
                    <ul>
                        <li>
                        <div class="logof"><img src="image/320577066_568785604679266_5437479403153405636_n.png" style="width:100px"></div>
                        </li>
                    </ul>
                </div>
                <div class="row-col">
                    <ul>
                        <a href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-col">
                    <h4>Liên Hệ</h4>
                    <ul>
                        <li><p>Địa chỉ: 390 Hoàng Văn Thụ, Phường 4,Tân Bình,TP.Hồ Chí Minh</p></li>
                        <li>  <p>SĐT:0981814415</p> </li>
                        <li><p>Gmail:vinhkhang050104@gmail.com</p></li>
                        <a href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-col">
                    <h4>Mạng Xã Hội </h4>
                    <ul>
                        <li> <a href="https://www.facebook.com/banhmi0501"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li> <a href="https://www.youtube.com"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        <li>  <a href="https://www.instagram.com/banh_mieii/"><ion-icon name="logo-instagram"></ion-icon></p> </li>
                        <a href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-col">
                    <ul>
                        <li> <h6>Công Ty TNHH 1TV SOLITUDE MOCHI</p></li>
                        <li><h6>COPYRIGHT COPYRIGHT © 2023 SOLITUDE MOCHI</h6></li>
                        <a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
           </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    </script>
    </body>
   
</html>