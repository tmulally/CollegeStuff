/**
 * Created by JeronimoJ on 2/12/2017.
 */
function goTo(number){
    $('ul.pager li:eq('+number+') a').tab('show');
    upgradePreNext(number);

}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
    $('[data-toggle="popover"]').popover()
})


function upgradePreNext(number){
    if (number>1){
        $('ul.pager li:eq(0)').attr("onclick","goTo("+(number-1)+")");
        $('ul.pager li:eq(0)').attr("class", "previous");
    } else {
        $('ul.pager li:eq(0)').attr("class", "disabled");
    }
    if (number<5){
        $('ul.pager li:eq(6)').attr("onclick","goTo("+(number+1)+")");
        $('ul.pager li:eq(6)').attr("class", "next");
    } else {
        $('ul.pager li:eq(6)').attr("class", "disabled");
    }
}



$(document).ready(function(){

    $('.src-image').each(function(){
        sourceImages.push($(this).attr('src'));
    });

    $('.avatar img').each(function(index){
        $(this).attr('src', sourceImages[index] );
    });


    $('.card canvas').each(function(index){
        var canvas = $(this)[0];

        var image = new Image();
        image.src = sourceImages[index];

        image.onload = function() {
            drawBlur(canvas, image);
        }
    });

    $('li a').on('click',function(e){
        goTo((e.target.innerHTML)-0);
    });

    $('#myCarousel').carousel({
        interval: 10000
    });


});

