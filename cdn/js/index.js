$(document).ready(function() {
    if($.cookie("acessibilidade") == "TRUE"){
        acessibilidade("SIM");
    }
    if($(location.hash).length > 0){
        $(location.hash).click();
    }
});

$("#saibamais").on("click", function(){
    $("#quemsomos").click();
});

$("#comeco").on("click", function(){
    $("#principal").fadeOut("slow", function(){
        $("title").text("Página Inicial :: Seu Sangue, Minha Vida");
        $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("inicio");
        $("#principal").html('<div class="col-md-9"><div class="header-content-inner"><h1 id="homeHeading">Seu sangue, minha vida</h1><hr><p>Unindo tecnologia e solidariedade para melhorar vidas!</p><a href="#quemsomos" id="saibamais" class="btn btn-primary btn-xl page-scroll">Saiba mais</a></div></div><div class="col-md-3"><div class="main"><form id="login"><div class="login-section"><h2>Login</h2><div class="login-top"><p>Entre com o facebook</p><div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div></div><div class="login-middle"><p>Entre informando seu email e sua senha</p><input type="text" id="email" placeholder="Digite seu email"><input type="password" id="senha" placeholder="Digite sua senha"></div><div class="login-bottom"><div class="login-left"><a class="btn-tiny pointer">Esqueceu sua senha?</a><br /><a href="/cadastro">Cadastre-se agora!</a></div><div class="login-right"><input type="button" id="entrar" value="Entrar"></div></div></div></form></div></div>');
        if($.cookie("acessibilidade") == "TRUE"){
            acessibilidade("SIM");
        }
        $("#principal").fadeIn("slow");
        FB.XFBML.parse();
    });
});

$("#quemsomos").on("click", function(){
    $("#principal").fadeOut("slow", function(){
        $("title").text("Quem somos? :: Seu Sangue, Minha Vida");
        $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("quemsomos");
        $("#principal").html("<h1>Quem Somos?</h1> <br> <br> <h3>O SSMV (Seu Sangue Minha Vida) é uma plataforma que promove uma conexão entre doadores, receptores e hemocentros da sua cidade.<br> Quando o doador ou receptor fazem o cadastro em nosso site, imediatamente podemos conectá-los através de notificações e informações necessárias para localizarem o hospital ou hemocentro mais próximo. Uma Iniciativa com objetivo de salvar vidas conectando pessoas com este mesmo objetivo.<br> O SSMV foi criado na cidade de Alegrete, no Rio Grande do Sul, por alunos de Engenharia de Software da UNIPAMPA.</h3>");
        if($.cookie("acessibilidade") == "TRUE"){
            acessibilidade("SIM");
        }
        $("#principal").fadeIn("slow");
    });
});

