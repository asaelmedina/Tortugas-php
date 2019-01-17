@extends('admin.layouts.admin')

@section('title', __('Especies'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
              <th>ID</th>
                <th>Dominio</th>
                <th>Reino</th>
                <th>Phylum</th>
                <th>Clase</th>
                <th>Orden</th>
                <th>Familia</th>
                <th>Genero</th>
                <th>Especie</th>
                <th>Imagen</th>

            </tr>
            </thead>
            <tbody>
              @foreach($datos_especie as $campo_especie)
                  <tr>
                      <td>{{ $campo_especie->id }}</td>
                      <td>{{ $campo_especie->Dominio }}</td>
                      <td>{{ $campo_especie->Reino }}</td>
                      <td>{{ $campo_especie->Phylum }}</td>
                      <td>{{ $campo_especie->Clase }}</td>
                      <td>{{ $campo_especie->Orden }}</td>
                      <td>{{ $campo_especie->Familia }}</td>
                      <td>{{ $campo_especie->Genero }}</td>
                      <td>{{ $campo_especie->Especie }}</td>
                      <td>{{ $campo_especie->Imagen }}</td>
                      <td><a href="{{ route('admin.especies_editar',['id' => $campo_especie->id]) }}">Editar</a></td>
                      <td><a href="{{ route('admin.eliminar',['id' => $campo_especie->id]) }}">Eliminar</a></td>
                  </tr>
              @endforeach

            </tbody>
        </table>

        <div>
          <form action="{{ route('admin.especies_agregar') }}" method="get">

             <input type="submit" value="Agregar nueva especie">

          </form>

        </div>
    </div>
@endsection
