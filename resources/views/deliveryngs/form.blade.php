<div class="form-group">
  <label for="name" class="col-sm-2 control-label">Cliente</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Cliente" value="{{ @$deliveryng->client }}">
  </div>
</div>
<div class="form-group">
  <label for="date" class="col-sm-2 control-label">Data de Entrega</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd" value="{{ @$deliveryng->deliverydate }}">
  </div>
</div>
<div class="form-group">
  <label for="address" class="col-sm-2 control-label">Origem</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="address1" name="address1" placeholder="Origem" value="{{ @$deliveryng->source }}">
  </div>
</div>
<div class="form-group">
  <label for="address" class="col-sm-2 control-label">Destino</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="address2" name="address2" placeholder="address" value="{{ @$deliveryng->destiny }}">
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-default">Salvar</button>
  </div>
</div>