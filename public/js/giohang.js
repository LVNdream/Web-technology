var gh = sessionStorage.getItem("giohang");
var giohang = JSON.parse(gh);
var sanpham = document.getElementById("mycart").children;

function showgiohangtrangthanhtoan(){
    var ttgh = "";
    var tt = 0;
    for(i=0; i<giohang.length; i++){
        ttgh+= '<tr>'+
        '<td>'+
        '<img class="product__item-img" src="'+giohang[i][0]+'" alt="">'+
        '</td>'+
        '<td hidden><span class="product__item-name">'+giohang[i][1]+'</span></td>'+
        '<td><span class="product__item-name">'+giohang[i][2]+'</span></td>'+
        '<td><span class="product__item-price>">'+giohang[i][3]+'</span><sup>đ</sup></td>'+
        '<td><input class="product__item-count" type="number" min="0" value="1"></td>'+
        '<td><i onclick="delete_product(this)" class="product__item-delete fa-regular fa-circle-xmark"></i></td>'+
        '</tr>';
    }
    document.getElementById("cart-count").innerText = giohang.length;
    document.getElementById("mycart").innerHTML = ttgh;
    for(i=0; i<giohang.length; i++){
        var gia = giohang[i][3];
        gia = gia.split(",").join("");
        gia = parseInt(gia, 10);
        tt += (tinhtong(i)*gia);
    }
    tt = parseInt(tt, 10);
    tt = tt.toLocaleString();
    document.getElementById("tongtien").innerText = tt;
}

function tinhtong(x){
    var soluong = sanpham[x].children[4].children[0].value;
    return soluong;
}


function update(){
    var tt = 0;
    for(i=0; i<sanpham.length; i++){
        var soluong = sanpham[i].children[4].children[0].value;
        giohang[i][4] = soluong;
        var gia = sanpham[i].children[3].children[0].innerText;
        gia = gia.split(",").join("");
        gia = parseInt(gia, 10);
        tt += (soluong*gia);
    }
    tt = parseInt(tt, 10);
    tt = tt.toLocaleString();
    sessionStorage.setItem("giohang", JSON.stringify(giohang))
    document.getElementById("tongtien").innerText = tt;
}

function delete_product(x){
    var tr = x.parentElement.parentElement;
    var idsp = tr.children[1].children[0].innerText;
    tr.remove();
    for(let i=0; i< giohang.length; i++){
        if(giohang[i][1] == idsp){
            giohang.splice(i,1);
        }
    }
    update();
    sessionStorage.setItem("giohang", JSON.stringify(giohang));
    document.getElementById("cart-count").innerText = giohang.length;
}
showgiohangtrangthanhtoan();




