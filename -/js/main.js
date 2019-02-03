// head {
var __nodeId__ = "plugins_maskedinput__main";
// }

(function (__nodeId__) {
    window[__nodeId__] = function (data) {
        var input = $(data.selector);

        if (data.maskData.placeholder) {
            input.attr("placeholder", data.maskData.placeholder);
        }

        input.focus(function () {
            $(this).mask(data.mask, data.maskData);
        })
    }
})(__nodeId__);
