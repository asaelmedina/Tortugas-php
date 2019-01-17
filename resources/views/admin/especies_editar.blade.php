@extends('admin.layouts.admin')

@section('title', __('Editar especies'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>

            </thead>
            <tbody>

              <div>




              <form action="" method="get">
                @foreach($datos_especie as $campo_especie)
                <label>Dominio</label></br>
                <input/>{{ $campo_especie->Dominio }}</br>
                <label>Reino</label></br>
                <input/>{{ $campo_especie->Reino }}</br>
                <label>Phylum</label></br>
                <input/>>{{ $campo_especie->Phylum }}</br>
                <label>Clase</label></br>
                <input/>{{ $campo_especie->Clase }}</br>
                <label>Orden</label></br>
                <input/>{{ $campo_especie->Orden }}</br>
                <label>Familia</label></br>
                <input/>{{ $campo_especie->Familia }}</br>
                <label>Genero</label></br>
                <input/>{{ $campo_especie->Genero }}</br>
                <label>Especie</label></br>
                <input/>{{ $campo_especie->Especie }}</br>
                <label>Imagen</label></br>
                <input/>{{ $campo_especie->Imagen }}</br>

      @endforeach
              <input type="submit" value="Editar especie">
              </form>
              <div>
            </tbody>
        </table>

        <div>

        </div>
    </div>
@endsection
