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
        return view('admin.especies', ['users' => $especies]);
    }
    public function edit(Request $request)
    {
        $especie = Especie::where("id","=",$request->id);
        return view('admin.especies', ['especie' => $especie]);
    }
    public function repeat(User $user, Request $request)
    {
        $protectionValidation = protection_validate($user);

        if ($request->expectsJson()) return response($protectionValidation->toArray());

        return redirect()->back();
    }
}
