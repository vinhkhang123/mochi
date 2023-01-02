<?php session_start(); error_reporting(0);?>
<?php
include 'connect/config.php';
$tenbaiviet= $_POST['tenbaiviet'];
$HinhAnh=$_FILES['HinhAnh']['name'];
$HinhAnh_tmp=$_FILES['HinhAnh']['tmp_name'];
$HinhAnh_time=time().'_'.$HinhAnh;
$tomtat=$_POST['tomtat'];
$noidung=$_POST['noidung'];
if(isset($_POST['themtin']))
{
if (empty($tenbaiviet) ||empty($HinhAnh) ||empty($HinhAnh_time) || empty($tomtat) || empty($noidung)) {
    header('Location:http://localhost/baitap/themtin.php');
    return false;
    echo '<script> alert("vui lòng nhập lại");</script>';
}else

    $sql_themtin="INSERT INTO tintuc(tenbaiviet,HinhAnh,tomtat,noidung) VALUE ('".$tenbaiviet."','".$HinhAnh_time."','".$tomtat."','".$noidung."')";
mysqli_query($conn,$sql_themtin);
move_uploaded_file($HinhAnh_tmp,'ThemHinh/'.$HinhAnh_time);
header('Location:http://localhost/baitap/lietketin.php');
}if(isset($_POST['suatintuc']))
{
    
    if($HinhAnh!=''){
        move_uploaded_file($HinhAnh_tmp,'ThemHinh/'.$HinhAnh_time);
    $sql_update ="UPDATE tintuc SET tenbaiviet='".$tenbaiviet."',HinhAnh='".$HinhAnh_time."',tomtat='".$tomtat."',noidung='".$noidung."' WHERE id='$_GET[id]'";
    $sql="SELECT * FROM tintuc WHERE id='$_GET[id]'LIMIT 1";
    $query=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query))
    {
        unlink('ThemHinh/'.$row['HinhAnh']);
    }
    }
    else{
        if (empty($tenbaiviet) || empty($tomtat) || empty($noidung) ) {
                   header('Location:http://localhost/baitap/lietketin.php');
        
            return false;
            echo '<script> alert("vui lòng nhập lại");</script>';
        }else
        $sql_update ="UPDATE tintuc SET tenbaiviet='".$tenbaiviet."',tomtat='".$tomtat."',noidung='".$noidung."' WHERE id='$_GET[id]'";
    }
    mysqli_query($conn,$sql_update);
    header('Location:http://localhost/baitap/lietketin.php');
}else{
    $id=$_GET['id'];
    $sql="SELECT * FROM tintuc WHERE id='$id' LIMIT 1";
    $query=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query))
    {
        unlink('ThemHinh/'.$row['HinhAnh']);
    }
    $sql_xoa="DELETE  FROM tintuc WHERE id='$id'";
    mysqli_query($conn,$sql_xoa);
    header('Location:http://localhost/baitap/lietketin.php');
}
?>