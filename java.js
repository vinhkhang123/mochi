
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
        return false;
    }else if(tenmon=="")
    {
        alert("vui lòng nhập tên món");
        return false;
    }
    else if(gia=="")
    {
        alert("vui lòng nhập  giá");
        return false;

    }else if(soluong=="")
    {
        alert("vui lòng nhập số lượng");
        return false;

    }
    else if(mota=="")
    {
        alert("vui lòng nhập mô tả");
        return false;

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
    }
    else if(hinhanh=="")
    {
        alert("vui lòng nhập hình");
        return false;
    }else if(tenmon=="")
    {
        alert("vui lòng nhập tên món");
        return false;
    }
    else if(gia=="")
    {
        alert("vui lòng nhập  giá");
        return false;

    }else if(soluong=="")
    {
        alert("vui lòng nhập số lượng");
        return false;

    }
    else if(mota=="")
    {
        alert("vui lòng nhập mô tả");
        return false;

    }
    
}
function themtin()
{
    var arr = document.getElementsByTagName("input");
    var tenbaiviet = arr[0].value;
    var hinhanh = arr[1].value;
    var tomtat = arr[2].value;
    var noidung = arr[3].value;
    if(tenbaiviet=="")
    {
        alert("vui lòng nhập tên bài:");
        return false;
    }else if(hinhanh=="")
    {
        alert("vui lòng nhập hình ảnh");
        return false;
    }else if(tomtat=="")
    {
        alert("vui lòng nhập tóm tắt");
        return false;
    }
    else if(noidung=="")
    {
        alert("vui lòng nhập nội dung");
        return false;

    }
}
