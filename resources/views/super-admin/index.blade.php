@extends('layouts.app')
@section('content')
@include('partials.header')
<div class="container">
    <div class="row">
      <!--Listado de menú -->
         <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Admin</a></li>
          <li><a data-toggle="tab" href="#menu1">Mis fotos</a></li>
          <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
        </ul>     
    </div>
</div>
@endsection
