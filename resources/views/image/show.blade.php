@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                      </ul>
                </div>
                @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                    {{ $error }}<br/>
                            @endforeach
                        </div>
                    @endif

                <div class="panel-body">
                    <div class="col-md-8" id="formImage">
                        
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
