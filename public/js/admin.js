function hienThiChucNang1(){
    var feature__list = document.getElementsByClassName("main__content-left-list");
    if(feature__list[0].style.display == "none"){
        feature__list[0].style.display = "block";
    }else{
        feature__list[0].style.display = "none";
    }
}

function hienThiChucNang2(){
    var feature__list = document.getElementsByClassName("main__content-left-list");
    if(feature__list[1].style.display == "none"){
        feature__list[1].style.display = "block";
    }else{
        feature__list[1].style.display = "none";
    }
}

function searchProduct(){
    var infor = document.getElementById("update-product");
    if(infor.style.display == "none"){
        infor.style.display = "block";
    }else{
        infor.style.display = "none";
    }
}

function updateProduct(){
    var infor_update = document.getElementById("themsp");
    if(infor_update.style.display == "none"){
        infor_update.style.display = "block";
    }else{
        infor_update.style.display = "none";
    }
}

function searchReceipt(){
    var infor = document.getElementById("update-receipt");
    if(infor.style.display == "none"){
        infor.style.display = "block";
    }else{
        infor.style.display = "none";
    }
}

function updateReceipt(){
    var infor_update = document.getElementById("infor_receipt-update");
    if(infor_update.style.display == "none"){
        infor_update.style.display = "block";
    }else{
        infor_update.style.display = "none";
    }
}

// function searchReceipt(){
//     var infor = document.getElementById("infor_receipt");
//     if(infor.style.display == "none"){
//         infor.style.display = "block";
//     }else{
//         infor.style.display = "none";
//     }
// }

// function updateReceipt(){
//     var infor = document.getElementById("infor_receipt");
//     var infor_update = document.getElementById("infor_receipt-update");
//     if(infor.style.display == "block"){
//         infor.style.display = "none";
//     }else{
//     }
//     if(infor_update.style.display == "none"){
//         infor_update.style.display = "block";
//     }else{
//         infor_update.style.display = "none";
//     }
// }

function showthemsp(){
    var themsp = document.getElementById("themsp");
    if(themsp.style.display == "none"){
        themsp.style.display = "block";
    }else{
        themsp.style.display = "none";
    }
}

function showsuasp(){
    var suasp = document.getElementById("suasp");
    if(suasp.style.display == "none"){
        suasp.style.display = "block";
    }else{
        suasp.style.display = "none";
    }
}

function showcapnhatdh(){
    var capnhatdh = document.getElementById("capnhatdh");
    if(capnhatdh.style.display == "none"){
        capnhatdh.style.display = "block";
    }else{
        capnhatdh.style.display = "none";
    }
}