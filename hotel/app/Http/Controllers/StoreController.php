<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Funcionario, Pessoa, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class StoreController extends Controller
{
    public function storeAdm(Request $request)
    {
        User::create($request->all());
        return redirect('/');

    }

    public function storeFuncionario(Request $request)
    {    
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        $userid  = $user->id;
        $pessoa = new Pessoa;
        $pessoa->user_id = $userid;
        //falta endereço
        $pessoa->telefone = $request->input('telefone');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->nacionalidade = $request->input('nacionalidade');
        $pessoa->save();

        $pessoaid  = $pessoa->id;
        $funcionario = new Funcionario;
        $funcionario->pessoa_id = $pessoaid;
        $funcionario->ra = $request->input('ra');
        $funcionario->rg = $request->input('rg');
        $funcionario->pis_pasep = $request->input('pis_pasep');
        $funcionario->save();

        return redirect(route('FuncView'));
    }
}