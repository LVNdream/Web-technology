var giohang = new Array();
var gh = sessionStorage.getItem("giohang");
var giohangt = JSON.parse(gh);
function themvaogiohang(x) {
    var sanpham = x.parentElement.children;
    var hinhanh = sanpham[0].src;
    var idsp = sanpham[1].innerText;
    var ten = sanpham[2].innerText;
    var gia = sanpham[3].innerText;
    var sl = 1;
    var sp = new Array(hinhanh, idsp, ten, gia, sl);
    var kt=0;
    for(let i=0; i<giohang.length; i++){
        if(giohang[i][1] == idsp){
            kt = 1;
            break;
        }
    }
    if(kt==0){
        giohang.push(sp);
        showcountsp();
    }
    sessionStorage.setItem("giohang", JSON.stringify(giohang));
    console.log(giohang[0][1]);
}

function showcountsp() {
    document.getElementById("cart-count").innerText = giohang.length; 
}
if(giohangt.length !=0){
    document.getElementById("cart-count").innerText = giohangt.length;
}