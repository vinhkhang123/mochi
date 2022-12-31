<html>
    <head>
    <?php
    include 'C:\xampp\htdocs\baitap\connect\config.php';
    $sql_sp="SELECT * FROM sanpham ";
    $query_sp=mysqli_query($conn,$sql_sp);
    ?>
    <link rel="stylesheet" type="text/css" href="menustyle.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <?php
    ?>
    <style>
  
    </style>
    <title>MeNu</title>
    </head>
    <body>
    <div class="wrapper">
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
            <div class="maincontent">
                <ul class="product_list">
                    <?php 
                    while($row_sp = mysqli_fetch_array($query_sp))
                    {
                        ?>
                    <li>
                        <a href="">
                            <img src="ThemHinh/<?php echo $row_sp['HinhAnh'] ?>">
                            <b><p class="Ten_sp">Tên Món Ăn:<?php echo $row_sp['TenMon'] ?></p>
                            <p class="Gia">Giá :<?php echo number_format($row_sp['Gia'],0,',','.').' vnđ' ?></p>
                            <p class="Mo_ta">Mô Tả:<?php echo $row_sp['MoTa'] ?></p>
                            </b>
                        </a>
                    </li> 
                    <?php
                    }
                    ?>   
                </ul>

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