@extends('admin.layouts.admin')

@section('title', __('Agregar especies'))

@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>

            </thead>
            <tbody>

              <div>

              <form action="{{ route('admin.guardar_especies') }}" method="post">
                <label for="text">Dominio</label></br>
                <input type="text" name="in_dominio" required/></br>
                <label for="text">Reino</label></br>
                <input type="text" name="in_reino" required/></br>
                <label for="text">Phylum</label></br>
                <input type="text" name="in_phylum" required/></br>
                <label for="text">Clase</label></br>
                <input type="text" name="in_clase" required/></br>
                <label for="text">Orden</label></br>
                <input type="text" name="in_orden" required/></br>
                <label for="text">Familia</label></br>
                <input type="text" name="in_familia" required/></br>
                <label for="text">Genero</label></br>
                <input type="text" name="in_genero" required/></br>
                <label for="text">Especie</label></br>
                <input type="text" name="in_especie" required/></br>
                <label for="text">Imagen</label></br>
                <input type="text" name="in_imagen" required/></br>

                 <button type="submit">Agregar especie</button>
                <input type="hidden" value="{{Session::token()}}" name="_token"/>
              </form>
              <div>
            </tbody>
        </table>

        <div>

        </div>
    </div>
@endsection
