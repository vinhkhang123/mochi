<?php
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
    $sql_Sua_sp="SELECT * FROM sanpham WHERE id_MonAn='$_GET[idmonan]' LIMIT 1 ";
    $query_Sua_sp=mysqli_query($conn,$sql_Sua_sp);
    ?>
    <script src="java.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <?php
    ?>
    <style>
    </style>
    <title>Sửa</title>
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
                    <a href="tintuc/tintuc.php">Tin Tức</a>
                        <a href="lietke.php?action=dangxuat">Đăng Xuất</a>
                        <div class="HoatAnh start-home"></div>
                </nav>    
        
            </div>
        </div>
        <div id="main">
        <h1 id="ha">Sửa Món Ăn</h1>
            <div class="bang">
                <table style="witdth:100%" border="1" text-align:center>
                <?php
                while($row=mysqli_fetch_array($query_Sua_sp))
                {
                ?>
            <form method="POST" action="XuLy.php?idmonan=<?php echo $row['id_MonAn'] ?>" enctype="multipart/form-data">
            <tr>    
                        <td>Mã Món:</td>
                        <td><input type="text" value="<?php echo $row['MaMonAn'] ?>" name="MaMonAn"></td>
                    </tr>
                    <tr>    
                        <td>Hình Ảnh:</td>
                        <td><input type="file" name="HinhAnh"><img src="ThemHinh/<?php echo $row['HinhAnh'] ?>"width="150px"></td>
                    </tr>
                    <tr>    
                        <td>Tên Món:</td>
                        <td><input type="text" value="<?php echo $row['TenMon'] ?>" name="TenMon"></td>
                    </tr>
                    <tr>    
                        <td>Giá:</td>
                        <td><input type="text" value="<?php echo $row['Gia'] ?>" name="Gia"></td>
                    </tr>
                    <tr>    
                        <td>Số Lượng:</td>
                        <td><input type="text" value="<?php echo $row['SoLuong'] ?>" name="SoLuong"></td>
                    </tr>
                    <tr>    
                        <td>Mô tả:</td>
                        <td><textarea rows="10" name="MoTa" style="resize:none"><?php echo $row['MoTa'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input onclick="sua()" type="submit" name="suasanpham" value="Sửa"></td>
                    </tr>
                    <?php
                    
                    }
                    ?>
            </form>
                    
                    </table>
            </div>
            <div class="but">
            <button type="button" onclick="location.href='them.php';" class="csw-btn-buttonThem" >Thêm</button>
            <button type="button" onclick="location.href='xoa.php';" class="csw-btn-buttonXoa" >Xóa</button>
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