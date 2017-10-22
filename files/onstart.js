function resize() {
    var width = window.innerWidth;

    var wwa = document.querySelectorAll(".whoweare div, .whoweare p");
    for (var i = 0; i < wwa.length; ++i) {

        if (width <= 640) wwa[i].classList.add('narrow');
        else wwa[i].classList.remove('narrow');

    }

};

window.onresize = function () {
    resize();
}

window.onload = function () {
    resize();
}