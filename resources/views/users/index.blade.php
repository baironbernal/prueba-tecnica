@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-6">
			<h1>Users</h1>
			<ul class="list-group">
				@foreach($users as $user)
			  <li class="list-group-item justify-content-between">
			    {{$user->name}}
			    <a href="{{url('users/'. $user->id . '/show')}}"><span class="badge badge-default badge-pill">Ver detalle</span></a>
			  </li>
			   @endforeach
			</ul>
		</div>
	</div>
</div>

@endsection