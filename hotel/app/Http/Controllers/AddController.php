<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function createProduto()
    {
        return view('admin.produtoCrud.add');
    }

    public function createConsumo()
    {
        return view('consumo_add');
    }

    public function createTipoQuarto()
    {
        return view('tipoQuarto_add');
    }

    public function createQuarto()
    {
        return view('quarto_add');
    }

    public function createReserva()
    {
        return view('reserva_add');
    }
}
