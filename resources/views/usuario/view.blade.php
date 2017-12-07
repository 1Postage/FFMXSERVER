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
		@if(isset($usuario) && isset($pedidos))
		<h2>{{ $usuario->nombre}} </h2>
		<small>(id:{{$usuario->id}})</small>
		<div class="container">
			<h4>Teléfono: {{$usuario->telefono}}</h4>
			<h4>Email: {{$usuario->email}}</h4	>
		</div>

		<div class="container">
		  <div class="container">
		    <h2>Pedidos</h2><br>    
		  </div>
		  <div id="msg"></div>
		  
		  <div class="container">

		    <table class="table ">
		      <thead>
		        <tr>
		          <th>ID</th>
		              
		             
		          <th>Lugar</th>
		              
		          <th>Fecha</th>

		          <th>Status</th>

		          <th>Action</th>
		             
		        </tr>

		      </thead>
		      <tbody>
		        @foreach ($pedidos as $p)
		          <tr>
		            <td scope="row" class="no-actived">{{$p->id}}</td>
		            <td>{{$p->lugar_entrega}}</td>
		            <td> {{$p->fecha}}</td>
		            <td> {{$p->status}} </td>
		            <td>
		              @if($p->status == 1)
		                <button class="btn btn-success" id="{{$p->id}}">Completado</button>
		              @elseif($p->status == 0)
		                <button class="btn btn-primary" id="{{$p->id}}">Completar</button>
		              @endif
		              
		            </td>

		        @endforeach
		        
		      </tbody>
		    </table>
		    
		  </div>
		  {{ $pedidos->links() }}
		  
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