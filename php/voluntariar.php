<div class="cont container mg-header mb-5">
	  
	<div class="row mb-2">
	    <p class="ml-4 ">Nossa ONG hoje abriga cerca de 50 animais selvagens. Nós somos apenas 5 pessoas na area da alimentação, 5 na vigilancia e somente 2 veterinarios.<br>
	    Com isso estamos recrutando pessoas para nos ajudar a cuidar desse animais</p>
	    <span class ="ml-4 text-muted">Essa é uma página com intuito escolar, caso esteja vendo ela de alguma forma e achou uma boa causa proucure ONG's reais :)</span>
	</div>


<form id="formVoluntario">

	<div class="form-row ml-4">
	    <div class="form-group col-md-4">
	    	<label for="nome">Nome: </label>
	        <input type="text" class="form-control" id="nome" placeholder="Nome">
	    </div>

	    <div class="form-group col-md-4">
	       	<label for="email" class="ml-5">Email:</label>
	        <input type="text" class="form-control ml-5" id="email" placeholder="Email">
	    </div>

	</div>

	<div class="ml-4">
	    <label for="Genero" class="ml-2">Seu Genêro</label>
	    <div class="form-check ml-4 mt-2">
	    	<input class="form-check-input" type="radio" name="Genero" id="Genero1">
	    	<label class="form-check-label" for="Genero1"> Masculino </label>
	  	</div>

	  	<div class="form-check ml-4">
	    	<input class="form-check-input" type="radio" name="Genero" id="Genero2" >
	    	<label class="form-check-label" for="Genero2">Feminino</label>
		</div>

	    <div class="form-check ml-4">
	    	<input class="form-check-input" type="radio" name="Genero" id="Genero3" >
	    	<label class="form-check-label" for="Genero3">Outro</label>
		</div>
		<br>

	    <div class="form-row ml-2">
	    	<div class="form-group col-md-2">
	    		<label>Biografia:</label> <br>
	       		<textarea placeholder="Biografia"></textarea>
	    	</div>
	    </div>

		<div class="form group">
				<a href="?=voluntariar" name="enviar" value="1" type="submit" class="ml-2 btn btn-primary"  data-toggle="modal" data-target="#voluntariar">Enviar</a>
		</div>
	</div>
	</form>


	  <button onclick="insereTexto()" class="btn btn-primary ml-4 mt-4 mb-5" id="btnVol">Voluntariar-se</button>

</div>

	<div id="voluntariar" class="modal" tabindex="-1" role="dialog">

		<div class="modal-dialog " role="document">
	    	
	    	<div class="modal-content">
	        	<div class="modal-header">
	          		<h5 class="modal-title">REGISTRADO</h5>
	          		<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	            		<span aria-hidden="true">&times;</span>
	          		</button>
	        	</div>
	        </div>

	        <div class="modal-body">
	          <p>Registrado Com Sucesso</p>
	        </div>

	        <div class="modal-footer">
	          <a href="?i=voluntariar" class="btn btn-primary">Ok</a>
	        </div>

		</div>
	</div>
</div>