
@extends('layouts.app')

@section('title', 'Detalle Crear')

@section('content')

  <form class="form-group" action="/detalle" method="post">
    @csrf
    <div class="container">
      <div class="form-group">
        <form>
            <div class="form-group">
              <label for="">Genero</label>
              <div class="form-group form-check">
                <select name="genero">
                  <option value="m">Seleccione una opción</option>
                   <option value="m">Masculino</option>
                   <option value="f">Femenino</option>
                   <option value="o">otro</option>
                </select>
             </div>
              <label for="">Situacion sentimental </label>
              <input type="text" name="situacion_sentimental" class="form-control" id="situacion"  placeholder="Ingrese su situacion sentimental">

              <label for="">Fecha de nacimiento </label>
                <form>
                <div>
                  <input type="date" id="fecha" name="fecha_nacimiento">
                </div>
              </form>
              <label for="">Email </label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Nunca entregues información en sitios desconocidos.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </form>


@endsection
