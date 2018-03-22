$(document).ready(function () {
    $("a").ready(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $("#logoimage").animate({fontSize: '3em'}, "slow");
        $("#logoimage").animate({fontSize: '1em'}, "slow");
    });
});
$(document).ready(function () {
    $("h4").ready(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $("#welcome").animate({fontSize: '2em'}, "slow");
        $("#welcome").animate({fontSize: '1em'}, "slow");
    });
});
// $(document).ready(function () {
//     $("h1").mouseenter(function () {
//         //$(".count").animate({left: '100px'}, "slow");
//         $("#welcome").animate({fontSize: '2em'}, "slow");
//         $("#welcome").animate({fontSize: '3em'}, "slow");
//     });
// });

$(document).ready(function () {
    $("h2").mouseenter(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $("#mylocation").animate({fontSize: '2em'}, "slow");
        $("#mylocation").animate({fontSize: '3em'}, "slow");
    });
});

$(document).ready(function () {
    $("h1").ready(function () {
        //$(".count").animate({left: '100px'}, "slow");
        $("#cart").animate({fontSize: '1em'}, "slow");
        $("#cart").animate({fontSize: '0.5em'}, "slow");
    });
});
$(document).ready(function () {
    $('#search_text').keyup(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
        else {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
    });
});
function load() {
    $(document).ready(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
        else {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }
    });
}
$(function () {
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 4000,
            animationSpeed: 600,
            controlNav: false,
            directionNav: true,
            controlsContainer: ".flex-container" // the container that holds the flexslider
        });
    });
});
function loadcart() {
    $(document).ready(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#resultcart').html('');
            $.ajax({
                url: "cartfetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultcart').html(data);
                }
            });
        }
        else {
            $('#resultcart').html('');
            $.ajax({
                url: "cartfetch.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultcart').html(data);
                }
            });
        }
    });
}
$(document).ready(function () {
    $('#search_text').keyup(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#resultdaily').html('');
            $.ajax({
                url: "daily.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultdaily').html(data);
                }
            });
        }
        else {
            $('#resultdaily').html('');
            $.ajax({
                url: "daily.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultdaily').html(data);
                }
            });
        }
    });
});
function loaddaily() {
    $(document).ready(function () {
        var txt = $(this).val();
        if (txt != '') {
            $('#resultdaily').html('');
            $.ajax({
                url: "daily.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultdaily').html(data);
                }
            });
        }
        else {
            $('#resultdaily').html('');
            $.ajax({
                url: "daily.php",
                method: "post",
                data: {search: txt},
                dataType: "text",
                success: function (data) {
                    $('#resultdaily').html(data);
                }
            });
        }
    });
}