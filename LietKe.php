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
    $sql_lietke_sp="SELECT * FROM sanpham ";
    $query_lietke_sp=mysqli_query($conn,$sql_lietke_sp);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <?php
    ?>
    <style>
    </style>
    <title>Quản Lý</title>
    </head>
    <body style=" background-color:#FFE4E1;">
    <div class="body">
        <div class="menu">
            <div class="MenuItem"> 
                
            <label for="openNaV" class="openNaV">
                <div class="logo"><img src="image/320577066_568785604679266_5437479403153405636_n.png" style="width:100px;"></div>
            </label>
                <nav>
                        <a href="index.php">Trang Chủ</a>
                        <a href="menu.php">Menu</a>
                        <a href="lienhe.php">Liên Hệ</a>
                        <a href="lietke.php?action=dangxuat">Đăng Xuất</a>
                        <div class="HoatAnh start-home"></div>
                </nav>    
        
            </div>
        </div>
        <div id="main">
        <h1 id="ha">Sản Phẩm</h1>
        <div class="but">
            <button type="button" onclick="location.href='them.php';" class="csw-btn-buttonThem" >Thêm</button>
            <button type="button" onclick="location.href='lietketin.php';" class="csw-btn-buttonThem" >Quản lý tin</button>
            </div>
            <div class="bang">
                <table style="witdth:100%" border="1" text-align:center>
                 <form method="POST" action="XuLy.php" enctype="multipart/form-data">
                    <tr>
                        <th>Mã Món</th>
                        <th>Tên Món</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Mô Tả</th>
                        <th>Quản Lý </th>
                    </tr>
                    <?php
                    $i=0;
                    while($row=mysqli_fetch_array($query_lietke_sp))
                    {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['TenMon'] ?></td>
                        <td><img src="ThemHinh/<?php echo $row['HinhAnh'] ?>"width="150px"></td>
                        <td><?php echo $row['Gia'] ?></td>
                        <td><?php echo $row['MoTa'] ?></td>
 
                        <td>
                            <a href="Sua.php?idmonan=<?php echo $row['id_MonAn']?>">Sửa</a>
                            <a onclick="return Del('<?php echo $row['TenMon'];?>')" href="XuLy.php?idmonan=<?php echo $row['id_MonAn']?>">Xóa</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                 </form>
                </table>
            </div>
            <br>
        </div>
        </div>
        <div class="clear"></div>
    </div>
    <script>
 function Del(name){
    return confirm("bạn có chắc muốn xóa món ăn:" + name+"?");
 }    
</script>
    </body>
   
</html>