$(document).ready(function () {
    if (fbcon == true) {
        $("[data-choose=pf]").click();
        setTimeout(function () { checkLoginState(); }, 3000);
    }
});

$(function () {
    $("#pf_CPF").mask("999.999.999-99");
    $("#pf_telefone_fixo").mask("(99) 9999-9999");
    $("#pf_telefone_celular").mask("(99) 99999-9999");

    $("#pj_telefone_fixo").mask("(99) 9999-9999");
    $("#pj_telefone_fixo2").mask("(99) 9999-9999");

    $("#pj_CNPJ").mask("99.999.999/9999-99");
    $("#pj_cep").mask("99.999-999");

});

$(function () {
    var temporizador = false;
    $('#pf_CPF').keypress(function () {

        var input = $(this);
        var icon = $("#ver_pf_cpf");
        var vicon = $("#v_ver_pf_cpf");

        if (temporizador) {
            clearTimeout(temporizador);
        }

        temporizador = setTimeout(function () {

            icon.removeClass('fa fa-check icon-green');
            icon.removeClass('fa fa-times icon-red');
            vicon.removeClass('fa fa-check icon-green');
            vicon.removeClass('fa fa-times icon-red');

            var cpf = input.val();

            var valida = valida_cpf_cnpj(cpf);

            if (valida) {
                icon.addClass('fa fa-check icon-green');
                vicon.addClass('fa fa-check icon-green');
                validar_cpf = true;
            } else {
                icon.addClass('fa fa-times icon-red');
                vicon.addClass('fa fa-times icon-red');
                validar_cpf = false;
            }
        }, 1);

    });

    $('#pj_CNPJ').keypress(function () {

        var input = $(this);
        var icon = $("#ver_pj_cnpj");
        //var vicon = $("#v_ver_pj_cnpj");

        if (temporizador) {
            clearTimeout(temporizador);
        }

        temporizador = setTimeout(function () {

            icon.removeClass('fa fa-check icon-green');
            icon.removeClass('fa fa-times icon-red');
            //vicon.removeClass('fa fa-check icon-green');
            //vicon.removeClass('fa fa-times icon-red');

            var cnpj = input.val();

            var valida = valida_cpf_cnpj(cnpj);

            if (valida) {
                icon.addClass('fa fa-check icon-green');
                //vicon.addClass('fa fa-check icon-green');
                validar_cnpj = true;
            } else {
                icon.addClass('fa fa-times icon-red');
                //vicon.addClass('fa fa-times icon-red');
                validar_cnpj = false;
            }
        }, 1);

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
        $("#bpainel3").css("display", "none");
        $("#bpainel4").css("display", "none");
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
        $("#bpainel6").css("display", "none");

        $("#apainel1").removeClass("active");
        $("#painel1").removeClass("active");

        $("#apainel5").addClass("active");
        $("#painel5").addClass("active");
    }
});

validar_senha_pf = false;
validar_email_pf = false;
validar_cpf = false;

$("#eppainel2").on("click", function () {
    if (validar_senha_pf && validar_email_pf && validar_cpf) {
        $("#bpainel3").css("display", "block");
        $("#bpainel3").click();
    } else {

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr["warning"]("Preencha as informações necessárias.", "Ops...");

        return false;
    }
});

$("#eapainel2").on("click", function () {
    $("#bpainel1").click();
});

$("#eppainel3").on("click", function () {
    $("#bpainel4").css("display", "block");
    $("#bpainel4").click();
});

$("#eapainel3").on("click", function () {
    $("#bpainel2").click();
});

$("#eapainel4").on("click", function () {
    $("#bpainel3").click();
});

$("#eapainel5").on("click", function () {
    $("#bpainel1").click();
});

$("#eapainel6").on("click", function () {
    $("#bpainel5").click();
});

$("#bpainel4").on("click", function () {
    $("#v_pf_nome_sobrenome").text($("#pf_nome").val() + " " + $("#pf_sobrenome").val());
    $("#v_pf_cpf").text($("#pf_CPF").val());

    v_pf_nascimento = parseInt($("#pf_nascimento").val().match(/\d/g).join(''));
    v_pf_nascimento = v_pf_nascimento.toString().substr(6, 2) + "/" + v_pf_nascimento.toString().substr(4, 2) + "/" + v_pf_nascimento.toString().substr(0, 4);
    $("#v_pf_nascimento").text(v_pf_nascimento);

    if ($("[name=pf_genero]:checked").val() == 'M') {
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
    v_pf_doacao = parseInt($("#pf_ultimaDoacao").val().match(/\d/g).join(''));
    v_pf_doacao = v_pf_doacao.toString().substr(6, 2) + "/" + v_pf_doacao.toString().substr(4, 2) + "/" + v_pf_doacao.toString().substr(0, 4);
    $("#v_pf_ultima_doacao").text(v_pf_doacao);


    nada = false;
    $("#v_questionario").html('<h5><i class="fa fa-check-circle"></i> Questionário </h5>');
    for (var i = 1; i <= 17; i++) {
        if ($('#resp' + i).prop("checked")) {
            $("#v_questionario").html($("#v_questionario").html() + '<a><i class="fa fa-check"></i> ' + $('#resp' + i).attr("texto") + '</a>');
            $("#v_questionario").html($("#v_questionario").html() + '<br />');
        }
        nada = nada || $('#resp' + i).prop("checked");
    }
    if (!nada) {
        $("#v_questionario").html($("#v_questionario").html() + '<a><i class="fa fa-check"></i> Nenhuma opção foi marcada.</a>');
    }
    if ($("#pf_CPF").val() == "") {
        $("#v_ver_pf_cpf").addClass("fa fa-times icon-red");
    }
});

$("#pf_repita_senha").keyup(function () {
    if ($("#pf_repita_senha").val() != $("#pf_senha").val()) {
        $("#pf_senha_errada").addClass("icon-red");
        validar_senha_pf = false;
    }

    if (!($("#pf_repita_senha").val() != $("#pf_senha").val())) {
        $("#pf_senha_errada").removeClass("icon-red");
        validar_senha_pf = true;
    }
});

$('#pf_email').keydown(function () {
    $("form").submit(function () { return false; });
    //atribuindo o valor do campo
    var sEmail = $("#pf_email").val();
    // filtros
    var emailFilter = /^.+@.+\..{2,}$/;
    var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
    // condição
    if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
        $("#pf_email").addClass("icon-red");
        validar_email_pf = false;

    } else {
        $("#pf_email").removeClass("icon-red");
        validar_email_pf = true;
    }
});

$('#pf_email').focus(function () {
    $("#pf_email").removeClass("icon-red");
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

$("#verificar_pf").on("click", function () {
    if ($("#pessoa_selecionada").val() == 'pf') {
        if ($("#pf_nome").val().length > 1) {
            if ($("#pf_sobrenome").val().length > 1) {
                if ($("#pf_CPF").val().length > 1 && validar_cpf) {
                    if ($("#pf_nascimento").val().length == 10) {
                        if (!!$("[name=pf_genero]:checked").val() == true) {
                            if (!$("#pf_estado").val() == false) {
                                if (!$("#pf_cidade").val() == false) {
                                    if ($("#pf_telefone_celular").val().length > 1) {
                                        if (!$("#pf_tipo_sangue").val() == false) {
                                            if ($("#pf_peso").val().length > 1) {
                                                if ($("#pf_email").val().length > 1 && validar_email_pf) {
                                                    if ($("#pf_senha").val().length > 3 && validar_senha_pf) {

                                                        $.post('/confirmarcadastropf',
                                                            {
                                                                nome: $("#pf_nome").val(),
                                                                sobrenome: $("#pf_sobrenome").val(),
                                                                cpf: $("#pf_CPF").val(),
                                                                nascimento: $("#pf_nascimento").val(),
                                                                genero: $("[name=pf_genero]:checked").val(),
                                                                estado: $("#pf_estado").val(),
                                                                cidade: $("#pf_cidade").val(),
                                                                telefonefixo: $("#pf_telefone_fixo").val(),
                                                                telefonecelular: $("#pf_telefone_celular").val(),
                                                                tiposangue: $("#pf_tipo_sangue").val(),
                                                                peso: $("#pf_peso").val(),
                                                                email: $("#pf_email").val(),
                                                                senha: $("#pf_senha").val(),
                                                                resp1: $('#resp1').prop("checked"),
                                                                resp2: $('#resp2').prop("checked"),
                                                                resp3: $('#resp3').prop("checked"),
                                                                resp4: $('#resp4').prop("checked"),
                                                                resp5: $('#resp5').prop("checked"),
                                                                resp6: $('#resp6').prop("checked"),
                                                                resp7: $('#resp7').prop("checked"),
                                                                resp8: $('#resp8').prop("checked"),
                                                                resp9: $('#resp9').prop("checked"),
                                                                resp10: $('#resp10').prop("checked"),
                                                                resp11: $('#resp11').prop("checked"),
                                                                resp12: $('#resp12').prop("checked"),
                                                                resp13: $('#resp13').prop("checked"),
                                                                resp14: $('#resp14').prop("checked"),
                                                                resp15: $('#resp15').prop("checked"),
                                                                resp16: $('#resp16').prop("checked"),
                                                                resp17: $('#resp17').prop("checked"),
                                                                idfacebook: $("#idfacebook").val(),
                                                                ultimaDoacao: $("#pf_ultimaDoacao").val()
                                                            },
                                                            function (rs) {
                                                                if ($("#idfacebook").val().length > 0) {
                                                                    FB.api('/' + $("#idfacebook").val() + '/notifications?template= Olá @[' + $("#idfacebook").val() + '], O seu facebook foi vinculado com o site SSMV.&href=//localhost&ref=?asdasd&access_token=213962312451886|dM6ZBAut7W2a2DXu9sJJQbnC91A', 'post');
                                                                }
                                                                window.location.href = rs;
                                                            }
                                                        );
                                                    } else {
                                                        console.log("ERRO: SENHA FALTANDO");
                                                    }
                                                } else {
                                                    console.log("ERRO: EMAIL FALTANDO");
                                                }
                                            } else {
                                                console.log("ERRO: PESO FALTANDO");
                                            }
                                        } else {
                                            console.log("ERRO: TIPO SANGUE FALTANDO");
                                        }
                                    } else {
                                        console.log("ERRO: TELEFONE CELULAR FALTANDO");
                                    }
                                } else {
                                    console.log("ERRO: CIDADE FALTANDO");
                                }
                            } else {
                                console.log("ERRO: ESTADO FALTANDO");
                            }
                        } else {
                            console.log("ERRO: GENERO FALTANDO");
                        }
                    } else {
                        console.log("ERRO: NASCIMENTO FALTANDO");
                    }
                } else {
                    console.log("ERRO: CPF FALTANDO");
                }
            } else {
                console.log("ERRO: SOBRENOME FALTANDO");
            }
        } else {
            console.log("ERRO: NOME FALTANDO");
        }
    } else {
        //COPIA DAQUI
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr["error"]("Está faltando informar o tipo de pessoa", "Erro...");
    }
    //ATÉ AQUI
});

// FACEBOOK

function checkLoginState() {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            console.log(response);

            FB.api('/me', { fields: 'first_name, last_name, email, gender, locale, picture' }, function (response) {
                $("#idfacebook").val(response["id"]);
                $("#pf_nome").val(response["first_name"]);
                $("#pf_sobrenome").val(response["last_name"]);

                if (response["gender"] == 'male') {
                    $("#pf_genero_masculino").prop({ checked: true });
                } else if (response["gender"] == 'female') {
                    $("#pf_genero_feminino").prop({ checked: true });
                } else {
                    $("#pf_genero_outro").prop({ checked: true });
                }

                $("#pf_email").val(response["email"]);

                // FB.api('/' + response["id"] + '/notifications?template= Olá @[' + response["id"] + '], O seu facebook foi vinculado com o site SSMV.&href=//localhost&ref=?asdasd&access_token=213962312451886|dM6ZBAut7W2a2DXu9sJJQbnC91A', 'post'); //TOTALMENTE FUNCIONAL
                $(".fb-login-button").html('<div class="col-md-3"><div class="socials"><a class="facebook">Facebook vinculado com sucesso!</a></div><br /><br /></div>');
                $(".fb-login-button").removeClass("fb-login-button fb_iframe_widget");
            });

            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
        } else if (response.status === 'not_authorized') {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr["error"]("Não autorizado", "Ops...");

        } else {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr["error"]("Erro desconhecido.", "Error...");
        }
    });
}

