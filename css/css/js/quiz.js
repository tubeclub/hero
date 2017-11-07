/**
 * Created by aidas on 15.6.30.
 */
var step = 0;
var hash = $.trim(window.location.hash);

$(document).ready(function () {
    $(".fill-title").html($("head title").html());

    if (hash) {
        if (hash.charAt(1) == 'q') {
            var question = hash.replace(hash.charAt(0) + hash.charAt(1), '');

            openQuestion(question);
        }
        else if (hash.charAt(1) == 'r') {
            var result = hash.replace('#' + hash.charAt(1), '');

            showAnswer(result);
        }
    }
    else {
        $('.start').show();
    }
});

var u;
$(document).on('click', '.sharer.fb, .fcbk-share', function () {
    window.open($(this).attr('data-url'), 'sharer', 'toolbar=0,status=0,width=548,height=325');
});

$(window).on('hashchange', function () {
    hash = $.trim(window.location.hash);

    if (hash) {
        if (hash.charAt(1) == 'q') {
            var question = hash.replace(hash.charAt(0) + hash.charAt(1), '');

            openQuestion(question);
        }
        else if (hash.charAt(1) == 'r') {
            var result = hash.replace('#' + hash.charAt(1), '');

            showAnswer(result);
        }
    }
});

function openQuestion(question) {
    $(".start").addClass("hide");

    if (question != 1)
        $(".step-" + (question - 1)).addClass('hide');

    $(".step-" + question).removeClass('hide');
}

function showAnswer(result) {
    $(".start").hide();
    $(".step").hide();

    $(".result-" + result).removeClass('hide').show();
    $("head title").html($(".result-" + result).attr('data-title'));
}
