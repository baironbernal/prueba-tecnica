<form enctype="multipart/form-data" action="{{ route('saveimage') }}" method="GET" class="form-horizontal">
<div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" class="form-control" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="img" type="file" accept="img/*" class="form-control" />
    <button type="submit" class="btn btn-default">Enviar</button>
</form>