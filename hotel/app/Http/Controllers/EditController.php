<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Pais, Estado,Cidade, Consumo, Endereco, Funcionario, Hospede, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function editPais ($id)
    {
        $pais=Pais::findOrFail($id);
        return view('pais_edit',['pais'=>$pais]);
    }

    public function editEstado ($id)
    {
        $estado=Estado::findOrFail($id);
        return view('estado_edit',['estado'=>$estado]);
    }

    public function editCidade ($id)
    {
        $cidade=Cidade::findOrFail($id);
        return view('cidade_edit',['cidade'=>$cidade]);
    }

    public function editBairro ($id)
    {
        $bairro=Bairro::findOrFail($id);
        return view('bairro_edit',['bairro'=>$bairro]);
    }

    public function editEndereco ($id)
    {
        $endereco=Endereco::findOrFail($id);
        return view('endereco_edit',['endereco'=>$endereco]);
    }

    // INICIO PESSOA
    
    public function editPessoa ($id)
    {
        $pessoa=Pessoa::findOrFail($id);
        return view('pessoa_edit',['pessoa'=>$pessoa]);
    }

    public function editFuncionario ($id)
    {
        $funcionario=DB::table('funcionarios')
            ->select('funcionarios.id AS FuncID','funcionarios.*','pessoas.*','users.*')
            ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
            ->join('users','users.id', '=', 'pessoas.user_id')
            ->where('users.id','=', $id)
            ->get();     
        return view('admin.edit',['funcionario'=>$funcionario[0]]);
    }

    public function editHospede ($id)
    {
        $hospede=Hospede::findOrFail($id);
        return view('hospede_edit',['hospede'=>$hospede]);
    }

    // FIM PESSOA

    public function editProduto ($id)
    {
        $produto=Produto::findOrFail($id);
        return view('produto_edit',['produto'=>$produto]);
    }

    public function editConsumo ($id)
    {
        $consumo=Consumo::findOrFail($id);
        return view('consumo_edit',['consumo'=>$consumo]);
    }

    public function editTipoQuarto ($id)
    {
        $tipoQuarto=TipoQuarto::findOrFail($id);
        return view('tipoQuarto_edit',['tipoQuarto'=>$tipoQuarto]);
    }

    public function editQuarto ($id)
    {
        $quarto=Quarto::findOrFail($id);
        return view('quarto_edit',['quarto'=>$quarto]);
    }

    public function editReseva ($id)
    {
        $reserva=Reserva::findOrFail($id);
        return view('reserva_edit',['reserva'=>$reserva]);
    }

    //

    public function editAdmin ($id)
    {
        $funcionario=DB::table('funcionarios')
                ->select('funcionarios.id AS FuncID','funcionarios.*','pessoas.*','users.*')
                ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
                ->join('users','users.id', '=', 'pessoas.user_id')
                ->where('users.id','=', $id)
                ->get();     
        return view('admin.edit',['funcionario'=>$funcionario[0]]);
    }

    public function editListaConsumo ($id)
    {
        $reserva=Reserva::findOrFail($id);
        return view('listaConsumo_edit',['listaConsumo'=>$reserva]);
    }
}
