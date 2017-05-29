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

        $("#ajuda").on("click", function(){
            $("#principal").fadeOut("slow", function(){
                $("title").text("Ajuda :: Seu Sangue, Minha Vida");
                $("#design_class").removeClass("inicio quemsomos faq ajuda contato").addClass("ajuda");
                $("#principal").html('<div class="col-md-6"><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="1" onclick="box_ajuda(1)" ptext="Para se cadastrar é necessário possuir um e-mail válido ou uma conta ativada no facebook. Tendo um dos dois você acessa a página inicial clicando no ícone do site e clica no botão &ldquo;Cadastro&rdquo;. Depois é só preencher os devidos campos com seus dados e avançar as seções, conferir seus dados, se houver algum erro você pode voltar as seções até concluir o cadastro."><h4>Como realizar o cadastro</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="2" onclick="box_ajuda(2)"  ptext="Para doar você precisa estar logado e autenticado no sistema, após isto, clique na aba do canto direito &ldquo;Quero doar&rdquo;. O site procura o hemocentro mais próximo de você e a partir daí você marca um horário no hemocentro de sua preferência."><h4>Como realizar doação</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="3" onclick="box_ajuda(3)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique na aba &ldquo;Requisição&rdquo; localizada no canto esquerdo da tela, preencha os campos obrigatórios que irão aparecer na tela e no canto inferior da tela clique em &ldquo;Confirmar&rdquo;. A partir daí o sistema envia uma solicitaçãoo com as informações inseridas por você a todos os hemocentros num raio de 300km e usuários com o tipo sanguíneo requisitado."><h4>Como fazer requisição</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="4" onclick="box_ajuda(4)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique na aba &ldquo;Cronograma&rdquo;, aparecerá uma tela na qual você seleciona de que dia até que dia o hemocentro funciona, assim como os horários de atendimento, que serão utilizados por outros usuários para fazer agendamentos em seu hemocentro. Após preenchidos todos os campos obrigatórios clique em &ldquo;Confirmar&rdquo; no canto inferior da tela."><h4>Como gerar cronograma</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="5" onclick="box_ajuda(5)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique em &ldquo;Quero Doar&rdquo;, você será direcionado para uma tela com os hemocentros mais próximos de você (Num raio de 300km), Selecione o hemocentro de sua preferência, em seguida aparecerá um calendário no qual você escolhe o dia de sua preferência e o sistema mostra os horários disponiveis no dia selecionado, caso todos esejam ocupados, basta você clicar em outra data e selecionar um horário que esteja disponível, logo na mesma tela numa caixa de texto na área inferior da tela aparecerão as informações selecionadas por você, em seguida basta clicar em &ldquo;Confirmar&rdquo; no canto inferior esquerdo da tela e seu horário estará marcado, ou se preferir pode cancelar seu agendamento, clicando em &ldquo;Cancelar&rdquo; ao lado do botão de &ldquo;Confirmar&rdquo;."><h4>Como marcar horário em hemocentro</h4></div></div><div class="col-md-6"><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="6" onclick="box_ajuda(6)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique no ícone de notificações e verifique se possui alguma requisição."><h4>Como visualizar requisições</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="7" onclick="box_ajuda(7)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, se você já marcou um horário e deseja cancela-lo, clique em &ldquo;Quero Doar&rdquo;, na tela aparecerá o botão &ldquo;Editar Agendamento&rdquo;, clique nele e clique na opção &ldquo;Cancelar Agendamento&rdquo;, seu agendamento será cancelado, se ainda não marcou, mas está na tela onde aparece o calendário, clique em &ldquo;Cancelar&rdquo; e pronto!"><h4>Como cancelar agendamento</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="8" onclick="box_ajuda(8)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique em &ldquo;Quero Doar&rdquo;, na tela aparecerá o botão &ldquo;Editar Agendamento&rdquo;, ao selecionar esta opção você poderá alterar todas as opções selecionadas anteriormente, e clicando em &ldquo;Salvar Alterações&rdquo; você altera seu dia e horário no hemocentro selecionado."><h4>Como editar agendamento</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="9" onclick="box_ajuda(9)" ptext="Para realizar esta ação você precisa estar logado e autenticado no sistema. Após isto, clique em &ldquo;Cronograma&rdquo;, em seguida aparecerá a opção &ldquo;Editar cronograma&rdquo;, ao selecionar esta opção será direcionado a uma tela igual a que vizualizou quando adicionou as informações pela primeira vez, logo modifique o que desejar no cronograma e clique em &ldquo;Salvar alterações&rdquo;, e seu cronograma estará atualizado, ou se desejar você também pode &ldquo;Descartar alterações&rdquo;, e nada será modificado."><h4>Como editar cronograma</h4></div><div class="info-box pointer" data-toggle="modal" data-target="#modalAjuda" push="10" onclick="box_ajuda(10)" ptext="Basta clicar no FAQ, na barra de navegação ou logar no sistema e acessar a aba &ldquo;Instruções Gerais&rdquo; localizada no canto esquerdo."><h4>Onde encontro mais infromações sobre doação de sangue</h4></div></div>');
                if($.cookie("acessibilidade") == "TRUE"){
                    acessibilidade("SIM");
                }
                $("#principal").fadeIn("slow");
            });
        });

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

        function box_ajuda(a){
            $("#titulo_modalAjuda").text($("[push=" + a + "]").text());
             $("#body_modalAjuda").text($("[push=" + a + "]").attr("ptext"));
        }
    </script>
</body>

<!-- Modal -->
<div class="modal fade" id="modalAjuda" tabindex="-1" role="dialog" aria-labelledby="modalAjuda">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titulo_modalAjuda">Ajuda</h4>
            </div>
            <div class="modal-body" id="body_modalAjuda">
                A AJUDA PODE VIR AQUI
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

 <!-- http://www.inca.gov.br/conteudo_view.asp?id=2013 -->
</html>