$("#faq").on("click", function(){
        $("#principal").fadeOut("slow", function(){
        $("title").text("FAQ :: Seu Sangue, Minha Vida");
        $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("faq");
        $("#principal").html('<div class="col-md-6"><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="1" onclick="box_faq(1)" ptext="Não."><h4>Doar sangue engrossa ou afina o sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="2" onclick="box_faq(2)" ptext="Sim. O candidato deve apresentar documento original com foto, expedido pelo órgão oficial. Exemplos: Carteira de Identidade (RG ou RNE), passaporte, Carteira de Trabalho, Carteira de Identidade de Profissional, Carteira Nacional de Habilitação com foto e Certificado de Reservista."><h4>É preciso algum documento de identidade?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="3" onclick="box_faq(3)" ptext="Após a coleta, a bolsa coletada é fracionada em componentes sangüíneos (concentrado de hemácias, de plaquetas e plasma). Esses componentes são liberados para uso somente após o resultado dos exames. As unidades que apresentam reatividade sorológica são descartadas. Uma única unidade doada pode beneficiar três pacientes."><h4>O que é feito com o sangue que doamos?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="4" onclick="box_faq(4)" ptext="A satisfação de beneficiar pessoas que não têm outra opção e dependem do gesto de pessoas como você para se sentir melhor."><h4>O que se consegue em troca da doação de sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="5" onclick="box_faq(5)" ptext="Sim."><h4>A mulher pode doar sangue durante o período menstrual?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="6" onclick="box_faq(6)" ptext="O candidato à doação é atendido por um profissional do Serviço de Hemoterapia, que realiza um teste rápido para verificar se o doador está ou não anêmico."><h4>O que acontece se uma pessoa que não sabe se está anêmica quiser doar sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="7" onclick="box_faq(7)" ptext="Ter múltiplos parceiros sexuais ocasionais ou eventuais sem uso de preservativo, usar drogas ilícitas, ter feito sexo em troca de dinheiro ou droga, ter sido vítima de estupro, ser parceiro sexual de pessoa que tenha exame reagente para infecções de transmissão sexual e sangüínea, ter parceiro sexual que pertença a alguma das situações acima, dentre outras."><h4>O que são situações de risco acrescido para se transmitir doenças através da doação de sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="8" onclick="box_faq(8)" ptext="O uso de medicamento deve ser analisado caso a caso. Portanto, antes de doar consulte o Serviço de Hemoterapia."><h4>O uso de medicamento pode impedir alguém de doar?</h4></div></div><div class="col-md-6"><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="9" onclick="box_faq(9)" ptext="O organismo repõe o volume de sangue doado nas primeiras 24 horas após a doação."><h4>Quanto tempo leva para o organismo repor o sangue doador?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="10" onclick="box_faq(10)" ptext="O procedimento todo (cadastro, aferição de sinais vitais, teste de anemia, triagem clínica, coleta do sangue e lanche) leva cerca de 40 minutos."><h4>Quanto tempo dura a doação?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="11" onclick="box_faq(11)" ptext="Depende do porquê a pessoa está tomando antibióticos. Em linhas gerais, para infecções simples e sem complicações, o doador deve aguardar 15 dias após a última dose do antibiótico para doar sangue. Infecções mais graves como pneumonia, meningite, entre outras, podem necessitar de um tempo maior para liberação do candidato à doação."><h4>Quem estiver fazendo tratamento com algum antibiótico pode doar sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="12" onclick="box_faq(12)" ptext="Não. Mas se o parto for normal, a mulher pode doar depois de três meses. Em caso de cesariana, após seis meses. Se estiver amamentando, aguardar 12 meses após o parto."><h4>Grávidas podem doar sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="13" onclick="box_faq(13)" ptext="O doador não deve estar em jejum. Tem que estar alimentado e descansado, evitar alimentação gordurosa nas quatro horas que antecedem a doação."><h4>É necessário estar em jejum para doar sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="14" onclick="box_faq(14)" ptext="Recomenda-se aguardar sete dias após a cura para poder doar."><h4>Quem está gripado pode doar sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="15" onclick="box_faq(15)" ptext="Se a pessoa que tenha diabetes estiver controlando apenas com alimentação ou hipoglicemiantes orais e não apresente alterações vasculares, poderá doar. Caso ela tenha utilizado insulina uma única vez, não poderá doar."><h4>Quem tem diabete pode doar sangue?</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="16" onclick="box_faq(16)" ptext="Dependendo do motivo, a doação pode ser realizada normalmente. Não se esqueça de informar o nome do anti-inflamatório que você esta tomando."><h4>Quem estiver fazendo tratamento com algum anti-inflamatório pode doar sangue?</h4></div></div><br /><br /><br><h4><b>Continua com dúvida ou não consegue realizar alguma das etapas?<br>Entre em contato conosco!</b></h4><br><br><p>Dados de: Copyright © 1996-2017 INCA - Ministério da Saúde - Praça Cruz Vermelha, 23 Centro - 20230-130 - Rio de Janeiro - RJ - Tel. (21) 3207-1000</p>');
        if($.cookie("acessibilidade") == "TRUE"){
            acessibilidade("SIM");
        }
        $("#principal").fadeIn("slow");
        });
});

