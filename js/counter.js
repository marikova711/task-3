$(document).ready(function () {
    $('input[type="text"]').on("input", function () {
        let maxCount = 20;
        let redCount = 0;
        let count = maxCount - $(this).val().length;
        if(count >= redCount) {
            $("span").html(`<span>Осталось ввести ${count} символов</span>`);
        } else {
            $("span").html(`<span>Лимит превышен на ${Math.abs(count)} символов</span>`);
        }
    }).val("")
})