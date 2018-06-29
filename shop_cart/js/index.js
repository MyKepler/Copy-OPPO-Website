/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-22 03:11:37
 * @version $Id$
 */
 $(init)
 function init(){
//$("#blank-shopcart").hide();
    /*var html=$("#chose-product").html();
    $("#chose-product").append(html);*/

   /* $("body").on("click", "#product-minus-<?php echo $product['id']?>", productminus);
    $("body").on("click", "#product-add-<?php echo $product['id']?>", productadd);*/

    $("body").on('click', '.chose-product-delete', choseproductdelete);
    $("body").on('click','#all-checkbox',function(){
    	if(this.checked){
    		$("body :checkbox").prop("checked",true);	
    	}
    	else{

    		$("body :checkbox").prop("checked",false);
              
    	}
    });
}

function choseproductdelete(e){

	$("#chose-product").remove();
}
function productminus(e){
alert("123");
	var a=$("#product-minus-<?php echo $product['id']?>").val();
	if(a==1){
		$("#product-minus-<?php echo $product['id']?>").css("background","#f0f0f0");
	}
	else if(a>=2){

		--a;
		$("#product-<?php echo $product['id']").val(a);

	}
}

function productadd(e){
	var b=$("#product-<?php echo $product['id']").val();
	++b;
	$("#product-<?php echo $product['id']").val(b);
	$("#product-minus-<?php echo $product['id']?>").css("background","#ffffff");
}

 /*function allcheck(e){
   if($("input[name=all-check]").attr('checked')=="checked"){

       $("input[name=check]").attr('checked',"checked");
   }*/


