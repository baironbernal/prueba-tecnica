@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <a href="#"><span class="label label-danger" id="update_photo">Sube tus fotos</span>
                </div>

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
