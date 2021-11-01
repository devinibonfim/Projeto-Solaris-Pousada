<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Pais, Estado, Funcionario, Hospede, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroyPais ($id)
    {
        Pais::destroy($id);
        return redirect()->route('pais');
    }

    public function destroyEstado ($id)
    {
        Estado::destroy($id);
        return redirect()->route('estado');
    }

    public function destroyCidade ($id)
    {
        Cidade::destroy($id);
        return redirect()->route('cidade');
    }

    public function destroyBairro ($id)
    {
        Bairro::destroy($id);
        return redirect()->route('bairro');
    }

    public function destroyEndereco ($id)
    {
        Endereco::destroy($id);
        return redirect()->route('endereco');
    }

    // INICIO PESSOA

    public function destroyPessoa ($id)
    {
        Pessoa::destroy($id);
        return redirect()->route('pessoa');
    }

    public function destroyFuncionario ($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionario');
    }

    public function destroyHospede ($id)
    {
        Hospede::destroy($id);
        return redirect()->route('hospede');
    }

    // FIM PESSOA
    
    public function destroyProduto ($id)
    {
        Produto::destroy($id);
        return redirect()->route('produto');
    }

    public function destroyConsumo ($id)
    {
        Consumo::destroy($id);
        return redirect()->route('consumo');
    }

    public function destroyTipoQuarto ($id)
    {
        TipoQuarto::destroy($id);
        return redirect()->route('tipoQuarto');
    }

    public function destroyQuarto ($id)
    {
        Quarto::destroy($id);
        return redirect()->route('quarto');
    }

    public function destroyReserva ($id)
    {
        Reserva::destroy($id);
        return redirect()->route('reserva');
    }

    //

    public function destroyAdmin ($id)
    {
        User::destroy($id);
        return redirect()->route('adm');
    }
}
