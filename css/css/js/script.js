function share_and_redirect(url, redirect) {
    if (typeof(FB) === "undefined" || !window.useFbUi) {
        fbshare(url, redirect);
    } else {
        fbuisharer(url, redirect);
    }
    return false;
}
function fbshare(url, redirect) {
    ga('send', 'event', 'Facebook', 'Share', window.basePath);
    var newwindow = window.open(
        'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url),
        'facebook-share-dialog',
        'width=572,height=567');
    var winTimer = redirect && window.setInterval(function () {
        if (newwindow.closed !== false) {
            window.clearInterval(winTimer);
            top.location.href = redirect;
        }
    }, 200);
}
function fbuisharer(url, redirect) {
    FB.ui({
        method: 'share',
        href: url
    }, function(response){
        if (response && !response.error_message) {
            ga('send', 'event', 'Facebook', 'Share', window.basePath);
            top.location.href = redirect;
        }
    });
}
function stepAnalyse(redirect, calc, generatorUrl, data) {
    var $status = $('#status-text');
    var $progress = $('.status-progress');
    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $progress.css({
                        width: percentComplete * 80 + '%'
                    });
                }
            }, false);
            return xhr;
        },
        url: generatorUrl,
        data: data,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data){
            data = JSON.parse(data);
            if (data.error) {
                alert(data.error);
                window.history.back();
                return;
            }
            var percent = 80;
            setInterval(function () {
                percent += 4;
                $progress.css({
                    width: percent + '%'
                });
            }, 1500);
            setTimeout(function () {
                $status.html(calc);
            }, 500);
            setTimeout(function () {
                window.location.href = data.result_url || redirect;
            }, 5000);
        }
    }).fail(function(data) {
        console.log(data);
        alert( "Sorry, we could not use your data. Try solving this quiz again." );
        window.history.back();
    });
    setInterval(function () {
        $status.html($status.text() + '.');
    }, 1500);
}