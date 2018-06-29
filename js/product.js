var num=0;

$(document).ready(function(){

 	$(".topbar-global").click(function(){ 
   		if(num%2==0){
    	   $(".globaltext").show();
    	   num++;
    	   console.log(num);
     	}
    	else{
      	   $(".globaltext").hide();
       		num++;
       		console.log(num);
      	}
   	}); 
		
	$(".product-body-top-pic-first").mouseenter(function(){
		$(".product-body-top-pic-js-first").animate({
			width:'105%',
			height:'105%',

		},1000);
	});
	$(".product-body-top-pic-first").mouseleave(function(){
		$(".product-body-top-pic-js-first").animate({
			width:'100%',
			height:'100%',
		},1000);
	});
	$(".product-body-top-pic-second").mouseenter(function(){
		$(".product-body-top-pic-js-second").animate({
			width:'105%',
			height:'105%',

		},1000);
	});
	$(".product-body-top-pic-second").mouseleave(function(){
		$(".product-body-top-pic-js-second").animate({
			width:'100%',
			height:'100%',
		},1000);
	});
	$(".product-body-top-pic-third").mouseenter(function(){
		$(".product-body-top-pic-js-third").animate({
			width:'105%',
			height:'105%',

		},1000);
	});
	$(".product-body-top-pic-third").mouseleave(function(){
		$(".product-body-top-pic-js-third").animate({
			width:'100%',
			height:'100%',
		},1000);
	});


	$(".product-body-index").mouseenter(function(){
	// 	$(".product-body-index").addclass(".product-body-index-shadow");
	// });
	// $(".product-body-index").mouseleave(function(){
	// 	$(".product-body-index").removeclass(".product-body-index-shadow");
		// $(".product-body-index").css()

	 })


})