$("#pj_estado").on("change", function () {
    var idestado = $("#pj_estado").val() - 1;
    $.getJSON('/estado/', {}, function (data) {
        $('#pj_cidade option').remove();
        if (data != 'null') {
            $.each(data.estados[idestado].cidades, function (k, v) {
                $('<option/>').val(data.estados[idestado].cidades[k]).text(data.estados[idestado].cidades[k]).appendTo($('#pj_cidade'));
                $('#pj_cidade').trigger("chosen:updated");
            });
        }
    });
});

$("#pj_cep").keyup(function () {
    v_cep = parseInt($("#pj_cep").val().match(/\d/g).join(''));
    if (v_cep.toString().length == 8) {
        $.getJSON("//viacep.com.br/ws/" + v_cep + "/json/?callback=?", function (dados) {
            if (!("erro" in dados)) {
                console.log(dados);
                //Atualiza os campos com os valores da consulta.
                $("#pj_logradouro").val(dados.logradouro);
                $("#pj_bairro").val(dados.bairro);
                $("#pj_estado").val($("#pj_estado [sigla=" + dados.uf + "]").val());
                var idestado = $("#pj_estado").val() - 1;
                $.getJSON('/estado/', {}, function (data) {
                    $('#pj_cidade option').remove();
                    if (data != 'null') {
                        $.each(data.estados[idestado].cidades, function (k, v) {
                            $('<option/>').val(data.estados[idestado].cidades[k]).text(data.estados[idestado].cidades[k]).appendTo($('#pj_cidade'));
                            $('#pj_cidade').trigger("chosen:updated");
                        });
                    }
                });
                setTimeout(function () { $("#pj_cidade").val(dados.localidade); }, 500);
                $("#pj_logradouro_numero").focus();

                // $("#ibge").val(dados.ibge);
            } else {
                //CEP pesquisado não foi encontrado.
                $("#pj_cep").val('');
                $("#pj_cep").focus();
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };

                toastr["error"]("CEP não encontrado.", "Error...");
            }
        });
    }
});

