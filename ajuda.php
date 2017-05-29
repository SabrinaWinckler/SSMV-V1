<!DOCTYPE html>
<html lang="pt-br">
<head>
<style>
.ajuda {
	width: 100%; 
	height: 100%; 
	background-color: rgba(238,180,180,0.4); 
	border: 2px #8B6969;
	shadow: 1px 1px rgb(0,0,0);	
}
.ajuda h2{
	text-align: center;
	font-size: 32px;
	font-family: 'Pacifico', Sans serif, Times New Roman;
}
.ajuda button{
	background-color: #EE3B3B;
	position: relative;
	margin-left: 30%;
	font-family: 'Open sans', Sans serif, Times New Roman;
	font-size: 32px;
	color: white;
	width: 40%;
	height: 20%;
	border-radius: 34px;
}
/* Modal (background) */
.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 1; /* Sit on top */
left: 0;
top: 0;
width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
-webkit-animation-name: fadeIn; /* Fade in the background */
-webkit-animation-duration: 0.4s;
animation-name: fadeIn;
animation-duration: 0.4s;
}
/* Modal caixa(content) */
.modal-content {
padding: 20px;
text-align: center;
position: fixed;
margin-left: 300px;
margin-right: 300px;
margin-top: 80px;
background-color: #FFF5EE;
width: 50%;
-webkit-animation-name: slideIn;
-webkit-animation-duration: 0.3s;
animation-name: slideIn;
animation-duration: 0.2s
}
/* bot�o de fechar */
.close {
color: white;
float: right;
font-size: 28px;
font-weight: bold;
}
.close:hover,
.close:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}
.modal-header {
padding: 2px 16px;
background-color: #8B3A3A;
color: white;
}
.modal p {
	font-family: Times New Roman;
	font-size: 20px;
}
.modal-footer {
padding: 2px 16px;
background-color: #8B3A3A;
color: white;
}
/* Add Animation */
@-webkit-keyframes slideIn {
from {bottom: -300px; opacity: 0}
to {bottom: 0; opacity: 1}
}
@keyframes slideIn {
from {bottom: -300px; opacity: 0}
to {bottom: 0; opacity: 1}
}
@-webkit-keyframes fadeIn {
from {opacity: 0}
to {opacity: 1}
}
@keyframes fadeIn {
from {opacity: 0}
to {opacity: 1}
}
</style>
</head>
<body>
	<div class="ajuda">
		<h2>Dúvidas</h2>

		<!-- Abrir0 -->
		<button id="myBtn">Como Realizar o Cadastro?</button>
		
		
					<!-- 0 -->
					<!-- Modal -->
					<div id="myModal" class="modal">
						<!-- Modal content -->
						<div class="modal-content">
						<div class="modal-header">
						<span class="close">&times;</span>
						<h2>Como Realizar o Cadastro?</h2>
					</div>
					<div class="modal-body">
						<p>Para se cadastrar é necessário possuir um e-mail
						válido ou uma conta ativada no facebook.
						Tendo um dos dois você acessa a p�gina inicial clicando 
						no �cone do site e clica no bot�o "Cadastro".
						Depois � s� preencher os devidos campos com seus dados
						e avan�ar as se��es, conferir seus dados, se houver 
						algum erro voc� pode voltar as se��es at� concluir
						o cadastro.</p>
					</div>
						<div class="modal-footer">
							<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
						</div>
	
