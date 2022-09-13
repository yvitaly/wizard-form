var boxStep = $('.steps-form').find('.steps-box');

$('.steps-form').before('<div class="title"></div>')

for( var t=0 , a=$('.steps-form').find('.steps-box'); t<a.length; t++ ) {
    $('.steps-form').prev().append('<h2>'+a.eq(t).find('h2').text()+'</h2>')
}

$('.steps-form input[type=submit]').hide();

boxStep.not(':first').append('<button class="prev" name="">Anterior</button>');
boxStep.not(':last').append('<button class="next" name="">Próximo</button>');

boxStep.hide();
boxStep.eq(0).show();
$('.steps-form').prev().find('h2').eq(0).css('text-decoration','underline');

$('.steps-form').find('.prev,.next,[type=submit]').click(function(){

    if ($(this).is('.next')) {
        boxReq = $(this).parents('.steps-box').find('.required');
    } else {
        if ($(this).is('[type=submit]')) {
            boxReq = boxStep.last().find('.required');
        } else {
            boxReq = null;
        }
    }

    if (boxReq) {
        for (var b = 0, a = boxReq.length; b < a; b++) {
            if(!boxReq.eq(b).val()){
                boxReq.eq(b).attr("placeholder", "Campo obrigatório!").addClass('alert').focus();
                return false;
            }
        }
    }

    if ($(this).is('.next')) {

        if($(this).parents('.steps-box').index()==boxStep.length-2){
            $('.steps-form input[type=submit]').show();
        }

        $('.steps-form').prev().find('h2').eq($(this).parents('.steps-box').index()).removeAttr('style');
        $('.steps-form').prev().find('h2').eq($(this).parents('.steps-box').index()+1).css('text-decoration','underline');

        $(this).parents('.steps-box').hide();
        $(this).parents('.steps-box').next().show();

        return false;
    }

    if ($(this).is('.prev')) {

        $('.steps-form input[type=submit]').hide();

        $('.steps-form').prev().find('h2').eq($(this).parents('.steps-box').index()).removeAttr('style');
        $('.steps-form').prev().find('h2').eq($(this).parents('.steps-box').index()-1).css('text-decoration','underline');

        $(this).parents('.steps-box').hide();
        $(this).parents('.steps-box').prev().show();

        return false;
    }

})