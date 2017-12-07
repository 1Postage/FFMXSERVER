@extends('layouts.main')


@section('content')
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
            <td><a href="{{$art->usuario_id}}">{{$usuarios->where('id', $art->usuario_id)->first()['nombre']}}</a></td>
          </tr> 
        @endforeach
        @endif
      </tbody>
    </table>
    
  </div>
  @if(isset($articulos))
    {{ $articulos->links() }} @endif
  
</div>
@endsection
