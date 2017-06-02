﻿$(function ()
{
    if ($(".custom-tabs.track-url").length > 0)
    {
        if (location.hash.length > 0)
        {
            if ($(location.hash).length > 0)
            {
                var currentPanel = $(location.hash, $(".custom-tabs.track-url .tab-content"));
                if (!currentPanel.hasClass("active"))
                {
                    $(">.tab-pane", currentPanel.closest(".tab-content")).each(function ()
                    {
                        $(this).removeClass("active");
                    });
                    currentPanel.addClass("active");
                }
                var currentTrigger = $("a[href='" + location.hash + "']", $(".custom-tabs.track-url .nav-tabs")).closest("li");
                $(">li", currentTrigger.closest(".nav-tabs")).removeClass("active");
                currentTrigger.addClass("active");
                var masterContainer = currentPanel.closest(".custom-tabs.track-url");
                if (masterContainer.hasClass("auto-scroll"))
                {
                    $("body,html").animate({scrollTop:masterContainer.offset().top-80},500);
                }
            }
        }
    }
});

$(function ()
{
    $("a[href^='#cad']").click(function (evt)
    {
        evt.preventDefault();
        var scroll_to = $($(this).attr("href")).offset().top;
        $("html,body").animate({ scrollTop: scroll_to - 80 }, 600);
    });
    $("a[href^='#bg']").click(function (evt)
    {
        evt.preventDefault();
        $("body").removeClass("light").removeClass("dark").addClass($(this).data("class")).css("background-image", "url('bgs/" + $(this).data("file") + "')");
        console.log($(this).data("file"));
    });
    $("a[href^='#color']").click(function (evt)
    {
        evt.preventDefault();
        var elm = $(".tabbable");
        elm.removeClass("grey").removeClass("dark").removeClass("dark-input").addClass($(this).data("class"));
        if (elm.hasClass("dark dark-input"))
        {
            $(".btn", elm).addClass("btn-inverse");
        }
        else
        {
            $(".btn", elm).removeClass("btn-inverse");
        }
    });
    $(".color-swatch div").each(function ()
    {
        $(this).css("background-color", $(this).data("color"));
    });
    $(".color-swatch div").click(function (evt)
    {
        evt.stopPropagation();
        $("body").removeClass("light").removeClass("dark").addClass($(this).data("class")).css("background-color", $(this).data("color"));
    });
    $("#texture-check").mouseup(function (evt)
    {
        evt.preventDefault();
        if (!$(this).hasClass("active"))
        {
            $("body").css("background-image", "url(bgs/n1.png)");
        }
        else
        {
            $("body").css("background-image", "none");
        }
    });
    $("a[href='#']").click(function (evt)
    {
        evt.preventDefault();
    });
    $("a[data-toggle='popover']").popover({
        trigger:"hover",html:true,placement:"top"
    });
});

$(".selecionar-cadastro-img").on("click", function(){
    var escolha = $(this).attr("data-choose");

    if(escolha == "pf"){
        $("[data-choose=pj]").removeClass("ativo");
        $("[data-choose=pf]").addClass("ativo");
        $("#pessoa_selecionada").val("pf");
        $("#bpainel2").css("display", "block");
        $("#bpainel3").css("display", "block");
        $("#bpainel4").css("display", "block");
        $("#bpainel5").css("display", "none");
        $("#bpainel6").css("display", "none");

        $("#apainel1").removeClass("active");
        $("#painel1").removeClass("active");

        $("#apainel2").addClass("active");
        $("#painel2").addClass("active");
    }
    if(escolha == "pj"){
        $("[data-choose=pf]").removeClass("ativo");
        $("[data-choose=pj]").addClass("ativo");
        $("#pessoa_selecionada").val("pj");
        $("#bpainel2").css("display", "none");
        $("#bpainel3").css("display", "none");
        $("#bpainel4").css("display", "none");
        $("#bpainel5").css("display", "block");
        $("#bpainel6").css("display", "block");

        $("#apainel1").removeClass("active");
        $("#painel1").removeClass("active");

        $("#apainel5").addClass("active");
        $("#painel5").addClass("active");
    }
});

$("#eppainel2").on("click", function(){
    $("#bpainel3").click();
});

$("#eapainel2").on("click", function(){
    $("#bpainel1").click();
});