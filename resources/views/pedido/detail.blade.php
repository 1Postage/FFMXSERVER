@extends('layouts.main')

@section('style')
<style type="text/css">
*{
	font-family: Verdana;
}
h2{
	margin-bottom: -7px;
}
</style>
@endsection

@section('content')


<div class="container" id="msg"></div>		

<div class="container">
	@if(isset($pedido) && isset($articulos) && isset($usuario))
	<h2>{{ $pedido->id}} </h2>
	<small>(Usuario:{{$usuario->nombre}})</small>
	<div class="container">
		<h4>Lugar: {{$pedido->lugar_entrega}}</h4>
		<h4>Fecha: {{$pedido->fecha}}</h4	>
	</div>

	<div class="container">
		<div class="container">
			<h2>Articulos</h2><br>    
		</div>
		<div id="msg"></div>

		<div class="container">

			<table class="table">
				<thead>
					<tr>
						<th>ID</th>

						<th>Nombre</th>

						<th>Descripcion</th>

						<th>Precio unitario</th>

						<th>Cantidad</th>

						<th>Total</th>

						<th>Pedido ID</th>

						<th>Usuario ID</th>

					</tr>

				</thead>
				<tbody>
					@if(isset($articulos))
					@foreach ($articulos as $art)
					<tr>
						<td scope="row" class="no-actived">{{$art->id}}</td>
						<td>{{$art->nombre}}</td>
						<td>{{$art->descripcion}}</td>
						<td>{{$art->precioU}}</td>
						<td>{{$art->cantidad}}</td>
						<td>{{$art->precio}}</td>
						<td>{{$art->pedidos()->get()['0']['id']}}</td>
						<td><a href="{{$art->usuario_id}}">{{$usuario->nombre}}</a></td>
					</tr> 
					@endforeach
					@endif
				</tbody>
			</table>

		</div>
		@if(isset($articulos))
		{{ $articulos->links() }} @endif

	</div>

	@endif
</div>


@endsection

@section('scripts')
<script type="text/javascript">

	$( "button" ).click(function() {

		var id = $(this).attr("id");

		var data = {
			"id" : id,
		}
		var succes= false;

		$.ajax({
			type: "POST",
			url: "../updatePedido",
			data: data ,
			success: function(data) {
				var msg = "<div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Exito!</strong> Se ha actualizado el pedido con el id: " +
				data['id']+".</div>";
				$("#msg").append(msg);
				console.log(data); 
				success = true;
			}
		});

		$(this).attr("class", "btn btn-success");
		$(this).html("Completado");


	});

</script>
@endsection