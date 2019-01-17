@extends('admin.layouts.admin')

@section('title', __('Eliminar especies'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>

            </thead>
            <tbody>

              <div>

              <form action="{{ route('admin.especies_agregar') }}" method="get">
                <label>Dominio</label></br>
                <input /></br>
                <label>Reino</label></br>
                <input /></br>
                <label>Phylum</label></br>
                <input /></br>
                <label>Clase</label></br>
                <input /></br>
                <label>Orden</label></br>
                <input /></br>
                <label>Familia</label></br>
                <input /></br>
                <label>Genero</label></br>
                <input /></br>
                <label>Especie</label></br>
                <input /></br>
                <label>Imagen</label></br>
                <input /></br>

                 <input type="submit" value="Eliminar especie">

              </form>
              <div>
            </tbody>
        </table>

        <div>

        </div>
    </div>
@endsection
