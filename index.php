<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
    <!-- jQuery e CSS Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
	<!-- Bootstrap - Templates do rodapé -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/iconeuser.png"/>
    <title>Login - AJAX</title>
    <link rel="stylesheet" href="assets/css/login.css">

<script type="text/javascript">

	$(document).ready(function(){
		$("#loginPlace").load("views/login.php");
	});

</script>
</head>

<nav class="navbar navbar-expand-sm navbar-dar" id="menu-h">
    <div class="container-fluid" id="menu-content">
      <!-- Logo QC Estética
        <a class="navbar-brand" href="#"><img src="" style="height: 50px; width: 50px;"></a> 
      -->

      <button class="navbar-toggler" style="background-color: #45484c;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <img src="assets/img/img_menu_split.png" style="height: 20px; width: 20px;">
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="logo_menu" href="#">Logo</a>
        </li>
        </ul>
      </div>
    </div>
</nav>

<body>
	<br><br><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div id="col-sm-8">
				<div id="loginPlace">
		
				</div>
			</div>
		</div>
	</div>
</body>

<div class="content">
</div>
<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Sobre nós</h5>
                    <ul>
                        <li><a href="#">Informações da Empresa</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Telefones</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Informações</h5>
                    <p>Essa é uma página de login para testes com AJAX!</p>
                </div>
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="#"> LOGO </a></h2>
                <div class="social-icons">
                    <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</html>