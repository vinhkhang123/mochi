<?php
include 'C:\xampp\htdocs\baitap\connect\config.php';
$MaMonAn= $_POST['MaMonAn'];
$HinhAnh=$_FILES['HinhAnh']['name'];
$HinhAnh_tmp=$_FILES['HinhAnh']['tmp_name'];
$HinhAnh_time=time().'_'.$HinhAnh;
$TenMon=$_POST['TenMon'];
$Gia=$_POST['Gia'];
$SoLuong=$_POST['SoLuong'];
$MoTa=$_POST['MoTa'];
$id_MonAn=$_GET['idmonan'];
if(isset($_POST['themMon']))
{
    $sql_them="INSERT INTO sanpham(MaMonAn,HinhAnh,TenMon,Gia,SoLuong,MoTa) VALUE ('".$MaMonAn."','".$HinhAnh_time."','".$TenMon."','".$Gia."','".$SoLuong."','".$MoTa."')";
    mysqli_query($conn,$sql_them);
    move_uploaded_file($HinhAnh_tmp,'ThemHinh/'.$HinhAnh_time);
   header('Location:http://localhost/baitap/lietke.php');
}elseif(isset($_POST['suasanpham']))
{
    if($HinhAnh!=''){
        move_uploaded_file($HinhAnh_tmp,'ThemHinh/'.$HinhAnh_time);
    $sql_update ="UPDATE sanpham SET MaMonAn='".$MaMonAn."',HinhAnh='".$HinhAnh_time."',TenMon='".$TenMon."',Gia='".$Gia."',SoLuong='".$SoLuong."',MoTa='".$MoTa."' WHERE id_MonAn='$_GET[idmonan]'";
    $sql="SELECT * FROM sanpham WHERE id_MonAn='$_GET[idmonan]'LIMIT 1";
    $query=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query))
    {
        unlink('ThemHinh/'.$row['HinhAnh']);
    }
    }else{
        $sql_update ="UPDATE sanpham SET MaMonAn='".$MaMonAn."',TenMon='".$TenMon."',Gia='".$Gia."',SoLuong='".$SoLuong."',MoTa='".$MoTa."' WHERE id_MonAn='$_GET[idmonan]'";
    }
    mysqli_query($conn,$sql_update);
    header('Location:http://localhost/baitap/lietke.php');
}else{
    $id=$_GET['idmonan'];
    $sql="SELECT * FROM sanpham WHERE id_MonAn='$id' LIMIT 1";
    $query=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query))
    {
        unlink('ThemHinh/'.$row['HinhAnh']);
    }
    $sql_xoa="DELETE  FROM sanpham WHERE id_MonAn='$id'";
    mysqli_query($conn,$sql_xoa);
    header('Location:http://localhost/baitap/lietke.php');
}
?>