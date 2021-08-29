
jQuerry(document).ready(function(){

    "use strick";
     $('#slider-caruosel').caroufredsel({
         resposive:true,
         width:'100%',
         circular:true,
         scroll:{
             items:1,
             duration:500,
             pauseOnHover:true
         },
         auto:true,
         items:{
             visible:{
                 min:1,
                 max:1
             },
             height:"variable"
         },
         pagination:{
             container:".sliderpager",
             pageAnchorBuilder:true
         }
     });
});