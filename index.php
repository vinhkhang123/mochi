<!<!DOCTYPE html>
<html>
    <title>Solitude</title>
    <head> 
    <?php
    include 'C:\xampp\htdocs\baitap\connect\config.php';
    $sql_sp="SELECT HinhAnh FROM sanpham ORDER BY id_MonAn DESC limit 3";
    $query_sp=mysqli_query($conn,$sql_sp);
    ?>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    </head>
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
                    <a>Tin Tức</a>
                    <div class="HoatAnh start-home"></div>
            </nav>    
       
        </div>
    </div>
        <div class="body">
            <div class="GioiThieu">
                <div style="width:70%;float:left"class="GioiThieuT">
                        <h3>Chào Mừng Bạn Đã Đến Với Solitude MoChi </h3>
                        <p>Mochi là một loại bánh truyền thống của Nhật Bản với lớp vỏ bằng bột gạo dẻo thuần khiết là  m từ gạo Mochi. Từ ngàn xưa Mochi đã là món bánh của sự gắn kết gia đình và bè bạn. Ngày nay, mỗi chiếc bánh tượng trưng cho lời cầu chúc may mắn, thịnh vượng và hơn tất cả, là sự sum vầy - Mochi mang đến sự gắn bó và chia sẻ niềm vui.

    Sự tuyệt hảo của Mochi có thể cảm nhận ngay ở miếng đầu tiên. Nhưng bạn khó có thể biết những bí quyết riêng ẩn trong hương vị ngọt ngào quyến rũ ấy. Điều khiến Mochi thơm ngon đặc biệt chính là ở sự khéo léo và chỉnh chu đến từng chi tiết trong quá trình tạo ra chiếc bánh. Chúng tôi tin làm bánh Mochi là một môn nghệ thuật - bắt đầu bằng những nguyên liệu cao cấp.</p>
                <div class="sos">
                <div class="GTMonMoi"><p> Món mới của chúng mình</p></div>
                <?php 
                while($row_sp = mysqli_fetch_array($query_sp))
                {
                    ?>
                    <a href="menu.php">
                        <img src="ThemHinh/<?php echo $row_sp['HinhAnh'] ?>"style="width:310px;height:200px; padding-top: 4px; padding-left:4px;">
                    </a>
                <?php
                }
                ?>
                <button type="button" onclick="location.href='menu.php';" class="csw-btn-button" >Cùng mình xem qua Menu nào</button>
                </div>
                </div>
                <div style="width:30%;float:right;" class="GioiThieuP">
                        <img src="image/desktop-wallpaper-pin-on-mochi-mochi-panda-cute-mochi-thumbnail.jpg">
            </div>
                </div>
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
                        <li><h6>COPYRIGHT COPYRIGHT © 2023 SOLITUDE MOCHI</h6></li>
                    </ul>
                </div>
                <div class="row-col">
                    <h4>Liên Hệ</h4>
                    <ul>
                        <li> <p>Công Ty TNHH 1TV SOLITUDE MOCHI</p></li>
                        <li><p>Địa chỉ: 390 Hoàng Văn Thụ, Phường 4,Tân Bình,TP.Hồ Chí Minh</p></li>
                        <li>  <p>SĐT:0981814415</p> </li>
                        <a href="#"></a>
                        </li>
                    </ul>
                </div>
               
            </div>
           </div>

        </div>
    </body>
   
</html>