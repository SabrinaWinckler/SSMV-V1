$(function () {
    $("#pf_CPF").mask("999.999.999-99");
    $("#pf_telefone_fixo").mask("(99) 9999-9999");
    $("#pf_telefone_celular").mask("(99) 99999-9999");
});

$(function(){
    var temporizador = false;
    $('#pf_CPF').keypress(function(){
    
        var input = $(this);
        var icon = $("#ver_pf_cpf");
        var vicon = $("#v_ver_pf_cpf");
        
        if (temporizador) {
            clearTimeout(temporizador);
        }
        
        temporizador = setTimeout(function(){

            icon.removeClass('fa fa-check icon-green');
            icon.removeClass('fa fa-times icon-red');
            vicon.removeClass('fa fa-check icon-green');
            vicon.removeClass('fa fa-times icon-red');

            var cpf_cnpj = input.val();
            
            var valida = valida_cpf_cnpj( cpf_cnpj );
            
            
            if (valida) {
                icon.addClass('fa fa-check icon-green');
                vicon.addClass('fa fa-check icon-green');
            } else {
                icon.addClass('fa fa-times icon-red');
                vicon.addClass('fa fa-times icon-red');
            }
        }, 200);
    
    });
});

$(function () {
    $("a[href^='#cad']").click(function (evt) {
        evt.preventDefault();
        var scroll_to = $($(this).attr("href")).offset().top;
        $("html,body").animate({ scrollTop: scroll_to - 80 }, 600);
    });
    $("a[href^='#bg']").click(function (evt) {
        evt.preventDefault();
        $("body").removeClass("light").removeClass("dark").addClass($(this).data("class")).css("background-image", "url('bgs/" + $(this).data("file") + "')");
        console.log($(this).data("file"));
    });
    $("a[href^='#color']").click(function (evt) {
        evt.preventDefault();
        var elm = $(".tabbable");
        elm.removeClass("grey").removeClass("dark").removeClass("dark-input").addClass($(this).data("class"));
        if (elm.hasClass("dark dark-input")) {
            $(".btn", elm).addClass("btn-inverse");
        }
        else {
            $(".btn", elm).removeClass("btn-inverse");
        }
    });
    $(".color-swatch div").each(function () {
        $(this).css("background-color", $(this).data("color"));
    });
    $(".color-swatch div").click(function (evt) {
        evt.stopPropagation();
        $("body").removeClass("light").removeClass("dark").addClass($(this).data("class")).css("background-color", $(this).data("color"));
    });
    $("#texture-check").mouseup(function (evt) {
        evt.preventDefault();
        if (!$(this).hasClass("active")) {
            $("body").css("background-image", "url(bgs/n1.png)");
        }
        else {
            $("body").css("background-image", "none");
        }
    });
    $("a[href='#']").click(function (evt) {
        evt.preventDefault();
    });
    $("a[data-toggle='popover']").popover({
        trigger: "hover", html: true, placement: "top"
    });
});

$(".selecionar-cadastro-img").on("click", function () {
    var escolha = $(this).attr("data-choose");

    if (escolha == "pf") {
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
    if (escolha == "pj") {
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

$("#eppainel2").on("click", function () {
    $("#bpainel3").click();
});

$("#eapainel2").on("click", function () {
    $("#bpainel1").click();
});

$("#eppainel3").on("click", function () {
    $("#bpainel4").click();
});

$("#eapainel3").on("click", function () {
    $("#bpainel2").click();
});

$("#bpainel4").on("click", function () {
    $("#v_pf_nome_sobrenome").text($("#pf_nome").val() + " " + $("#pf_sobrenome").val());
    $("#v_pf_cpf").text($("#pf_CPF").val());
    $("#v_pf_nascimento").text($("#pf_nascimento").val());

    if($("[name=pf_genero]:checked").val() == 'M'){
        var genero = "Masculino";
    } else if ($("[name=pf_genero]:checked").val() == 'F') {
        var genero = "Feminino";
    } else if ($("[name=pf_genero]:checked").val() == 'O') {
        var genero = "Não especificado";
    }
    $("#v_pf_genero").text(genero);

    $("#v_pf_estado").text($('#pf_estado').find(":selected").text());
    $("#v_pf_cidade").text($("#pf_cidade").val());
    $("#v_pf_telefone_fixo").text($("#pf_telefone_fixo").val());
    $("#v_pf_telefone_celular").text($("#pf_telefone_celular").val());
    $("#v_pf_tipo_sangue").text($('#pf_tipo_sangue').find(":selected").text());
    $("#v_pf_peso").text($("#pf_peso").val());
    $("#v_pf_email").text($("#pf_email").val());

    nada = false;
    $("#v_questionario").html('<h5><i class="fa fa-check-circle"></i> Questionário </h5>');
    for (var i = 1; i <= 17; i++){
        if($('#resp' + i).prop("checked")){
            $("#v_questionario").html($("#v_questionario").html() + '<a><i class="fa fa-check"></i> ' + $('#resp' + i).attr("texto") + '</a>');
            $("#v_questionario").html($("#v_questionario").html() + '<br />');
        }
        nada = nada || $('#resp' + i).prop("checked");
    }
    if(!nada){
        $("#v_questionario").html($("#v_questionario").html() + '<a><i class="fa fa-check"></i> Nenhuma opção foi marcada.</a>');
    }
});


$("#pf_estado").on("change", function () {
    var idestado = $("#pf_estado").val() - 1;

    $.getJSON('/estado/', {}, function (data) {
        $('#pf_cidade option').remove();
        if (data != 'null') {
            $.each(data.estados[idestado].cidades, function (k, v) {
                // console.log(idestado);
                // console.log(data.estados[idestado].cidades[k]);
                $('<option/>').val(data.estados[idestado].cidades[k]).text(data.estados[idestado].cidades[k]).appendTo($('#pf_cidade'));
                $('#pf_cidade').prop('disabled', false);
                $('#pf_cidade').trigger("chosen:updated");
            });
        }
    });
});