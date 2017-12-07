@extends('layouts.main')


@section('content')
	
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear pedido</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('store_pedido') }}">
                        {{ csrf_field() }}

                        
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Usuario</label>

	                            <div class="col-md-6">
	                                <input id="no_control" type="text" class="form-control" name="id_usuario" required autofocus>
	                            </div>
                        </div>


                        <div class="form-group">
                            <label for="pass" class="col-md-4 control-label">Lugar entrega</label>

                            <div class="col-md-6">
                                <input id="no_control" type="text" class="form-control" name="lugar" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre" class="col-md-4 control-label">Fecha</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="fecha" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">email</label>

	                            <div class="col-md-6">
	                                <input id="no_control" type="text" class="form-control" name="email" required autofocus>
	                            </div>
                        </div>


                        <div class="form-group">
                            <label for="pass" class="col-md-4 control-label">password</label>

                            <div class="col-md-6">
                                <input id="no_control" type="password" class="form-control" name="password" required >
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

@endsection