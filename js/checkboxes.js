$(document).ready(function (){
    $("div input").on("click", function () {
        if($("div input:checked").length > 3) {
            $(this).prop("checked", false);
        }
    })
});