@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <!--Listado de menú -->
         <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
          <li><a data-toggle="tab" href="#menu1">Mis fotos</a></li>
          <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        </ul>
      <!--visuales -->        
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3>HOME</h3>

              @if(Session::has('message'))
                <div class="alert alert-success">
                  <a href="#" class="alert-link">Subido correctamente</a>
                </div>
              @endif

              @if($errors)
                 @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                    <a href="#" class="alert-link">{{$error}}</a>
                    </div>
                @endforeach
              @endif


                            
              <form action="{{route('guardaimagen')}}" method="POST" enctype="multipart/form-data">
                  Select image to upload:
                  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                  <input type="file" name="image" id="image">
                  <input type="text" name="describe" id="describe">
                  <input type="hidden" name="id_user" id="id_user" value="{{Auth::user()->identificacion}}">
                  <input type="submit" value="Upload Image" name="submit">
              </form>
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="container">
                @foreach($viewimages as $img)
                    <div class="col-md-4">
                       <div class="col-md-12">
                        <div class="thumbnail">
                          <img src="{{url('storage/'.$img->img)}}" alt="JAJA" class="img-rounded" >
                          <div class="caption">
                            <p>{{$img->describe}}</p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                @endforeach
              </div>
            </div>
          </div>
           
    </div>
</div>
@endsection
