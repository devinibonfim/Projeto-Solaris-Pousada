<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Estado, Funcionario, Hospede, Pais, Pessoa, Produto, Quarto, Reserva, TipoQuarto};
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showPais()
    {
        $pais=Pais::all();
        return view('estado_view',['pais'=>$pais]);
    }

    public function showEstado()
    {
        $estado=Estado::all();
        return view('estado_view',['estado'=>$estado]);
    }

    public function showCidade()
    {
        $cidade=Cidade::all();
        return view('cidade_view',['cidade'=>$cidade]);
    }

    public function showBairro()
    {
        $bairro=Bairro::all();
        return view('bairro_view',['bairro'=>$bairro]);
    }

    public function showEndereco()
    {
        $endereco=Endereco::all();
        return view('endereco_view',['endereco'=>$endereco]);
    }

    // INICIO PESSOA

    public function showPessoa()
    {
        $pessoa=Pessoa::all();
        return view('pessoa_view',['pessoa'=>$pessoa]);
    }

    public function showFuncionario()
    {
        $funcionario=Funcionario::all();
        return view('funcionario_view',['funcionario'=>$funcionario]);
    }

    public function showHospede()
    {
        $hospede=Hospede::all();
        return view('hospede_view',['hospede'=>$hospede]);
    }

    // FIM PESSOA

    public function showProduto()
    {
        $produto=Produto::all();
        return view('produto_view',['produto'=>$produto]);
    }

    public function showConsumo()
    {
        $consumo=Consumo::all();
        return view('consumo_view',['consumo'=>$consumo]);
    }

    public function showTipoQuarto()
    {
        $tipoQuarto=TipoQuarto::all();
        return view('tipoQuarto_view',['tipoQuarto'=>$tipoQuarto]);
    }

    public function showQuarto()
    {
        $quarto=Quarto::all();
        return view('quarto_view',['quarto'=>$quarto]);
    }

    public function showReserva()
    {
        $reserva=Reserva::all();
        return view('reserva_view',['reserva'=>$reserva]);
    }
}
