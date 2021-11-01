<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Estado, Funcionario, Hospede, Pais, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewPais()
    {
        $pais=Pais::all();
        return view('estado_view',['pais'=>$pais]);
    }

    public function viewEstado()
    {
        $estado=Estado::all();
        return view('estado_view',['estado'=>$estado]);
    }

    public function viewCidade()
    {
        $cidade=Cidade::all();
        return view('cidade_view',['cidade'=>$cidade]);
    }

    public function viewBairro()
    {
        $bairro=Bairro::all();
        return view('bairro_view',['bairro'=>$bairro]);
    }

    public function viewEndereco()
    {
        $endereco=Endereco::all();
        return view('endereco_view',['endereco'=>$endereco]);
    }

    // INICIO PESSOA

    public function viewPessoa()
    {
        $pessoa=Pessoa::all();
        return view('pessoa_view',['pessoa'=>$pessoa]);
    }

    public function viewFuncionario()
    {
        $funcionario=Funcionario::all();
        return view('funcionario_view',['funcionario'=>$funcionario]);
    }

    public function viewHospede()
    {
        $hospede=Hospede::all();
        return view('hospede_view',['hospede'=>$hospede]);
    }

    // FIM PESSOA

    public function viewProduto()
    {
        $produto=Produto::all();
        return view('produto_view',['produto'=>$produto]);
    }

    public function viewConsumo()
    {
        $consumo=Consumo::all();
        return view('consumo_view',['consumo'=>$consumo]);
    }

    public function viewTipoQuarto()
    {
        $tipoQuarto=TipoQuarto::all();
        return view('tipoQuarto_view',['tipoQuarto'=>$tipoQuarto]);
    }

    public function viewQuarto()
    {
        $quarto=Quarto::all();
        return view('quarto_view',['quarto'=>$quarto]);
    }

    public function viewReserva()
    {
        $reserva=Reserva::all();
        return view('reserva_view',['reserva'=>$reserva]);
    }

    //Separado

    public function viewAdmin()
    {
        $users=User::all();
        return view('admin.admin',['users'=>$users]);
    }
}
