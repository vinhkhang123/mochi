<html>
    <head>
    <?php
    include 'C:\xampp\htdocs\baitap\connect\config.php';
    $sql_sp="SELECT * FROM monan ";
    $query_sp=mysqli_query($conn,$sql_sp);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <?php
    ?>
    <style>
    </style>
    <title>Xóa</title>
    </head>
    <body>
    <div class="body" style=" background-color:antiquewhite;">
        <div class="menu">
            <div class="MenuItem"> 
                
            <label for="openNaV" class="openNaV">
                <div class="logo"><img src="image/320577066_568785604679266_5437479403153405636_n.png" style="width:100px;"></div>
            </label>
                <nav>
                        <a href="index.php">Trang Chủ</a>
                        <a href="menu.php">Menu</a>
                        <a>Liên Hệ</a>
                        <a>Đăng Nhập</a>
                        <div class="HoatAnh start-home"></div>
                </nav>    
        
            </div>
        </div>
        <div id="main">
        <h1 id="ha">Xóa Món Ăn</h1>
            <div class="bang">
                <table style="witdth:100%" border="1" text-align:center>
            <form method="POST" action="XuLy.php" enctype="multipart/form-data">
            <tr>    
                        <td>Mã Món:</td>
                        <td><input type="text" name="MaMonAn"></td>
                    </tr>
                    <tr>    
                        <td>Hình Ảnh:</td>
                        <td><input type="file" name="HinhAnh"></td>
                    </tr>
                    <tr>    
                        <td>Tên Món:</td>
                        <td><input type="text" name="TenMon"></td>
                    </tr>
                    <tr>    
                        <td>Giá:</td>
                        <td><input type="text" name="Gia"></td>
                    </tr>
                    <tr>    
                        <td>Số Lượng:</td>
                        <td><input type="text" name="SoLuong"></td>
                    </tr>
                    <tr>    
                        <td>Mô tả:</td>
                        <td><textarea rows="10" name="MoTa" style="resize:none"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="xoa" value="Xóa Món Ăn"></td>
                    </tr>
            </form>
                    
                    </table>
            </div>
            <div class="but">
            <button type="button" onclick="location.href='sua.php';" class="csw-btn-buttonSua" >Sửa Món Ăn</button>
            <button type="button" onclick="location.href='them.php';" class="csw-btn-buttonXoa" >Thêm Món Ăn</button>
            </div>
            <br>
        </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
                    <p>Công Ty TNHH 1TV SOLITUDE MOCHI</p>
                    <p>Địa chỉ: 390 Hoàng Văn Thụ, Phường 4,Tân Bình,TP.Hồ Chí Minh</p>
        </div>
    </div>
    </body>
   
</html>