<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Funcionario, User};
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function storeAdm(Request $request)
    {
        User::create($request->all());
        return redirect('/');

    }

    public function storeFun(Request $request)
    {     //aramazena usuario
        $user = Funcionario::find('User_id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        User::create($request->all());


        Funcionario::create($request->all());
        return redirect('/');

    }
}
