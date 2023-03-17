function thanhtoan() {
    var gh = sessionStorage.getItem("giohang");
    var giohang = JSON.parse(gh);
    var ttgh = "";
    var tt = 0;
    //console.log(giohang);
    for (i = 0; i < giohang.length; i++) {
        var gia = giohang[i][3];
        gia = parseInt(gia, 10);
        ttgh += '<tr>' +
            '<td class="gray-color"><span>' + giohang[i][2] + '<span>' + '  x' + (giohang[i][4]) + '</span></span></td>' +
            '<td class="fw-6"><span >' + (gia * (giohang[i][4])) + '</span><sup>đ</sup></td>' +
            '</tr>';
    }
    document.getElementById("cart-count").innerText = giohang.length;
    document.getElementById("donhang").innerHTML = ttgh;
    for (i = 0; i < giohang.length; i++) {
        tt += ((parseInt(giohang[i][4])) * giohang[i][3]);
    }
    //console.log(tt);
    tt = parseInt(tt, 10);
    tt = tt.toLocaleString();
    document.getElementById("tongtiendonhang").innerText = tt;
    document.getElementById("tiendonhang").innerText = tt;
}
var khachhang = new Array();
function dathang() {
    var thongtin = document.getElementById("thongtinkh").children;
    var ten = thongtin[0].children[1].value;
    var diachi = thongtin[1].children[1].value;
    var sdt = thongtin[2].children[1].value;
    var email = thongtin[3].children[1].value;
    var ghichu = thongtin[4].children[1].value;
    var khachhang = new Array();
    khachhang.push(ten, diachi, sdt, email, ghichu);
    sessionStorage.setItem("khachhang", JSON.stringify(khachhang));
    var loaithanhtoan = document.getElementsByName("payment");
    var pt_thanhtoan = new Array();
    for (let i = 0; i < loaithanhtoan.length; i++) {
        if (loaithanhtoan[i].checked === true) {
            pt_thanhtoan.push(loaithanhtoan[i].value);
        }
    }
    sessionStorage.setItem("pt_thanhtoan", JSON.stringify(pt_thanhtoan));
}

// function showformsp() {
//     var gh = sessionStorage.getItem("giohang");
//     var giohang = JSON.parse(gh);
//     var tongtien = 0;

//     let payForm = $('#tongsanpham');
//     console.log(payForm);
//     if (giohang.length != 0) {
//         // console.log(customerCart);
//         for (let i = 0; i < giohang.length; i++) {
//             payForm.append($(`<input type="text" class="form-control input--infor" name="masp" value="${giohang[i][1]}">`));
//             payForm.append($(`<input type="text" class="form-control input--infor" name="soluong" value="${giohang[i][4]}">`));
//             tongtien += ((giohang[i][3]) * (giohang[i][4]));
            
//         }
//         payForm.append($(`<input type="text" class="form-control input--infor" name="tongtien" value="${tongtien}">`));

//     }
// }

// dathang();
thanhtoan();
//showformsp();