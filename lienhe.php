<!DOCTYPE html>
<html>
    <title>Solitude</title>
    <head> 
    <?php
    include 'connect\config.php';
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
                    <a href="lienhe.php">Liên Hệ</a>
                    <a href="tintuc.php">Tin Tức</a>
                    <div class="HoatAnh start-home"></div>
            </nav>    
       
        </div>
    </div>
        <div class="body">
            <div class="lhlmao">
            <h4>Liên Hệ</h4>
                    <ul>
                        <li><p>Địa chỉ: 390 Hoàng Văn Thụ, Phường 4,Tân Bình,TP.Hồ Chí Minh</p></li>
                        <li>  <p>SĐT:0981814415</p> </li>
                        <li><p>Gmail:vinhkhang050104@gmail.com</p></li>
                        <li><a href="https://www.facebook.com/banhmi0501">facebook:  Facebook.com/banhmi0501</a></li>
                        <li><a href="https://www.youtube.com">youtube: youtube.com</a></li>
                        <li><a href="https://www.instagram.com/banh_mieii/">instagram: instagram.com/banh_mieii/</a></li>
                        <div class="popup" onclick="myFunction()">              
                        <img src="image/Screenshot_20230101_050239.png" style="width:200px;height:200px">
                        <span class="popuptext" id="myPopup"><img src="image/Screenshot_20230101_050239.png" style="width:700px;height:500px"></span>
                        </div>
                        <a href="#"></a>
                        </li>
                    </ul>
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
        <script>
        function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
        }
        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
   
</html>