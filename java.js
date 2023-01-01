
function them()
{
    var arr = document.getElementsByTagName("input");
    var MaMonAn = arr[0].value;
    var hinhanh = arr[1].value;
    var tenmon = arr[2].value;
    var gia = arr[3].value;
    var soluong = arr[4].value;
    var mota = arr[5].value;
    if(MaMonAn=="")
    {
        alert("vui lòng nhập mã món");
        return false;
    }else if(hinhanh=="")
    {
        alert("vui lòng nhập hình ảnh");
        return;
    }else if(tenmon=="")
    {
        alert("vui lòng nhập tên món");
        return;
    }
    else if(gia=="")
    {
        alert("vui lòng nhập  giá");
    }else if(soluong=="")
    {
        alert("vui lòng nhập số lượng");
    }
    else if(mota=="")
    {
        alert("vui lòng nhập mô tả")
    }
}

function sua()
{
    var arr = document.getElementsByTagName("input");
    var MaMonAn = arr[0].value;
    var hinhanh = arr[1].value;
    var tenmon = arr[2].value;
    var gia = arr[3].value;
    var soluong = arr[4].value;
    var mota = arr[5].value;
    if(MaMonAn=="")
    {
        alert("vui lòng nhập mã món");
        return false;
    }else if(hinhanh=="")
    {
        alert("vui lòng nhập hình ảnh");
        return;
    }else if(tenmon=="")
    {
        alert("vui lòng nhập tên món");
        return;
    }
    else if(gia=="")
    {
        alert("vui lòng nhập  giá");
    }else if(soluong=="")
    {
        alert("vui lòng nhập số lượng");
    }
    else if(mota=="")
    {
        alert("vui lòng nhập mô tả")
    }
}