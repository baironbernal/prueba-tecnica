@extends('layouts.app')

@section('content')
<br>
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Subir imagen
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
    Ver imagenes
  </a>
</p>
@if(Session::has('message'))
  <div class="alert alert-success" role="alert">
  <strong>{{Session::get('message')}}</strong> You successfully read this important alert message.
</div>
@endif
<div class="collapse" id="collapseExample">
  <div class="card card-block">
    <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
      <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="exampleTextarea">Descripcion de la imagen</label>
          <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Subir imagen</label>
          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="image">
          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Enviar imagen</button>
</form>
  </div>
</div>
<div class="collapse" id="collapseExample2">
  <div class="card card-block">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
@endsection
