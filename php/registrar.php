<!DOCTYPE html>
<html lang="pt-bt">
<head>
  <title>ONG Centro de Defesa ao Pantanal</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css_js/bootstrap.min.css">
  <link herf="../css_js/correcao.css">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="../css_js/bootstrap.min.js"></script>
   <script src="../css_js/correcao.js"></script>
   <style type="text/css">
		html,body{
			background-image: url("../img/bg-login.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			height: 100%;
			font-family: 'Numans', sans-serif;
			}

		.container{
			height: 100%;
			align-content: center;
			}

		.card{
			height: 370px;
			margin-top: auto;
			margin-bottom: auto;
			width: 400px;
			background-color: rgba(0,0,0,0.5) !important;
			}

		.social_icon span{
			font-size: 60px;
			margin-left: 10px;
			color: #FFC312;
			}

		.social_icon span:hover{
			color: white;
			cursor: pointer;
			}

		.card-header h3{
			color: white;
			}

		.social_icon{
			position: absolute;
			right: 20px;
			top: -45px;
			}

		.input-group-prepend span{
			width: 50px;
			background-color: rgb(7,110,0);
			color: black;
			border:0 !important;
			}

		input:focus{
			outline: 0 0 0 0  !important;
			box-shadow: 0 0 0 0 !important;

			}

		.remember{
			color: white;
			}

		.remember input
			{
			width: 20px;
			height: 20px;
			margin-left: 15px;
			margin-right: 5px;
			}

		
		.login_btn{
			background-color: rgb(7,110,0);
			width: 100px;
			}

		.login_btn:hover{
			color: yellow;
			background-color: rgb(0,90,0);
			width: 100px;
			}

		#ajuste{
			color: white;
		}

		#ajuste:hover{
			color: yellow;
		}



		.links{
			color: white;
			}

		.links a{
			margin-left: 4px;
			}
   </style>
</head>

<body>

	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registrar</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="email" type="text" class="form-control" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="senha" type="password" class="form-control" placeholder="senha (até 10 caracteres)">
					</div>
					
					<div class="form-group">
						<a id="ajuste" data-toggle="modal" data-target="#registrado" value="Login" class="btn float-right login_btn">Registrar</a>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Não tem uma conta?<a href="login.php">Entrar</a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div id="registrado" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Registrado Com Sucesso</p>
      </div>
      <div class="modal-footer">
        <a href="login.php" class= "btn btn-primary">Ok</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>