$(document).ready(function() {
    var refreshId = setInterval(function() {
        $("#msg-wrapper").load('berichten.php', function() {
            $(".message").last()[0].scrollIntoView();
        });
    }, 1000);
    $.ajaxSetup({ cache: false });
});
