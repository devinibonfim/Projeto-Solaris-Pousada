<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{User};
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function storeAdm(Request $request)
    {
        User::create($request->all());
        return redirect('/');

    }
}
