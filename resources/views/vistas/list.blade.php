@extends('layouts.app')

@section('title', 'Detalle listar')

@section('content')
  <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Genero</th>
          <th scope="col">Sit. sentimental</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>
        @foreach($details as $detail)
        <tr>
          <th scope="row">({$detail->id})</th>
          <td>({$detail->id})</td>
          <td>({$detail->genero})</td>
          <td>({$detail->situacion_sentimental})</td>
          <td>({$detail->fecha_nacimiento})</td>
          <td>({$detail->email})</td>
          <td>({$detail->password})</td>
        </tr>
        @endforeach

      </tbody>

@endsection