$("#pj_repita_senha").keyup(function () {
    if ($("#pj_repita_senha").val() != $("#pj_senha").val()) {
        $("#pj_senha_errada").addClass("icon-red");
        validar_senha_pj = false;
    }

    if (!($("#pj_repita_senha").val() != $("#pj_senha").val())) {
        $("#pj_senha_errada").removeClass("icon-red");
        validar_senha_pj = true;
    }
});

$('#pj_email').keydown(function () {
    $("form").submit(function () { return false; });
    //atribuindo o valor do campo
    var sEmail = $("#pj_email").val();
    // filtros
    var emailFilter = /^.+@.+\..{2,}$/;
    var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
    // condição
    if (!(emailFilter.test(sEmail)) || sEmail.match(illegalChars)) {
        $("#pj_email").addClass("icon-red");
        validar_email_pj = false;

    } else {
        $("#pj_email").removeClass("icon-red");
        validar_email_pj = true;
    }
});

$('#pj_email').focus(function () {
    $("#pj_email").removeClass("icon-red");
});

validar_senha_pj = false;
validar_email_pj = false;
validar_cnpj = false;

$("#eppainel5").on("click", function () {
    if (validar_senha_pj && validar_email_pj && validar_cnpj) {

        $("#v_pj_nome").text($("#pj_nome").val());
        $("#v_pj_nome_fantasia").text($("#pj_nome_fantasia").val());
        $("#v_pj_CNPJ").text($("#pj_CNPJ").val());
        $("#v_pj_cep").text($("#pj_cep").val());
        $("#v_pj_estado").text($("#pj_estado").find(":selected").text());
        $("#v_pj_cidade").text($("#pj_cidade").val());
        $("#v_pj_logradouro").text($("#pj_logradouro").val());
        $("#v_pj_bairro").text($("#pj_bairro").val());
        $("#v_pj_logradouro_numero").text($("#pj_logradouro_numero").val());
        $("#v_pj_logradouro_complemento").text($("#pj_logradouro_complemento").val());
        $("#v_pj_telefone_fixo").text($("#pj_telefone_fixo").val());
        $("#v_pf_telefone_fixo2").text($("#pj_telefone_fixo2").val());
        $("#v_pj_email").text($("#pj_email").val());

        $("#bpainel6").css("display", "block");
        $("#bpainel6").click();
    } else {

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr["warning"]("Preencha as informações necessárias.", "Ops...");

        return false;
    }
});