$("#ajuda").on("click", function(){
    $("#principal").fadeOut("slow", function(){
        $("title").text("Ajuda :: Seu Sangue, Minha Vida");
        $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("ajuda");
        $("#principal").html('<div class="col-md-6"><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="1" onclick="box_ajuda(1)" ptext="Para se cadastrar é necessário possuir um e-mail válido ou uma conta ativada no facebook. Tendo um dos dois você acessa a página inicial clicando no ícone do site e clica no botão &ldquo;Cadastro&rdquo;. Depois é só preencher os devidos campos com seus dados e avançar as seções, conferir seus dados, se houver algum erro você pode voltar as seções até concluir o cadastro."><h4>Como realizar o cadastro</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="2" onclick="box_ajuda(2)"  ptext="Para doar você precisa estar logado e autenticado no sistema, após isto, clique na aba do canto direito &ldquo;Quero doar&rdquo;. O site procura o hemocentro mais próximo de você e a partir daí você marca um horário no hemocentro de sua preferência."><h4>Como realizar doação</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="3" onclick="box_ajuda(3)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique na aba &ldquo;Requisição&rdquo; localizada no canto esquerdo da tela, preencha os campos obrigatórios que irão aparecer na tela e no canto inferior da tela clique em &ldquo;Confirmar&rdquo;. A partir daí o sistema envia uma solicitaçãoo com as informações inseridas por você a todos os hemocentros num raio de 300km e usuários com o tipo sanguíneo requisitado."><h4>Como fazer requisição</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="4" onclick="box_ajuda(4)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique na aba &ldquo;Cronograma&rdquo;, aparecerá uma tela na qual você seleciona de que dia até que dia o hemocentro funciona, assim como os horários de atendimento, que serão utilizados por outros usuários para fazer agendamentos em seu hemocentro. Após preenchidos todos os campos obrigatórios clique em &ldquo;Confirmar&rdquo; no canto inferior da tela."><h4>Como gerar cronograma</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="5" onclick="box_ajuda(5)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique em &ldquo;Quero Doar&rdquo;, você será direcionado para uma tela com os hemocentros mais próximos de você (Num raio de 300km), Selecione o hemocentro de sua preferência, em seguida aparecerá um calendário no qual você escolhe o dia de sua preferência e o sistema mostra os horários disponiveis no dia selecionado, caso todos esejam ocupados, basta você clicar em outra data e selecionar um horário que esteja disponível, logo na mesma tela numa caixa de texto na área inferior da tela aparecerão as informações selecionadas por você, em seguida basta clicar em &ldquo;Confirmar&rdquo; no canto inferior esquerdo da tela e seu horário estará marcado, ou se preferir pode cancelar seu agendamento, clicando em &ldquo;Cancelar&rdquo; ao lado do botão de &ldquo;Confirmar&rdquo;."><h4>Como marcar horário em hemocentro</h4></div></div><div class="col-md-6"><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="6" onclick="box_ajuda(6)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique no ícone de notificações e verifique se possui alguma requisição."><h4>Como visualizar requisições</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="7" onclick="box_ajuda(7)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, se você já marcou um horário e deseja cancela-lo, clique em &ldquo;Quero Doar&rdquo;, na tela aparecerá o botão &ldquo;Editar Agendamento&rdquo;, clique nele e clique na opção &ldquo;Cancelar Agendamento&rdquo;, seu agendamento será cancelado, se ainda não marcou, mas está na tela onde aparece o calendário, clique em &ldquo;Cancelar&rdquo; e pronto!"><h4>Como cancelar agendamento</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="8" onclick="box_ajuda(8)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique em &ldquo;Quero Doar&rdquo;, na tela aparecerá o botão &ldquo;Editar Agendamento&rdquo;, ao selecionar esta opção você poderá alterar todas as opções selecionadas anteriormente, e clicando em &ldquo;Salvar Alterações&rdquo; você altera seu dia e horário no hemocentro selecionado."><h4>Como editar agendamento</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="9" onclick="box_ajuda(9)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique em &ldquo;Cronograma&rdquo;, em seguida aparecerá a opção &ldquo;Editar cronograma&rdquo;, ao selecionar esta opção será direcionado a uma tela igual a que vizualizou quando adicionou as informações pela primeira vez, logo modifique o que desejar no cronograma e clique em &ldquo;Salvar alterações&rdquo;, e seu cronograma estará atualizado, ou se desejar você também pode &ldquo;Descartar alterações&rdquo;, e nada será modificado."><h4>Como editar cronograma</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="10" onclick="box_ajuda(10)" ptext="Basta clicar no FAQ, na barra de navegação ou logar no sistema e acessar a aba &ldquo;Instruções Gerais&rdquo; localizada no canto esquerdo."><h4>Onde encontro mais infromações sobre doação de sangue</h4></div></div><br /><br /><h4>Continua com dúvida ou não consegue realizar alguma das etapas?<br />Entre em contato conosco!</h4>');
        if($.cookie("acessibilidade") == "TRUE"){
            acessibilidade("SIM");
        }

        $("#principal").fadeIn("slow");
    });
});

$("#contato").on("click", function(){
    $("#principal").fadeOut("slow", function(){
        $("#principal").html('<div class="col-md-2"></div><div class="col-md-8"><div class="contato-box"><h3 class="contato-titulo">Contate-nos e retornaremos o mais rapido possível!</h3><form id="contato"><label for="nome" class="contato-sub">Nome completo</label><br /><input type="text" id="nome" placeholder="Digite seu nome..."><br /><label for="email" class="contato-sub">Email</label><br /><input type="text" id="email" name="email" placeholder="Digite seu email..."><br /><label for="assunto" class="contato-sub">Assunto</label><br /><textarea id="assunto" name="assunto" class="contato-assunto" placeholder="Escreva aqui sua mensagem..."></textarea><br /><input type="button" onclick="contato()" value="Enviar"></form></form></div></div><div class="col-md-2"></div>');
        $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("contato");
        $("title").text("Contato :: Seu Sangue, Minha Vida");
        if($.cookie("acessibilidade") == "TRUE"){
            acessibilidade("SIM");
        }
        $("#principal").fadeIn("slow");
    });
});

function box_ajuda(a){
    $("#titulo_modalAjuda").text($("[push=" + a + "]").text());
        $("#body_modalAjuda").text($("[push=" + a + "]").attr("ptext"));
}

function box_faq(a){
    $("#titulo_modalAjuda").text($("[push=" + a + "]").text());
        $("#body_modalAjuda").text($("[push=" + a + "]").attr("ptext"));
}

function contato() {
    $.post('/enviarcontato', {nome: $("#nome").val(), email: $("#email").val(), assunto: $("#assunto").val()}, function (rs) {
        
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

            toastr["success"]("Contato feito com sucesso!", "Ok!");

            $("#nome").val("");
            $("#email").val("");
            $("#assunto").val("");
            });
}

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