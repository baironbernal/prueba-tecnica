@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de usuarios</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">identification</label>

                            <div class="col-md-6">
                                <input id="identification" type="text" class="form-control" name="identification" value="{{ old('identification') }}" required>

                                @if ($errors->has('identification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group{{ $errors->has('date_origin') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Fecha nacimiento</label>

                            <div class="col-md-6">
                                <input id="date_origin" type="text" class="form-control" name="date_origin" value="{{ old('date_origin') }}" required>

                                @if ($errors->has('date_origin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_origin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('model_car') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Modelo del vehiculo</label>

                            <div class="col-md-6">
                                <input id="model_car" type="number" class="form-control" name="model_car" value="{{ old('model_car') }}" required>

                                @if ($errors->has('model_car'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model_car') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
