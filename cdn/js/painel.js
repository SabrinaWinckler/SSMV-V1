$(document).ready(function () {
    $('#tabela-requisicao').DataTable({ "aoColumnDefs": [{ "bSortable": false, "aTargets": [6] }] });
    // $('#tabela-requisicao').DataTable().language({});
});

$("#entrar").on("click", function () {
    if ($("#email").val().length > 6) {
        if ($("#senha").val().length > 3) {
            $.post('/logar', { email: $("#email").val(), senha: $("#senha").val() }, function (rs) {
                if (rs == 'Err1') {
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
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

                    toastr["warning"]("E-mail ou senha inválida!", "Ops...");
                } else if (rs == 'Err2') {
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-bottom-right",
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

                    toastr["warning"]("E-mail ou senha não informado!", "Ops...");
                } else {
                    window.location.href = rs;
                }
            });
        } else {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "onclick": function () { $("#senha").focus() },
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr["info"]("Preencha o campo &ldquo;Senha&rdquo;.", "Ops...");
        }
    } else {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "onclick": function () { $("#email").focus() },
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr["info"]("Preencha o campo &ldquo;E-mail&rdquo;.", "Ops...");
    }
});

function checkLoginState() {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            FB.api('/me', { fields: 'id' }, function (response) {
                $.post('/fblogar', { fb: response["id"] }, function (rs) {
                    if (rs == 'Err1') {
                        $("#titulo_modalFb").text("Ops...");
                        $("#body_modalFb").text("Este facebook não está vinculado a nenhuma conta.");
                        $("#modalFb").modal();
                        $("#cadastrar_fb").attr("fbid", response["id"]);

                    } else if (rs == 'Err2') {
                        $("#titulo_modalFb").text("Ops...");
                        $("#body_modalFb").text("Não foi possivel identificar o facebook.");
                        $("#footer_modalFb").html('<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>');
                        $("#modalFb").modal();
                    } else {
                        window.location.href = rs;
                    }
                });
            });
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
        } else if (response.status === 'not_authorized') {
            $("#titulo_modalFb").text("Não autorizado.");
            $("#body_modalFb").text("Você não autorizou a utilização do seu facebook.");
            $("#footer_modalFb").html('<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>');
            $("#modalFb").modal();
        } else {
            $("#titulo_modalFb").text("Erro.");
            $("#body_modalFb").text("Não foi possivel identificar o erro.");
            $("#footer_modalFb").html('<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>');
            $("#modalFb").modal();
        }
    });
}

function cadastrar_fb() {
    window.location.href = "/cadastro?fb=" + $("#cadastrar_fb").attr("fbid");
};

function solicitar_doacao() {
    if ($("#requisitor_nome").val().length > 1) {
        if (!$("#tipo_sangue").val() == false) {
            if ($("#dia").val().length > 0) {
                if (!$("#urgencia").val() == false) {
                    if ($("#selecionar_hemocentro").attr("value").length > 0) {
                        $.post(basepainel + 'solicitar', {
                            idusuario: id,
                            nome: $("#requisitor_nome").val(),
                            tipo_sangue: $("#tipo_sangue").val(),
                            dia: $("#dia").val(),
                            urgencia: $("#urgencia").val(),
                            hemocentro: $("#selecionar_hemocentro").attr("value")
                        }, function (rs) {
                            var idsfacebook = jQuery.parseJSON(rs);
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
                            toastr["success"]("A sua solicitação de sangue foi efetuada!", "Solicitação efetuada!");
                            toastr["success"]("Enviando notificações!", "Solicitação efetuada!");

                            if (idsfacebook.length > 0) {
                                $.each(idsfacebook, function (indice, valor) {
                                    FB.api('/' + valor + '/notifications?template= Olá @[' + valor + '], ' + nome + ' está precisando de doação de sangue. E seu sangue é compativel com o dele que é ' + $('#tipo_sangue').find(":selected").text() + ' .&href=localhost&ref=?TESTE&access_token=213962312451886|dM6ZBAut7W2a2DXu9sJJQbnC91A', 'post');
                                });
                            }

                            FB.getLoginStatus(function (response) {
                                if (response.status === 'connected') {
                                    FB.login(function () {
                                        FB.api('/me/feed', 'post', { message: '!!! IGNOREM !!! SOFTWARE TESTE - Estou precisando de doação de sangue compatível com ' + $('#tipo_sangue').find(":selected").text() });
                                    }, { scope: 'publish_actions' });

                                    var uid = response.authResponse.userID;
                                    var accessToken = response.authResponse.accessToken;
                                } else if (response.status === 'not_authorized') {
                                    console.log(response);
                                } else {
                                    console.log(response);
                                }
                            });

                            $("#requisitor_nome").val("");
                            // $("#tipo_sangue").val("");
                            $("#dia").val("");
                            $("#urgencia").val("");
                            $("#requisitor_nome").prop("disabled", false);
                            $("#tipo_sangue").prop("disabled", false);
                            $("#requisitor_mim").prop("checked", false);
                        });
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

                        toastr["error"]("Está faltando informar o hemocentro de preferência", "Erro...");
                    }
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

                    toastr["error"]("Está faltando informar a urgência!", "Erro...");
                }
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

                toastr["error"]("Está faltando informar o dia!", "Erro...");
            }
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

            toastr["error"]("Está faltando informar o tipo sanguíneo!", "Erro...");
        }
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

        toastr["error"]("Está faltando informar o nome!", "Erro...");
    }
}

$("#requisitor_mim").on("change", function () {
    if ($(this).prop("checked")) {
        $("#requisitor_nome").val(nome);
        $("#requisitor_nome").prop("disabled", true);
        $("#tipo_sangue").val(sangue);
        $("#tipo_sangue").prop("disabled", true);
    } else {
        $("#requisitor_nome").val("");
        $("#tipo_sangue").val("");
        $("#requisitor_nome").prop("disabled", false);
        $("#tipo_sangue").prop("disabled", false);
    }
});

function removerRequisicao(id_req) {
    $.post(basepainel + '/remover_requisicao', { idreq: id_req }, function (rs) {
        console.log(rs);

        if (rs == "Err1") {
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

            toastr["error"]("Não foi removido!", "Erro");
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

            toastr["success"]("Solicitação removida com sucesso.", "Removido com sucesso");

            $("#tabela-requisicao").DataTable().row($("#tr-" + id_req)).remove();
            $("#tabela-requisicao").DataTable().draw();
        }
    });
}

function pesquisar_requisicoes() {
    var content = $('div #lista_requisicoes');

    loading = new Image();
    loading.src = '/cdn/img/gif/carregando.gif';
    content.html('<center><img class="painel_loading" src="/cdn/img/gif/carregando.gif"/></center>');

    $.post(basepainel + 'pesquisar_requisicoes', { filtro: $("#p_requisitor_nome").val(), iduser: id }, function (rs) {
        if (rs == "") {
            rs = '<center><a style="cursor: pointer" onclick=$("#p_requisitor_nome").val("");$("#pesquisar_requisicoes").click();><h2><i class="fa  fa-exclamation-circle"> Nenhum registro encontrado </h2></a></center>';
        }
        window.setTimeout(function () {
            content.fadeOut('slow', function () {
                content.html(rs).fadeIn();
            });
        }, 500);
    });
}

function querodoar(ireq){

    $.post(basepainel + 'querodoar', { idreq: ireq }, function (rs) {
        var querodoar = jQuery.parseJSON(rs);
        console.log(querodoar);

        

    })


    $("#modalQuerodoar").modal();
}