<p>chi tiết món ăn</p>
<link rel="stylesheet" type="text/css" href="menustyle.css"> 
<?php
    include 'C:\xampp\htdocs\baitap\connect\config.php';
    $sql_chitiet="SELECT * FROM sanpham WHERE id_MonAn='$_GET[id]' LIMIT 1 ";
    $query_chitiet=mysqli_query($conn,$sql_chitiet);
    
    while($row_sp = mysqli_fetch_array($query_chitiet)){
?>
 <body style="background-color:#FFE4E1;">
    <div class="menu">
        <div class="MenuItem"> 
              
        <label for="openNaV" class="openNaV">
            <div class="logo"><img src="image/320577066_568785604679266_5437479403153405636_n.png" style="width:100px"></div>
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
    <div class="body">
        <div class="card">
                <div class="thumb"> 
                    <img  src="ThemHinh/<?php echo $row_sp['HinhAnh'] ?>">
                </div>
                    <div class="desc">
                        <h3>Thông Tin Món Ăn</h3>
                        <div class="name"><b><p class="Ten_sp">Tên Món Ăn:<?php echo $row_sp['TenMon'] ?></p></div>
                        <p class="Mo_ta">Mô Tả:<?php echo $row_sp['MoTa'] ?></p>
                        <div class="other-info">
                            <span class="Gia"><?php echo number_format($row_sp['Gia'],0,',','.').' vnđ' ?></span>
                        </div>
                    </div>
            </div>
    <?php
    }
    ?>
    </div>
</body>
        