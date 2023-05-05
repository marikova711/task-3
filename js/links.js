$(document).ready(function () {
    $("div a").each(function () {
        let linky = new RegExp('/' + window.location.host + '/');
        if (!linky.test(this.href)) {
            $(this).attr('target','_blank');
        }
    })
})