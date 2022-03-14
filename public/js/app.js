$(document).ready(function() {
    body_height_screen = document.documentElement.clientHeight;

    $(".header-left").css('height', body_height_screen);
    $(".header-right").css('height', body_height_screen);
    $(".first-screen").css('height', body_height_screen);

    $(".wr-first-screen-select").css('margin-top', (body_height_screen / 2) - 100);

    $(".line-1").css('margin-top', (body_height_screen / 2) - 90);

    $(".left-icon").css('margin-left', '2.5%');
    $(".left-icon-1").css('margin-top', (body_height_screen / 2) - 50);
    $(".left-icon-2").css('margin-top', (body_height_screen / 2) - 100);
    $(".left-icon-3").css('margin-top', (body_height_screen / 2) - 165);
});