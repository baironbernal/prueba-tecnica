
 <form method="POST" enctype="multipart/form-data" action="{{route('saveimage')}}">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
     {{ csrf_field() }}
    <input type="hidden" name="id_user" value='{{ Auth::user()->identificacion }}'>
    	
     <div class="form-group">
    	<label class="control-label col-sm-2" for="email">Fichero:</label>
    		<div class="col-md-10">
      			<input type="hidden" name="MAX_FILE_SIZE" value="30001" class="form-control" />
				    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
				     <input name="img" type="file" accept="img/*" class="form-control" id="img" />
    		</div>
  	</div>
   <div class="form-group">
    	<label class="control-label col-sm-2" for="email">Descripcion: </label>
    		<div class="col-md-10">
      			<textarea class="form-control" rows="6" id="describe" placeholder="Escribe una descripcion" name="describe"></textarea>
    		</div>
  	</div>
    <button type="submit" class="btn btn-default">Enviar</button>
</form>


<audio id="player" src="{{asset('musica.mp3')}}" type="audio/mpeg"> </audio>
 
<a id="botonmusic" title="button">Reproducir Sonido</a>​