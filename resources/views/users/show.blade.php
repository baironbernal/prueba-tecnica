@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-xs">
			<div class="card" style="width: 20rem;">
			  <img class="card-img-top" src="..." alt="Card image cap">
			  <div class="card-block">
			    <h4 class="card-title">
			    	@if(!empty($user->images))
			    		<li>{{$user->img->images}}</li>
			    	@endif
			    </h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			  <div class="card-block">
			    <a href="#" class="card-link">Card link</a>
			    <a href="#" class="card-link">Another link</a>
			  </div>
			</div>
			
		</div>
	</div>
</div>

@endsection