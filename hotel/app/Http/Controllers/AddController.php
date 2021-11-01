<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function createPais()
    {
        return view('pais_add');
    }

    public function createEstado()
    {
        return view('estado_add');
    }

    public function createCidade()
    {
        return view('cidade_add');
    }
    
    public function createBairro()
    {
        return view('bairro_add');
    }

    public function createEndereco()
    {
        return view('endereco_add');
    }

    // INICIO PESSOA

    public function createPessoa()
    {
        return view('pessoa_add');
    }

    public function createFuncionario()
    {
        return view('funcionario_add');
    }

    public function createHospede()
    {
        return view('hospede_add');
    }

    // FIM PESSOA

    public function createProduto()
    {
        return view('produto_add');
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

    public function createAdm()
    {
        return view('reserva_add');
    }
}
