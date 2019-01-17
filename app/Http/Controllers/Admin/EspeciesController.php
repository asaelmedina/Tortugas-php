<?php

namespace App\Http\Controllers\Admin;

use App\Models\Auth\User\User;
use Illuminate\Http\Request;
use App\Models\Tortugas\Especie as Especie;

class EspeciesController
{
    public function index(Request $request)
    {
        $especies = Especie::all();
        return view('admin.especies', ['datos_especie' => $especies]);
    }

    public function add(Request $request)
    {

        return view('admin.especies_agregar');
    }

    public function guardar(Request $request)
    {
      $dominio = $request['in_dominio'];
      $reino = $request['in_reino'];
      $phylum = $request['in_phylum'];
      $clase = $request['in_clase'];
      $orden = $request['in_orden'];
      $familia = $request['in_familia'];
      $genero = $request['in_genero'];
      $v_especie = $request['in_especie'];
      $imagen = $request['in_imagen'];

      $Objt_especie = new Especie();
      $Objt_especie->Dominio = $dominio;
      $Objt_especie->Reino =$reino;
      $Objt_especie->Phylum =$phylum;
      $Objt_especie->Clase =$clase;
      $Objt_especie->Orden =$orden;
      $Objt_especie->Familia =$familia;
      $Objt_especie->Genero =$genero;
      $Objt_especie->Especie =$v_especie;
      $Objt_especie->Imagen =$imagen;

      $Objt_especie->save();

      return redirect('admin/especies');

    }

    /*public function edit(Request $request)
    {
        $edit2_especie = Especie::where("id","=",$request->id);
        return view('admin.especies_editar', ['datos_especie' => $edit2_especie]);
        return view('admin.especies_editar');
    }*/

    public function editar($id)
    {
        $edit_especie = Especie::where("id", $id )->first();
        return view('admin.especies_editar', ['datos_especie' => $edit_especie]);

        //$edit_especie = Especie::find($id);
        //return view ('admin.especies_editar', compact('datos_especie','id'));
      /*  return view('admin.especies_editar');*/
    }

    public function update(Request $request, $id)
    {

          $dominio = $request['edit_dominio'];
          $reino = $request['edit_reino'];
          $phylum = $request['edit_phylum'];
          $clase = $request['edit_clase'];
          $orden = $request['edit_orden'];
          $familia = $request['edit_familia'];
          $genero = $request['edit_genero'];
          $v_especie = $request['edit_especie'];
          $imagen = $request['edit_imagen'];

          $edit2_especie = Especie::where("id", $id )->first();

          $edit2_especie->Dominio = $dominio;
          $edit2_especie->Reino =$reino;
          $edit2_especie->Phylum =$phylum;
          $edit2_especie->Clase =$clase;
          $edit2_especie->Orden =$orden;
          $edit2_especie->Familia =$familia;
          $edit2_especie->Genero =$genero;
          $edit2_especie->Especie =$v_especie;
          $edit2_especie->Imagen =$imagen;

          $edit2_especie->save();

        return redirect('admin/especies');
    }

    public function delete(Request $request)
    {

        return view('admin.especies_eliminar');
    }

    public function eliminar($id)
    {
      $especie = Especie::where("id", $id )->first();
      $especie->delete();


      return redirect('admin/especies');

    }

    public function repeat(User $user, Request $request)
    {
        $protectionValidation = protection_validate($user);

        if ($request->expectsJson()) return response($protectionValidation->toArray());

        return redirect()->back();
    }
}
