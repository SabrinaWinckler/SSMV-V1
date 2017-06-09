$("#entrar").on("click", function(){
    if($("#email").val().length > 6){
        if($("#senha").val().length > 3){
            $.post('/logar', {email: $("#email").val(), senha: $("#senha").val()}, function (rs) {
                if(rs == 'Err1'){
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
                } else if (rs == 'Err2'){
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
            "onclick": function(){$("#senha").focus()},
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
            "onclick": function(){$("#email").focus()},
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
  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    FB.api('/me', {fields: 'id'}, function(response) {
        $.post('/fblogar', {fb: response["id"]}, function (rs) {
            if(rs == 'Err1'){
                $("#titulo_modalFb").text("Ops...");
                $("#body_modalFb").text("Este facebook não está vinculado a nenhuma conta.");
                $("#modalFb").modal();
                $("#cadastrar_fb").attr("fbid", response["id"]);

            } else if(rs == 'Err2') {
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

function cadastrar_fb(){
        window.location.href = "/cadastro?fb=" + $("#cadastrar_fb").attr("fbid");
};