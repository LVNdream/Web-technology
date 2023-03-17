function donhang(){
    var gh = sessionStorage.getItem("giohang");
    var giohang = JSON.parse(gh);
    var sl = sessionStorage.getItem("ds_soluong");
    var soluong = JSON.parse(sl);
    var pt = sessionStorage.getItem("pt_thanhtoan");
    var pt_thanhtoan = JSON.parse(pt);
    var kh = sessionStorage.getItem("khachhang");
    var khachhang = JSON.parse(kh);
    var ttgh = "";
    var tt = 0;
    for(i=0; i<giohang.length; i++){
        ttgh+= '<tr>'+
        '<td class="gray-color"><span>'+giohang[i][2]+'<span>'+'  x'+soluong[i]+'</span></span></td>'+
        '<td class="fw-6"><span >'+giohang[i][3]+'</span><sup>đ</sup></td>'+
    '</tr>';
    }
    document.getElementById("cart-count").innerText = giohang.length;
    document.getElementById("donhang").innerHTML = ttgh;
    for(i=0; i<giohang.length; i++){
        var gia = giohang[i][3];
        gia = gia.split(",").join("");
        gia = parseInt(gia, 10);
        tt += (soluong[i]*gia);
    }
    tt = parseInt(tt, 10);
    tt = tt.toLocaleString();
    document.getElementById("tongtiendonhang").innerText = tt;
    document.getElementById("tiendonhang").innerText = tt;
    // console.log(pt_thanhtoan[0]);
    // console.log(giohang[0]);
    document.getElementById("phuongthucthanhtoan").innerText = pt_thanhtoan[0];
    // document.getElementById("ten-kh").innerText = khachhang[0];
    // document.getElementById("diachi-kh").innerText = khachhang[1];
    // document.getElementById("sdt-kh").innerText = khachhang[2];
    // document.getElementById("email-kh").innerText = khachhang[3];
    // document.getElementById("ghichu-kh").innerText = khachhang[4];
}
 donhang();