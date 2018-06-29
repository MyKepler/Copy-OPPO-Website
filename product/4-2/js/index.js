/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-17 20:37:32
 * @version $Id$
 */


 $(init)


 function init() {

 	$(".product-color2").css("border-color","#2aad6f");
  productcolor2();
 	$(".product-bar-span1").css("background-color","#409f73");
 	$(".product-bar-span1").css("color","#ffffff");
 	$(".product-bar-span1").css("border-bottom","4px solid #aed4c2");
  $("#product-smallimg1").css("border-color","#2aad6f");
  $(".product-details").show();
  $(".product-standard").hide();
  $(".product-usr-evaluate").hide();
  $(".product-bar-span4").hide();
  $("body").on('click', '.product-color1', productcolor1);
  $("body").on('click', '.product-color2', productcolor2);
  $("body").on('click', '.product-color3', productcolor3);
  $("body").on('click', '.product-minus', productminus);
  $("body").on('click', '.product-add', productadd);
  $("body").on('click', '.product-bar-span1', productbarspan1);
  $("body").on('click', '.product-bar-span2', productbarspan2);
  $("body").on('click', '.product-bar-span3', productbarspan3);
  $("body").on('click', '.img-circle', showproduct);
  $("body").on('click', '#product-smallimg1', smallimg1);
  $("body").on('click', '#product-smallimg2', smallimg2);
  $("body").on('click', '#product-smallimg3', smallimg3);
  $("body").on('click', '#product-smallimg4', smallimg4);
  $("body").on('click', '#product-smallimg4', smallimg4);
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
function smallimg3(e){
 $("#product-smallimg3").css("border-color","#2aad6f");
 $("#product-smallimg1").css("border-color","#f2f2f2");
 $("#product-smallimg2").css("border-color","#f2f2f2");
 $("#product-smallimg4").css("border-color","#f2f2f2");
}
function smallimg4(e){
 $("#product-smallimg4").css("border-color","#2aad6f");
 $("#product-smallimg1").css("border-color","#f2f2f2");
 $("#product-smallimg2").css("border-color","#f2f2f2");
 $("#product-smallimg3").css("border-color","#f2f2f2");
}
function productcolor1(e) {

  $(".product-color1").css("border-color","#2aad6f");
  $(".product-color2").css("border-color","#e2e2e2");
  $(".product-color3").css("border-color","#e2e2e2");
  $("#product-smallimg1").css("border-color","#2aad6f");
  $("#product-smallimg2").css("border-color","#f2f2f2");
  $("#product-smallimg3").css("border-color","#f2f2f2");
  $("#product-smallimg4").css("border-color","#f2f2f2");

  $(".product-bigimg").attr("src","img/1.png");
  $("#product-smallimg1").attr("src","img/1.png");
  $("#product-smallimg2").attr("src","img/2.png");
  $("#product-smallimg3").attr("src","img/3.png");
  $("#product-smallimg4").attr("src","img/4.png");
  $(".product-details1").attr("src","img/商品详情1.jpg");
  $(".product-details2").attr("src","img/商品详情2.jpg");
  $(".product-details3").attr("src","img/商品详情3.jpg");
  $(".product-details4").attr("src","img/商品详情4.jpg");
  $(".product-details5").attr("src","img/商品详情5.jpg");
  $(".product-details6").attr("src","img/商品详情6.jpg");
  $(".product-details7").attr("src","img/商品详情7.jpg");
  $(".product-details8").attr("src","img/商品详情8.jpg");
  $(".product-details9").attr("src","img/商品详情9.jpg");
  $(".product-details10").attr("src","img/商品详情10.jpg");
  $(".product-details11").attr("src","img/商品详情11.jpg");
  $(".product-details12").attr("src","img/商品详情12.jpg");
}
function productcolor2(e){

  $(".product-color2").css("border-color","#2aad6f");
  $(".product-color1").css("border-color","#e2e2e2");
  $(".product-color3").css("border-color","#e2e2e2");
  $("#product-smallimg1").css("border-color","#2aad6f");
  $("#product-smallimg2").css("border-color","#f2f2f2");
  $("#product-smallimg3").css("border-color","#f2f2f2");
  $("#product-smallimg4").css("border-color","#f2f2f2");
  $(".product-bigimg").attr("src","img/2-1.png");
  $("#product-smallimg1").attr("src","img/2-1.png");
  $("#product-smallimg2").attr("src","img/2-2.png");
  $("#product-smallimg3").attr("src","img/2-3.png");
  $("#product-smallimg4").attr("src","img/2-4.png");
  $(".product-details1").attr("src","img/商品详情1.jpg");
  $(".product-details2").attr("src","img/商品详情2.jpg");
  $(".product-details3").attr("src","img/商品详情3.jpg");
  $(".product-details4").attr("src","img/商品详情4.jpg");
  $(".product-details5").attr("src","img/商品详情5.jpg");
  $(".product-details6").attr("src","img/商品详情6.jpg");
  $(".product-details7").attr("src","img/商品详情7.jpg");
  $(".product-details8").attr("src","img/商品详情8.jpg");
  $(".product-details9").attr("src","img/商品详情9.jpg");
  $(".product-details10").attr("src","img/商品详情10.jpg");
  $(".product-details11").attr("src","img/商品详情11.jpg");
  $(".product-details12").attr("src","img/商品详情12.jpg");
}
function productcolor3(e){

  $(".product-color2").css("border-color","#2aad6f");
  $(".product-color1").css("border-color","#e2e2e2");
  $(".product-color3").css("border-color","#e2e2e2");
  $("#product-smallimg1").css("border-color","#2aad6f");
  $("#product-smallimg2").css("border-color","#f2f2f2");
  $("#product-smallimg3").css("border-color","#f2f2f2");
  $("#product-smallimg4").css("border-color","#f2f2f2");
  $(".product-bigimg").attr("src","img/2-1.png");
  $("#product-smallimg1").attr("src","img/2-1.png");
  $("#product-smallimg2").attr("src","img/2-2.png");
  $("#product-smallimg3").attr("src","img/2-3.png");
  $("#product-smallimg4").attr("src","img/2-4.png");
  $(".product-details1").attr("src","img/商品详情1.jpg");
  $(".product-details2").attr("src","img/商品详情2.jpg");
  $(".product-details3").attr("src","img/商品详情3.jpg");
  $(".product-details4").attr("src","img/商品详情4.jpg");
  $(".product-details5").attr("src","img/商品详情5.jpg");
  $(".product-details6").attr("src","img/商品详情6.jpg");
  $(".product-details7").attr("src","img/商品详情7.jpg");
  $(".product-details8").attr("src","img/商品详情8.jpg");
  $(".product-details9").attr("src","img/商品详情9.jpg");
  $(".product-details10").attr("src","img/商品详情10.jpg");
  $(".product-details11").attr("src","img/商品详情11.jpg");
  $(".product-details12").attr("src","img/商品详情12.jpg");
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
  $(".product-bar-span2").css("background-color","#ffffff");
  $(".product-bar-span2").css("color","black");
  $(".product-bar-span2").css("border-bottom","0");
  $(".product-bar-span1").css("background-color","#409f73");
  $(".product-bar-span1").css("color","#ffffff");
  $(".product-bar-span1").css("border-bottom","4px solid #aed4c2");
  $(".product-bar-span3").css("background-color","#ffffff");
  $(".product-bar-span3").css("color","black");
  $(".product-bar-span3").css("border-bottom","0");
  $(".product-details").show();
  $(".product-standard").hide();
  $(".product-usr-evaluate").hide();
  document.getElementById("poduct-bar-before").scrollIntoView();
}
function productbarspan2(e){
  $(".product-bar-span1").css("background-color","#ffffff");
  $(".product-bar-span1").css("color","black");
  $(".product-bar-span1").css("border-bottom","0");
  $(".product-bar-span2").css("background-color","#409f73");
  $(".product-bar-span2").css("color","#ffffff");
  $(".product-bar-span2").css("border-bottom","4px solid #aed4c2");
  $(".product-bar-span3").css("background-color","#ffffff");
  $(".product-bar-span3").css("color","black");
  $(".product-bar-span3").css("border-bottom","0");
  $(".product-details").hide();
  $(".product-standard").show();
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
  $(".product-bar-span2").css("background-color","#ffffff");
  $(".product-bar-span2").css("color","black");
  $(".product-bar-span2").css("border-bottom","0");
  $(".product-details").hide();
  $(".product-standard").hide();
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