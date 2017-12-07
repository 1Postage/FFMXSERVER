@extends('layouts.main')


@section('content')
<div class="container">
  <div class="container">
    <h2>Pedidos</h2><br>    
  </div>
  <div id="msg"></div>
  
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
              
          <th>Usuario</th>
             
          <th>Lugar</th>
              
          <th>Fecha</th>

          <th>Status</th>

          <th>Action</th>
             
        </tr>

      </thead>
      <tbody>
        @if(isset($pedidos) && isset($usuarios))
        @foreach ($pedidos as $p)
          <tr>
            <td scope="row" class="no-actived"><a href="pedido/{{$p->id}}">{{$p->id}}</a></td>
            <td>
              <a href="usuario/{{$usuarios->where('id', $p->usuario_id)->first()['id']}}">
              {{$usuarios->where('id', $p->usuario_id)->first()['nombre'] }}
              </a>
            </td>
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
        @endif
      </tbody>
    </table>
    
  </div>
  {{ $pedidos->links() }}
  
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
        url: "updatePedido",
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