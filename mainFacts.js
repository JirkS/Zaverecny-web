function getRandomNum() {
    let min = 400;
    let max = 2000;
    return Math.round(Math.random() * (max - min) + min);
}

let heightOfImg = 600;
$(".imgLeft1").hide(0);
$(".imgLeft2").hide(0);
$(".imgLeft3").hide(0);
$(".imgRight1").hide(0);
$(".imgRight2").hide(0);
$(".imgRight3").hide(0);


$(document).ready(function () {
    let il1 = getRandomNum();
    let il2;
    let il3;
    do {
        il2 = getRandomNum();
    }
    while (splitNum(il1, il2) < heightOfImg);
    do {
        il3 = getRandomNum();
    }
    while (splitNum(il1, il3) < heightOfImg || splitNum(il2, il3) < heightOfImg);
    $(".imgLeft1").css({top: il1});
    $(".imgLeft2").css({top: il2});
    $(".imgLeft3").css({top: il3});

    let ir1 = getRandomNum();
    let ir2;
    let ir3;
    do {
        ir2 = getRandomNum();
    }
    while (splitNum(ir1, ir2) < heightOfImg);
    do {
        ir3 = getRandomNum();
    }
    while (splitNum(ir1, ir3) < heightOfImg || splitNum(ir2, ir3) < heightOfImg);
    $(".imgRight1").css({top: ir1});
    $(".imgRight2").css({top: ir2});
    $(".imgRight3").css({top: ir3});

    if(window.innerWidth > 1500){
        $(".imgLeft1").fadeIn(300);
        $(".imgLeft2").fadeIn(300);
        $(".imgLeft3").fadeIn(300);
        $(".imgRight1").fadeIn(300);
        $(".imgRight2").fadeIn(300);
        $(".imgRight3").fadeIn(300);
    }
});


function splitNum(num1, num2){
    let tmp = num1 - num2;
    if(tmp < 0){
        tmp *= -1;
    }
    return tmp;
}