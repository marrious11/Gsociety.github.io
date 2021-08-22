
jQuerry(document).ready(function(){

    "use strick";
     $('#slider-carousel').caroufredsel({
         resposive:true,
         width:'100%',
         circular:true,
         scroll:{
             items:1,
             duration:50,
             pauseOnHover:true
         },
         auto:true,
         items:{
             visible:{
                 min:1,
                 max:1
             },
             height:"100%"
         },
         pagination:{
             container:"#slider-carousel",
             pageAnchorBuilder:true
         }
     });

     index.html.slideshow(".img1");
     slider-carousel.slideshow(".img2");
     main.slideshow(".img3");


});