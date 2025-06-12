$(document).ready(function () {
    $(".minnav").hide();
    $("#x").hide();
    $("#list").click(function () {
        $("#list").hide();
        $("#x").show();
        $(".minnav").slideToggle();
    });
    $("#x").click(function () {
        $("#list").show();
        $("#x").hide();
        $(".minnav").slideToggle();
    })
});