<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Pais , Estado, Funcionario, Hospede, ListaConsumo, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $funcionario=DB::table('funcionarios')
        ->select('funcionarios.id AS FuncID','funcionarios.*','pessoas.*','users.*')
        ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
        ->join('users','users.id', '=', 'pessoas.user_id')
        ->where('users.id','=', $id)
        ->get();

        return view('admin.show',['funcionario'=>$funcionario[0]]);
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

    //

    public function showAdmin ($id)
    {
        $adm =User::findOrFail($id);
        return view('reserva_show',['reserva'=>$adm]);
    }

    public function listaConsumo ($id)
    {
        $listaConsumo = ListaConsumo::findOrFail($id);
        return view('listaConsumo_show',['listaConsumo'=>$listaConsumo]);
    }
}
