<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Funcionario, Pessoa, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function storeAdm(Request $request)
    {
        User::create($request->all());
        return redirect('/');

    }

    public function storeFuncionario(Request $request)
    {   
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        Pessoa::create([
            'user_id'=> Auth::user()->id,
            'telefone' => $request->input('telefone'),
            'nacionalidade' => $request->input('nacionalidade'),
            'data_nascimento' => $request->input('data_nascimento'),
        ]);
        Funcionario::create([
            'pessoa_id'=> auth()->id(),
            'ra' => $request->input('ra'),
            'rg' => $request->input('rg'),
            'pis_pasep' => $request->input('pis_pasep'),
        ]);
        dd();
        //return redirect('/');
    }
}
