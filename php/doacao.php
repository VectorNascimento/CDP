<div class="cont container mg-header">
  <div class="row">
    <p class="ml-4 ">Nossa ONG hoje abriga cerca de 50 animais selvagens, isso gera um custo elevado em relação a alimentação, remedios e outros cuidados que temos que tomar para que nossos animais possam voltar a natureza. Para isso, nós aceitamos doações com qualquer valor.</p>
    <span class ="ml-4 text-muted">Essa é uma página com intuito escolar, caso esteja vendo ela de alguma forma e achou uma boa causa, doe para ONG's reais :)</span>
  </div>

  <form id="formDoacao">

     <div class="form-row ml-4">
      <div class="form-group col-md-2">
        <label for="nomeCartão">Valor:</label>
        <input type="text" class="form-control" id="nomeCartão" placeholder="50.00">
      </div>
    </div>

    <h3 for="TipoPagamento" class="ml-2">Forma De Pagamento</h3>
     <div class="form-check ml-4">
    <input class="form-check-input" type="radio" name="TipoPagamento" id="TipoPagamento1">
    <label class="form-check-label" for="TipoPagamento1">
     Cartão de Crédito
    </label>
  </div>
  <div class="form-check ml-4">
    <input class="form-check-input" type="radio" name="TipoPagamento" id="TipoPagamento2" >
    <label class="form-check-label" for="TipoPagamento2">
      Cartão de Débito
    </label>
  </div>

    <div class="form-row ml-4">
      <div class="form-group col-md-4">
        <label for="nomeCartão">Nome: </label>
        <input type="text" class="form-control" id="nomeCartão" placeholder="Fulano de Tal">
      </div>
      <div class="form-group col-md-4">
        <label for="numeroCartão" class="ml-5">Número:</label>
        <input type="text" class="form-control ml-5" id="numeroCartão" placeholder="XXXX XXXX XXXX XXXX">
      </div>

    </div>

    <div class="form-row ml-4">
      <div class="form-group col-md-2">
        <label for="dataCartão">Validade: </label>
        <input type="text" class="form-control" id="dataCartão" placeholder="01/20">
      </div>

      <div class="form-group col-md-2 ml-5">
        <label for="cvvCartão">CVV: </label>
        <input type="text" class="form-control" id="cvvCartão" placeholder="XXX"> <br>
      </div>
    </div>
      
   <a href="?i=doar"class="ml-4 btn btn-primary" data-toggle="modal" data-target="#doar">Doar</a>
  </form>

  <button onclick="insereTexto()" class="btn btn-primary ml-4 mt-4 mb-5" id="btn">Quero Doar</button>

  <div id="doar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">OBRIGADO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Doado Com Sucesso</p>
        </div>
        <div class="modal-footer">
          <a href="?i=home" class="btn btn-primary">Ok</a>
        </div>
      </div>
    </div>
  </div>
</div>


