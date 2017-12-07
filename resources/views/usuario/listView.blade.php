@extends('layouts.main')


@section('content')
<div class="container">
  <div class="">
    <h2>Usuarios</h2><br>    
  </div>
  <div id="msg"></div>
  
  <div class="container">

    <table class="table ">
      <thead>
        <tr>
          <th>ID</th>
          
          <th>Nombre</th>
          
          <th>Telefono</th>
          
          <th>Correo</th>
          
        </tr>

      </thead>
      <tbody>
        @if(isset($usuarios))
        @foreach ($usuarios as $user)
        
        <tr>
           
            <td scope="row" class="no-actived">{{$user->id}}</td>
            <td><a href="usuario/{{$user->id}}"> {{$user->nombre}}</a></td>
            <td> {{$user->telefono}}</td>
            <td> {{$user->email}} </td>
          
        </tr>
        
        @endforeach
        @endif
      </tbody>
    </table>
  </div>
</div>

</div>
@endsection
