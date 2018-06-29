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
});  