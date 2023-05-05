$(document).ready(function () {
    let colors = ['#aed6dc', '#ff9a8d', '#4a536b', '#e1dd72', '#a8c66c', '#1b6535', '#6883bc', '#1e847f'];
    let text = $(".element").html();
    $(".element").html(text.replace(/([^\s])/gi, '<span>$1</span>'));

    let color_first = getColor(colors);
    $("span").first().css("color", colors[color_first]);

    $("span:gt(0)").each(function (){
            let prev = rgbToHex($(this).prev().css("color"));
            console.log(prev)
            let color;
            while (!color || colors[color] === prev) {
                color = getColor(colors);
            }
            $(this).css("color", colors[color]);
    })
})