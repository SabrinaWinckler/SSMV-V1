   <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo BASECDN; ?>libs/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo BASECDN; ?>scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo BASECDN; ?>magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo BASECDN; ?>jquery/jquery.cookie.js"></script>

    <!-- Plugins personalizados -->
    <script src="<?php echo BASECDN; ?>js/acessibilidade.js"></script>
    <script src="<?php echo BASECDN; ?>js/text_expand.js"></script>

    <script>
    jQuery.fbInit = function() {
        window.fbAsyncInit = function() {
            FB.init({
                appId      : 213962312451886, // App ID
                status     : true, // check login status
                cookie     : true, // enable cookies to allow the server to access the session
                xfbml      : true, // parse XFBML
                version    : 'v2.8'  
            });
        };

        // Load the SDK Asynchronously
        (function(d){
            var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/pt_BR/all.js";
            d.getElementsByTagName('head')[0].appendChild(js);
        }(document));
    };
    </script>

    <script>
        inicio = $("#principal").html();

        $(document).ready(function() {
            $.fbInit();
            if($.cookie("acessibilidade") == "TRUE"){
                acessibilidade("SIM");
            }
        });

        $("#comeco").on("click", function(){
            $("#principal").fadeOut("slow", function(){
                $("title").text("Página Inicial :: Seu Sangue, Minha Vida");
                $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("inicio");
                $("#principal").html(inicio);
                if($.cookie("acessibilidade") == "TRUE"){
                    acessibilidade("SIM");
                }
                $("#principal").fadeIn("slow");
            });
        });

        $("#quemsomos").on("click", function(){
            $("#principal").fadeOut("slow", function(){
                $("title").text("Quem somos? :: Seu Sangue, Minha Vida");
                $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("quemsomos");
                $("#principal").html("");
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
                $("#principal").html("<h1> Perguntas Frequentes</h1> <p>- Doar sangue engorda ou faz emagrecer?<br>Ao doar sangue você não engorda nem emagrece.<br>- Doar sangue engrossa ou afina o sangue?<br>Não engrossa nem afina o sangue, é apenas um mito.<br>- Doar sangue vicia?<br>Não. A doação de sangue não está relacionada a nenhuma dependência.<br>- É preciso algum documento de identidade?<br>Sim. O candidato deve apresentar documento original com foto, expedido pelo órgão oficial. Exemplos: Carteira de Identidade (RG ou RNE), passaporte, Carteira de Trabalho, Carteira de <>Identidade de Profissional, Carteira Nacional de Habilitação com foto e Certificado de Reservista.<br>- Fiz uma tatuagem há um ano. Posso doar?<br>Sim. Quem fez tatuagem há mais de um ano pode doar sangue.<br>- Há substituto para o sangue?<br>Não. Ainda não há nenhum substituto do sangue.<br>- O que é sangue universal?<br>Hoje sabemos que não existe sangue universal. Todas as pessoas têm características diferentes e por isso, quando necessitam de transfusão de sangue,precisamos fazer exames pré-transfusionais independente do grupo sanguíneo do doador e do receptor.<br>- O que é feito com o sangue que doamos?<br>Após a coleta, a bolsa coletada é fracionada em componentes sangüíneos (concentrado de hemácias, de plaquetas e plasma). Esses componentes são liberados para uso somente após o resultado dos exames. As unidades que apresentam reatividade sorológica são descartadas. Uma única unidade doada pode beneficiar três pacientes.<br>- O que é sangue raro?<br>É um sangue com característica especifica de baixa frequência na população e algumas vezes, pode ser uma característica familiar.<br>- O que se consegue em troca da doação de sangue?<br>A satisfação de beneficiar pessoas que não têm outra opção e dependem do gesto de pessoas como você para se sentir melhor.<br>- Tomei vacina para Hepatite B. Posso doar sangue?<br>A vacinação para Hepatite B impede a doação por 48 horas.<br>- A mulher pode doar sangue durante o período menstrual?<br>Sim.<br>- Doar sangue dói?<br>Não.<br>- O que acontece se uma pessoa que não sabe se está anêmica quiser doar sangue?<br>O candidato à doação é atendido por um profissional do Serviço de Hemoterapia, que realiza um teste rápido para verificar se o doador está ou não anêmico.<br>- O que são situações de risco acrescido para se transmitir doenças através da doação de sangue?<br>Ter múltiplos parceiros sexuais ocasionais ou eventuais sem uso de preservativo, usar drogas ilícitas, ter feito sexo em troca de dinheiro ou droga, ter sido vítima de estupro, ser parceiro sexual de pessoa que tenha exame reagente para infecções de transmissão sexual e sangüínea, ter parceiro sexual que pertença a alguma das situações acima, dentre outras.<br>- O uso de medicamento pode impedir alguém de doar?<br>O uso de medicamento deve ser analisado caso a caso. Portanto, antes de doar consulte o Serviço de Hemoterapia.<br>- Quanto tempo dura a doação?<br>O procedimento todo (cadastro, aferição de sinais vitais, teste de anemia, triagem clínica, coleta do sangue e lanche) leva cerca de 40 minutos.<br>- Quanto tempo leva para o organismo repor o sangue doador?<br>O organismo repõe o volume de sangue doado nas primeiras 24 horas após a doação.<br>- Quem está fazendo regime para emagrecer ou dieta pode doar sangue?<br>Sim. Dietas para emagrecimento não impedem a doação de sangue, desde que a perda não tenha comprometido a saúde.<br>- Quem estiver fazendo tratamento homeopático pode doar sangue?<br>Sim.<br>- Quem estiver fazendo tratamento com algum antibiótico pode doar sangue?<br>Depende do porquê a pessoa está tomando antibióticos. Em linhas gerais, para infecções simples e sem complicações, o doador deve aguardar 15 dias após a última dose do antibiótico para doar sangue. Infecções mais graves como pneumonia, meningite, entre outras, podem necessitar de um tempo maior para liberação do candidato à doação.<br>- Quem estiver fazendo tratamento com algum anti-inflamatório pode doar sangue?<br>Dependendo do motivo, a doação pode ser realizada normalmente. Não se esqueça de informar o nome do anti-inflamatório que você esta tomando.<br>- Quem faz tratamento para acne pode doar sangue?<br>Depende do tipo de tratamento. Caso o tratamento inclua o uso de antibióticos ou outros remédios de uso oral, não será posspivel doar.<br>- Quem tomou analgésico pode doar sangue?<br>Pode, mas é importante que no dia da doação o doador esteja sem dores.<br>- Grávidas podem doar sangue?<br>Não. Mas se o parto for normal, a mulher pode doar depois de três meses. Em caso de cesariana, após seis meses. Se estiver amamentando, aguardar 12 meses após o parto.<br>- É necessário estar em jejum para doar sangue?<br>O doador não deve estar em jejum. Tem que estar alimentado e descansado, evitar alimentação gordurosa nas quatro horas que antecedem a doação.<br>- Quem está gripado pode doar sangue?<br>Recomenda-se aguardar sete dias após a cura para poder doar.<br>- Quem tem diabete pode doar sangue?<br>Se a pessoa que tenha diabetes estiver controlando apenas com alimentação ou hipoglicemiantes orais e não apresente alterações vasculares, poderá doar. Caso ela tenha utilizado insulina<br>uma única vez, não poderá doar.</p>");
                if($.cookie("acessibilidade") == "TRUE"){
                    $("#acessibilidade").click("SIM");
                }
                $("#principal").fadeIn("slow");
             });
        });

        // $("#ajuda").on("click", function(){
        //     $("title").text("Ajuda :: Seu Sangue, Minha Vida");
        //     $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("ajuda");
        //     $("#principal").html("");
        //     if($.cookie("acessibilidade") == "TRUE"){
        //         acessibilidade("SIM");
        //     }
        // });

        $("#contato").on("click", function(){
            $("#principal").fadeOut("slow", function(){
                $("#principal").html('<div class="col-md-2"></div><div class="col-md-8"><div class="contato-box"><h3 class="contato-titulo">Contate-nos e retornaremos o mais rapido possível!</h3><form id="contato"><label for="nome" class="contato-sub">Nome completo</label><br /><input type="text" id="nome" placeholder="Digite seu nome..."><br /><label for="email" class="contato-sub">Email</label><br /><input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu email..."><br /><label for="assunto" class="contato-sub">Assunto</label><br /><textarea id="assunto" name="assunto" class="contato-assunto" placeholder="Escreva aqui sua mensagem..."></textarea><br /><input type="button" value="Enviar"></form></form></div></div><div class="col-md-2"></div>');
                $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("contato");
                $("title").text("Contato :: Seu Sangue, Minha Vida");
                if($.cookie("acessibilidade") == "TRUE"){
                    acessibilidade("SIM");
                }
                $("#principal").fadeIn("slow");
            });
        });
    </script>
</body>

<!-- Modal -->
<div class="modal fade" id="ajuda" tabindex="-1" role="dialog" aria-labelledby="modalAjuda">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titulo_modalAjuda">Ajuda</h4>
            </div>
            <div class="modal-body">
                A AJUDA PODE VIR AQUI
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

 <!-- http://www.inca.gov.br/conteudo_view.asp?id=2013 -->
</html>
