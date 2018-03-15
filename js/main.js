$(document).ready(function() {
    
    /* animation of header*/
    
    $(".animate").each(function(index) {
        $(this).delay(1000*index).animate({
            "opacity" : "1"
        });
    });
    


}); // ready method end