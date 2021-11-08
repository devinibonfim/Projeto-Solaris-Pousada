<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hospede;
use App\Models\Reserva;
use App\Models\TipoQuarto;
use Illuminate\Http\Request;

class AddController extends Controller
{
    // INICIO PESSOA
    public function createFuncionario()
    {
        return view('admin.funcionarioCrud.Add');
    }

    public function createHospede()
    {
        return view('admin.hospedeCrud.add');
    }

    // FIM PESSOA

    public function createReserva()
    {
        $tipoQuarto=TipoQuarto::all();
        //dd($hospede);
        return view('admin.reservaCrud.add',['tipoQuarto'=> $tipoQuarto]);
    }

    public function createProduto()
    {
        return view('admin.produtoCrud.add');
    }

    public function createConsumo()
    {
        return view('consumo_add');
    }

    public function createTiposQuarto()
    {
        return view('admin.tiposQuartoCrud.add');
    }

    public function createQuarto()
    {
        return view('quarto_add');
    }

}
