@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <span class="label label-danger" id="update_photo">Sube tus fotos</span>
                     <span class="label label-default" id="show_photo">Tus fotos</span>
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
