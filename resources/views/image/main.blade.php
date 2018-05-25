@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           @foreach($imgs as $img)
                    <div class="col-md-4">
                       <div class="col-md-12">
                        <div class="thumbnail">
                          <img src="{{url('storage/'.$img->img)}}" alt="{{$img->describe}}" class="img-rounded" >
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
@endsection
