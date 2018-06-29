/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-17 20:37:32
 * @version $Id$
 */


 $(init)


 function init() {

 	$(".product-color1").css("border-color","#2aad6f");
 	$(".product-bar-span1").css("background-color","#409f73");
 	$(".product-bar-span1").css("color","#ffffff");
 	$(".product-bar-span1").css("border-bottom","4px solid #aed4c2");
  $("#product-smallimg1").css("border-color","#2aad6f");
  $(".product-details").show();
  $(".product-standard").hide();
  $(".product-usr-evaluate").hide();
  $(".product-bar-span4").hide();
  $("body").on('click', '.product-color1', productcolor1);
  $("body").on('click', '.product-minus', productminus);
  $("body").on('click', '.product-add', productadd);
  $("body").on('click', '.product-bar-span1', productbarspan1);
  $("body").on('click', '.product-bar-span3', productbarspan3);
  $("body").on('click', '.img-circle', showproduct);
  $("body").on('click', '#product-smallimg1', smallimg1);
  $("body").on('click', '#product-smallimg2', smallimg2);
 
  $("body").on('click', '.product-bar-span4', productbarspan4);

}

function productbarspan4(e){

  document.getElementById("product-info-cont").scrollIntoView();
}



function smallimg1(e){

 $("#product-smallimg1").css("border-color","#2aad6f");
 $("#product-smallimg2").css("border-color","#f2f2f2");
 $("#product-smallimg3").css("border-color","#f2f2f2");
 $("#product-smallimg4").css("border-color","#f2f2f2");
}
function smallimg2(e){
 $("#product-smallimg2").css("border-color","#2aad6f");
 $("#product-smallimg1").css("border-color","#f2f2f2");
 $("#product-smallimg3").css("border-color","#f2f2f2");
 $("#product-smallimg4").css("border-color","#f2f2f2");
}

function productcolor1(e) {

  $(".product-color1").css("border-color","#2aad6f");
  $(".product-color2").css("border-color","#e2e2e2");
  $(".product-color3").css("border-color","#e2e2e2");
  $("#product-smallimg1").css("border-color","#2aad6f");
  $("#product-smallimg2").css("border-color","#f2f2f2");
  $(".product-bigimg").attr("src","img/1.png");
  $("#product-smallimg1").attr("src","img/1.png");
  $("#product-smallimg2").attr("src","img/2.png");
  $(".product-details1").attr("src","img/商品详情1.jpg");
  $(".product-details2").attr("src","img/商品详情2.jpg");
  $(".product-details3").attr("src","img/商品详情3.jpg");
  $(".product-details4").attr("src","img/商品详情4.jpg");
}

function productminus(e){

  var a=$(".input-numofproduct").val();
  if(a==1){
   $(".product-minus").css("background","#f0f0f0");
 }
 else if(a>=2){

   --a;
   $(".input-numofproduct").val(a);

 }
}

function productadd(e){
  var a=$(".input-numofproduct").val();
  ++a;
  $(".input-numofproduct").val(a);
  $(".product-minus").css("background","#ffffff");
}
function productbarspan1(e){
  $(".product-bar-span1").css("background-color","#409f73");
  $(".product-bar-span1").css("color","#ffffff");
  $(".product-bar-span1").css("border-bottom","4px solid #aed4c2");
  $(".product-bar-span3").css("background-color","#ffffff");
  $(".product-bar-span3").css("color","black");
  $(".product-bar-span3").css("border-bottom","0");
  $(".product-details").show();
  $(".product-usr-evaluate").hide();
  document.getElementById("poduct-bar-before").scrollIntoView();
}

function productbarspan3(e){
  $(".product-bar-span1").css("background-color","#ffffff");
  $(".product-bar-span1").css("color","black");
  $(".product-bar-span1").css("border-bottom","0");
  $(".product-bar-span3").css("background-color","#409f73");
  $(".product-bar-span3").css("color","#ffffff");
  $(".product-bar-span3").css("border-bottom","4px solid #aed4c2");
  $(".product-details").hide();
  $(".product-usr-evaluate").show();
  document.getElementById("poduct-bar-before").scrollIntoView();
}


$(function(){  
  var winHeight = $(document).scrollTop();

  $(window).scroll(function() {
   var scrollY = $(document).scrollTop();
    // 获取垂直滚动的距离，即滚动了多少

    if (scrollY > 1040){ //如果滚动距离大于550px则隐藏，否则删除隐藏类
    	$('.product-bar').addClass('showed');
      $(".product-bar-span4").show();
    } 
    else {
    	$('.product-bar').removeClass('showed');
      $(".product-bar-span4").hide();
    }



  });
});

function showproduct(e) {
 var url=$(e.target).attr("src");
 $(".product-bigimg").attr("src",url);


}