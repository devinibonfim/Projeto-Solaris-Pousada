<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\api\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Produto::all();
    }
    public function store(Request $request)
    {
        Produto::create($request->all());
    }
    public function show($id)
    {
        return Produto::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $produto=Produto::findOrFail($id);
        echo '<pre>';
        print_r($produto);
        echo '<pre/>';
        $produto->update($request->all());
    }

    public function destroy($id)
    {
        $produto=Produto::findOrFail($id);
        $produto->delete();
    }
}