</div> </div>
		<!-- 1 -->
		<button id="myBtn1">Como Realizar Doa��o?</button>
		        <div id="myModal1" class="modal">
			<div class="modal-content">
			<div class="modal-header">
				
			<span1 class="close">&times;</span1>
				<h2>Como Realizar Doa��o?</h2>	
			</div> 
				<div class="modal-body">
					<p>Para doar voc� precisa estar logado e autenticado no sistema, ap�s isto, clique na aba do canto direito "Quero doar". 
					O site procura o hemocentro mais pr�ximo de voc� e a partir da� voc� marca um hor�rio no hemocentro de sua prefer�ncia.</p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 2 -->
		<button id="myBtn2">Como Fazer Requisi��o?</button>
		        <div id="myModal2" class="modal">
			<div class="modal-content">
			<div class="modal-header">
			<span2 class="close">&times;</span2>
				<h2>Como Fazer Requisi��o?</h2>
			</div>
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, clique na aba "Requisi��o" localizada no canto esquerdo da tela, preencha os campos obrigat�rios que ir�o aparecer na tela e no canto inferior da tela clique em "Confirmar"
					A partir da� o sistema envia uma solicita��o com as informa��es inseridas por voc� a todos os hemocentros num raio de 300km e usu�rios com o tipo sangu�neo requisitado. </p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 3 -->
		<button id="myBtn3">Como Gerar Cronograma?</button>
		        <div id="myModal3" class="modal">
			<div class="modal-content">
			<div class="modal-header">
			<span3 class="close">&times;</span3>
				<h2>Como Gerar Cronograma?</h2>
			</div>
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, clique na aba "Cronograma", aparecer� uma tela na qual voc� seleciona de que dia at� que dia o hemocentro funciona, assim como os hor�rios de atendimento, que ser�o utilizados por outros usu�rios para fazer agendamentos em seu hemocentro. Ap�s preenchidos todos os campos obrigat�rios clique em "Confirmar" no canto inferior da tela.</p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 4 -->
		<button id="myBtn4">Como Marcar Hor�rio em Hemocentro?</button>
		        <div id="myModal4" class="modal">
			<div class="modal-content">
			<div class="modal-header">
			<span4 class="close">&times;</span4>
				<h2>Como Marcar Hor�rio em Hemocentro?</h2>
			</div>
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, clique em "Quero Doar", voc� ser� direcionado para uma tela com os hemocentros mais pr�ximos de voc� (Num raio de 300km), Selecione o hemocentro de sua prefer�ncia, em seguida aparecer� um calend�rio no qual voc� escolhe o dia de sua prefer�ncia e o sistema mostra os hor�rios disponiveis no dia selecionado, caso todos esejam ocupados, basta voc� clicar em outra data e selecionar um hor�rio que esteja dispon�vel, logo na mesma tela numa caixa de texto na �rea inferior da tela aparecer�o as informa��es selecionadas por voc�, em seguida basta clicar em "Confirmar" no canto inferior esquerdo da tela e seu hor�rio estar� marcado, ou se preferir pode cancelar seu agendamento, clicando em "Cancelar" ao lado do bot�o de "Confirmar". </p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 5 -->
		<button id="myBtn5">Como Vizualizar Requisi��es?</button>
		        <div id="myModal5" class="modal">
			<div class="modal-content">
			<div class="modal-header">
				
			<span5 class="close">&times;</span5>
				<h2>Como Vizualizar Requisi��es?</h2>	
			</div> 
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, clique no �cone de notifica��es e verifique se possui alguma requisi��o.</p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 6 -->
		<button id="myBtn6">Como Cancelar Agendamento?</button>
		        <div id="myModal6" class="modal">
			<div class="modal-content">
			<div class="modal-header">
				
			<span6 class="close">&times;</span6>
				<h2>Como Cancelar Agendamento?</h2>	
			</div> 
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, se voc� j� marcou um hor�tio e deseja cancel�-lo, clique em "Quero Doar", na tela aparecer� o bot�o "Editar Agendamento", clique nele e clique na op��o "Cancelar Agendamento", seu agendamento ser� cancelado, se ainda n�o marcou, mas est� na tela onde aparece o calend�rio, clique em "Cancelar" e pronto!</p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 7 -->
		<button id="myBtn7">Como Editar Agendamento?</button>
		        <div id="myModal7" class="modal">
			<div class="modal-content">
			<div class="modal-header">
				
			<span7 class="close">&times;</span7>
				<h2>Como Editar Agendamento?</h2>	
			</div> 
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, clique em "Quero Doar", na tela aparecer� o bot�o "Editar Agendamento", ao selecionar esta op��o voc� poder� alterar todas as op��es selecionadas anteriormente, e clicando em "Salvar Altera��es" voc� altera seu dia e hor�rio no hemocentro selecionado. </p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 8 -->
		<button id="myBtn8">Como Editar Cronograma?</button>
		        <div id="myModal8" class="modal">
			<div class="modal-content">
			<div class="modal-header">
				
			<span8 class="close">&times;</span8>
				<h2>Como Editar Cronograma?</h2>	
			</div> 
				<div class="modal-body">
					<p>Para realizar esta a��o voc� precisa estar logado e autenticado no sistema. Ap�s isto, clique em "Cronograma", em seguida aparecer� a op��o "Editar cronograma", ao selecionar esta op��o ser� dorecionado a uma tela igual a que vizualizou quando adcionou as informa��es pela primeira vez, logo modifique o que desejar no cronograma e clique em "Salvar altera��es", e seu cronograma estar� atualizado, ou se desejar voc� tamb�m pode "Descartar altera��es", e nada ser� modificado.</p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>
		<!-- 9 -->
		<button id="myBtn9">Onde Encontro Mais Informa��es Sobre Doa��o de Sangue?</button>
		        <div id="myModal9" class="modal">
			<div class="modal-content">
			<div class="modal-header">
				
			<span9 class="close">&times;</span9>
				<h2>Como Realizar Doa��o?</h2>	
			</div> 
				<div class="modal-body">
					<p>Basta clicar no FAQ, na barra de navega��o ou logar no sistema e acessar a aba "Instru��es Gerais" localizada no canto esquerdo.</p>
				</div>
					<div class="modal-footer">
						<h2>Continua com d�vida ou n�o consegue realizar alguma das etapas?<br>Entre em contato conosco!</h2>
					</div>
