$(document).ready(function(){//aftr A5 plus jQury lnk
     $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");// styleA9 effect
        }else{
            $('.navbar').removeClass("sticky");/* changes color upon scroll */
        }
    });
    // Toggle menu/navbar script aftr 6d1 @media response 
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");/* it has to show menu-side btn onto the display in the mobile mode */
        $('.menu-btn i').toggleClass("active");/* for 7d1 response.  This action enables one to be able to cancel the menu-side bar in the mobile mode */
    });
});
/* Form functionallity */
function populate (s1,c2)
    {
        var s1=document.getElementById('slct1');
        var c2=document.getElementById('slct2');

            s2.innerHTML = "";
            if(s1.value == "Computer Science")
                {
                    var optionArray=["select|select","Software|Software","Web devlopment|Web development","System Admin|System Admin"];
                }
                else if(s1.value == "");
    }