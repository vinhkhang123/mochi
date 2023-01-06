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
    include 'connect\config.php';
    $sql_lietke_tin="SELECT * FROM tintuc ";
    $query_lietke_tin=mysqli_query($conn,$sql_lietke_tin);
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
    <title>Quản Lý tin</title>
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
                        <a href="lietke.php?action=dangxuat">Đăng Xuất <?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap'];} ?></a>
                        <div class="HoatAnh start-home"></div>
                </nav>    
        
            </div>
        </div>
        <div id="main">
        <h1 id="ha1">Tin tức</h1>
        <div class="but">
            <button type="button" onclick="location.href='lietke.php';" class="csw-btn-buttonquanlymon" >Quản lý món ăn</button>
            <button type="button" onclick="location.href='themtin.php';" class="csw-btn-buttonThem" >Thêm tin</button>
            </div>
            <div class="bang">
                <table style="witdth:1000px; word-wrap:break-word;" border="1" text-align:center 	 >
                 <form method="POST" action="XuLytin.php" enctype="multipart/form-data">
                    <tr>
                        <th>id</th>
                        <th>Tên Tin</th>
                        <th>Hình Ảnh</th>
                        <th>Tóm Tắt</th>
                        <th>nội dung</th>
                        <th>Quản Lý </th>
                    </tr>
                    <?php
                    $i=0;
                    while($row=mysqli_fetch_array($query_lietke_tin))
                    {
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['tenbaiviet'] ?></td>
                        <td><img src="ThemHinh/<?php echo $row['HinhAnh'] ?>"width="150px"></td>
                        <td><?php echo $row['tomtat'] ?></td>
                        <td><?php echo $row['noidung'] ?></td>
 
                        <td>
                            <a href="suatin.php?id=<?php echo $row['id']?>">Sửa</a>
                            <a onclick="return Del('<?php echo $row['tenbaiviet'];?>')" href="XuLytin.php?id=<?php echo $row['id']?>">Xóa</a>
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