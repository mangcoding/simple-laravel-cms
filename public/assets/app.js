// author: mangcoding
// url : http://blog.mangcoding.com

$.initSlider = function() {
    var itemWidth = 260;
    var padding = 25;
    var margin = 40;
    var pad = 2 * padding + margin; //padding+margin
    var showItem = 2;
    var totalItem = $(".testimonial-item").length;
    var index = 0;
    var position = 0;
    var moveRight = 0;
    var timeInterval = 3000;
    var __auto = null;
    $(".testimonial-item").width(itemWidth);
    $(".testimonial").width((itemWidth + pad) * showItem - margin);
    $(".row-testimonial").width((itemWidth + pad) * totalItem);
    $(".testimonial>.row-navigation").on("click", ".nav-left", function() {
        __toLeft();
    });

    $(".testimonial>.row-navigation").on("click", ".nav-right", function() {
        __toRight();
    });

    __runInterval();

    $(".row-testimonial, .row-navigation").on({
        mouseover: function() {
            clearInterval(__auto);
        },
        mouseout: function() {
            __runInterval();
        }
    });

    function __runInterval() {
        __auto = setInterval(function() {
            if (index <= -(totalItem - showItem)) {
                moveRight = 1;
            } else if (index >= 0) {
                moveRight = 0;
            }
            index += moveRight ? 1 : -1;
            __animate();
        }, timeInterval)
    }

    function __toLeft() {
        if (index < 0) {
            index = index + 1;
            __animate();
        }
    }

    function __toRight() {
        if (index > -(totalItem - showItem)) {
            index = index - 1;
            __animate();
        }
    }

    function __animate() {
        position = index * (itemWidth + pad);
        $(".row-testimonial").css({ "transition": "all 0.2s ease-in-out", "left": position + "px" });
    }
}
$(document).ready(function() {
    $.initSlider();
})