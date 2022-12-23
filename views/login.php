<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<div id="container">
	<form id="frmLogin">
		<div class="container">
			<center>
			<h2 id="titulo_login">Autenticação de Usuário</h2><br>
			<img id="img_iconeuser" src="assets/img/iconeuser.png">
			</center>
			<label for="email"><b>Email:</b></label> 
			<input type="text" placeholder="Digite seu email..." name="email" required> 
			
			<label for="pass"><b>Senha:</b></label> 
			<input type="password" placeholder="Digite sua senha..." name="senha" required>

			<label> 
			<input type="checkbox" checked="checked" name="remember">
				Lembre-me
			</label><br>

			<center><button class="bg-black" id="btnLogin" type="button">Entrar</button></center>
			<div id="msg"></div>
		</div>
	</form>
</div>
<script type="text/javascript">

	$(document).ready(function(){
		
		$("#btnLogin").click(function(){

			// Colocar as informações recebidas pelo formulário na var frmData.
			var frmData = $("#frmLogin").serialize();
			//
			
			$.ajax({
				  url: "controller/respondedor.php", // Para onde eu vou mandar
				  type: "POST", // De que modo eu vou mandar
				  data: frmData, // O que eu vou mandar
				  success: function( responseData ) { // Quando o destino responder
					  var msgTxt = responseData;
					  $("#msg").html(msgTxt);
				  }
				});
		});
	});

</script>