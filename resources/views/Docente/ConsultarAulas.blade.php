@extends('layoutD')

@section('contenido')
<div class="container">
<h1 class="center">Aulas</h1>
<table class="bordered striped">
    <thead>
      <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Numero</th> 
          <th>Cuentadante asignado</th>
          
      </tr>
    </thead>

    <tbody>
        
        @foreach ($aula as $item)
        <tr>
        <td>{{$item->Id_Aula}}</td>
        <td><a href="{{route('AulasElementos',$item->Id_Aula)}}">{{$item->Nombre}}</a></td>
        <td>{{$item->Numero}}</td>
        <td>{{$item->identificacion}}</td>
        </tr> 
        @endforeach

    </tbody>
</table>
</div>

@endsection