$("#verificar_pj").on("click", function () {
    if ($("#pessoa_selecionada").val() == 'pj') {
        if($("#pj_nome").val().length > 1){
            if($("#pj_nome_fantasia").val().length > 1){
                if($("#pj_CNPJ").val().length > 1 && validar_cnpj){
                    if($("#pj_cep").val().length > 1){
                        if(!$("#pj_estado").val() == false){
                            if(!$("#pj_cidade").val() == false){
                                if($("#pj_logradouro").val().length > 1){
                                    if($("#pj_bairro").val().length > 1){
                                        if($("#pj_logradouro_numero").val().length > 1){
                                            if($("#pj_telefone_fixo").val().length > 1){
                                                if($("#pj_email").val().length > 1 && validar_email_pj){
                                                    if($("#pj_senha").val().length > 1 && validar_senha_pj){

                                                        $.post('/confirmarcadastropj',
                                                            {
                                                                nome: $("#pj_nome").val(),
                                                                nomeFantasia: $("#pj_nome_fantasia").val(),
                                                                cnpj: $("#pj_CNPJ").val(),
                                                                cep: $("#pj_cep").val(),
                                                                estado: $("#pj_estado").val(),
                                                                cidade: $("#pj_cidade").val(),
                                                                logradouro: $("#pj_logradouro").val(),
                                                                bairro: $("#pj_bairro").val(),
                                                                logradouro_numero: $("#pj_logradouro_numero").val(),
                                                                logradouro_complemento: $("#pj_logradouro_complemento").val(),
                                                                telefonefixo: $("#pj_telefone_fixo").val(),
                                                                telefonefixo2: $("#pj_telefone_fixo2").val(),
                                                                email: $("#pj_email").val(),
                                                                senha: $("#pj_senha").val()
                                                            },
                                                            function (rs) {
                                                                window.location.href = rs;
                                                            }
                                                        );
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
});