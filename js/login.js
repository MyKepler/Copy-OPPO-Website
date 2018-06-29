$(document).ready(function(){
   $(".phonenum").click(function(){ // 点击隐藏
   $(".nophonenum").hide();
  });
});

$(document).ready(function(){
   $(".code").click(function(){ // 点击隐藏
   $(".nocode").hide();
  });
});

$(document).ready(function(){
   $(".login").click(function(){ 
    var nameform=$(".phonenum").val();        // 验证是否输入用户名    
     var codeform=$(".code").val();
   if(nameform == ""){  
   $(".nophonenum").show();
    }
   if(nameform != ""){ 
   if(codeform == ""){  
   $(".nocode").show();
   }
  }
 });
});  