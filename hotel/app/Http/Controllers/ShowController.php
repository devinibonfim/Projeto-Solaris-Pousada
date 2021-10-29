<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Pais , Estado, Funcionario, Hospede, Pessoa, Produto, Quarto, Reserva, TipoQuarto};
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showPais($id)
    {
        $pais=Pais::findOrFail($id);
        return view('pais_show',['pais'=>$pais]);
    }

    public function showEstado($id)
    {
        $estado=Estado::findOrFail($id);
        return view('Estado_show',['estado'=>$estado]);
    }

    public function showCidade ($id)
    {
        $cidade=Cidade::findOrFail($id);
        return view('cidade_show',['cidade'=>$cidade]);
    }

    public function showBairro ($id)
    {
        $bairro=Bairro::findOrFail($id);
        return view('bairro_show',['bairro'=>$bairro]);
    }

    public function showEndereco ($id)
    {
        $endereco=Endereco::findOrFail($id);
        return view('endereco_show',['endereco'=>$endereco]);
    }

    // INICIO PESSOA

    public function showPessoa ($id)
    {
        $pessoa=Pessoa::findOrFail($id);
        return view('pessoa_show',['pessoa'=>$pessoa]);
    }

    public function showFuncionario ($id)
    {
        $funcionario=Funcionario::findOrFail($id);
        return view('funcionario_show',['funcionario'=>$funcionario]);
    }

    public function showHospede ($id)
    {
        $hospede=Hospede::findOrFail($id);
        return view('hospede_show',['hospede'=>$hospede]);
    }

    // FIM PESSOA

    public function showProduto ($id)
    {
        $produto=Produto::findOrFail($id);
        return view('produto_show',['produto'=>$produto]);
    }

    public function showConsumo ($id)
    {
        $consumo=Consumo::findOrFail($id);
        return view('consumo_show',['consumo'=>$consumo]);
    }



    public function showTipoQuarto ($id)
    {
        $tipoQuarto=TipoQuarto::findOrFail($id);
        return view('tipoQuarto_show',['tipoQuarto'=>$tipoQuarto]);
    }

    public function showQuarto ($id)
    {
        $quarto=Quarto::findOrFail($id);
        return view('quarto_show',['quarto'=>$quarto]);
    }

    public function showReserva ($id)
    {
        $reserva=Reserva::findOrFail($id);
        return view('reserva_show',['reserva'=>$reserva]);
    }
}