</div> </div>

	</div>
</body>
<script>

// Declarar cadastro
var modal = document.getElementById('myModal');
// Declarar doa��o
var modal1 = document.getElementById('myModal1');
// Solicita��o
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');
var modal5 = document.getElementById('myModal5');
var modal6 = document.getElementById('myModal6');
var modal7 = document.getElementById('myModal7');
var modal8 = document.getElementById('myModal8');
var modal9 = document.getElementById('myModal9');

// Declarar bot�o cadastro
var btn = document.getElementById("myBtn");
// Declarar bot�o doa��o
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");

// Declarar <span> (x)
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];
var span2 = document.getElementsByClassName("close")[2];
var span3 = document.getElementsByClassName("close")[3];
var span4 = document.getElementsByClassName("close")[4];
var span5 = document.getElementsByClassName("close")[5];
var span6 = document.getElementsByClassName("close")[6];
var span7 = document.getElementsByClassName("close")[7];
var span8 = document.getElementsByClassName("close")[8];
var span9 = document.getElementsByClassName("close")[9];

//Quando o usu�rio clicar no bot�o abrir modal.
btn.onclick = function() {
modal.style.display = "block";
}
//1
btn1.onclick = function() {
modal1.style.display = "block";
}

// Quando clicar no <span> (x), BOT�O DE FECHAR(X)
span.onclick = function(){
modal.style.display = "none";
}
//1
span1.onclick = function(){
modal1.style.display = "none";
}


//2
btn2.onclick = function() {
modal2.style.display = "block";
}

//2
span2.onclick = function(){
modal2.style.display = "none";
}



//3
span3.onclick = function(){
modal3.style.display = "none";
}
btn3.onclick = function() {
modal3.style.display = "block";
}




//4
btn4.onclick = function() {
modal4.style.display = "block";
}
span4.onclick = function(){
modal4.style.display = "none";
}


//5
span5.onclick = function(){
modal5.style.display = "none";
}
btn5.onclick = function() {
modal5.style.display = "block";
}

//6
span6.onclick = function(){
modal6.style.display = "none";
}
btn6.onclick = function() {
modal6.style.display = "block";
}


//7
span7.onclick = function(){
modal7.style.display = "none";
}
btn7.onclick = function() {
modal7.style.display = "block";
}


//8
span8.onclick = function(){
modal8.style.display = "none";
}
btn8.onclick = function() {
modal8.style.display = "block";
}


//9
span9.onclick = function(){
modal9.style.display = "none";
}
btn9.onclick = function() {
modal9.style.display = "block";
}
// Quando o usu�rio clicar fora do modal ele fecha
// window.onclick = function(event) {
// if (event.target == modal) {
// modal.style.display = "none";
//}


</script>

</html>