@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre de Usuario</label>

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
                            <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'] ) !!}
                            </div>
                            
                        </div>

                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                 {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('direccion', 'Dirección', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                               {!! Form::textarea('direccion', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'rows' => '5'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('codigo_postal', 'Código Postal', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('codigo_postal', null, ['class' => 'form-control', 'placeholder' => 'Código Postal'] ) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                           {!! Form::label('pais_id', 'País', ['class' => 'col-md-4 control-label']) !!}
                           <div class="col-md-6">
                               {!! Form::number('pais_id', null, ['class' => 'form-control', 'placeholder' => 'País'] ) !!}
                           </div>
                        </div>

                        <div class="form-group">
                           {!! Form::label('provincia_region_id', 'Provincia/Región', ['class' => 'col-md-4 control-label']) !!}
                           <div class="col-md-6">
                                {!! Form::number('provincia_region_id', null, ['class' => 'form-control', 'placeholder' => 'Provincia/Región'] ) !!}
                           </div>
                        </div>

                        <div class="form-group">
                             {!! Form::label('estado_datos', 'Estado de los Datos', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                <select name="estado_datos" class="form-control">
                                    <option value="0">Sin Actualizar</option>
                                    <option value="1">Actualizados</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('telefono', 'Teléfono', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Teléfono'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('telefono_opcional', 'Teléfono', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                 {!! Form::text('telefono_opcional', null, ['class' => 'form-control', 'placeholder' => 'Teléfono Opcional'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('avatar', 'Imagen / Avatar', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                 {!! Form::file('avatar', ['class' => 'form-control', 'required'] ) !!}
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
