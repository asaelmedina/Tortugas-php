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

              <form action="{{ route('admin.update_especies',['id' => $datos_especie->id]) }}" method="post">
                <label>Dominio</label></br>
                <input type="text" name="edit_dominio" value="{{ $datos_especie->Dominio }}" required/></br>
                <label>Reino</label></br>
                <input type="text" name="edit_reino" value="{{ $datos_especie->Reino }}" required/></br>
                <label>Phylum</label></br>
                <input type="text" name="edit_phylum" value="{{ $datos_especie->Phylum }}" required/></br>
                <label>Clase</label></br>
                <input type="text" name="edit_clase" value="{{ $datos_especie->Clase }}" required/></br>
                <label>Orden</label></br>
                <input type="text" name="edit_orden" value="{{ $datos_especie->Orden }}" required/></br>
                <label>Familia</label></br>
                <input type="text" name="edit_familia" value="{{ $datos_especie->Familia }}" required/></br>
                <label>Genero</label></br>
                <input type="text" name="edit_genero" value="{{ $datos_especie->Genero }}" required/></br>
                <label>Especie</label></br>
                <input type="text" name="edit_especie" value="{{ $datos_especie->Especie }}" required/></br>
                <label>Imagen</label></br>
                <input type="text" name="edit_imagen" value="{{ $datos_especie->Imagen }}" required/></br>

              <input type="submit" value="Editar especie">
              <input type="hidden" value="{{Session::token()}}" name="_token"/>
              </form>
              <div>
            </tbody>
        </table>

        <div>

        </div>
    </div>
@endsection
