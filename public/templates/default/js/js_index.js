$(function(){
    $("#nav li").hover(function(){
        $(this).find('ul:first').css({
            visibility: "visible",
            display: "none"
        }).show(450);
    },function(){
        $(this).find('ul:first').css({
            visibility: "hidden"
        });
    })
});