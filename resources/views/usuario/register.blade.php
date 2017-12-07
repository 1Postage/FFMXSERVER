@extends('layouts.main')


@section('content')
<div class="" >
    <div class="">
        <div class="row vertical-align">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Alumno</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('store_usuario') }}">
                            {{ csrf_field() }}

                            
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="no_control" type="text" class="form-control" name="email" required autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="pass" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="no_control" type="password" class="form-control" name="pass" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre" required >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control" name="telefono" required >
                                </div>
                            </div>





                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection