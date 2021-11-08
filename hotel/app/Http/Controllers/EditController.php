<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Pais, Estado,Cidade, Consumo, Endereco, Funcionario, Hospede, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function editEndereco ($id)
    {
        $endereco=Endereco::findOrFail($id);
        return view('endereco_edit',['endereco'=>$endereco]);
    }

    // INICIO PESSOA
    
    public function editFuncionario ($id)
    {
         $funcionario=DB::table('funcionarios')
             ->select('enderecos.*','pessoas.*','users.*','funcionarios.*')
             ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
             ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
             ->join('users','users.id', '=', 'pessoas.user_id')
             ->where('funcionarios.id','=', $id)
             ->get();
        
        return view('admin.funcionarioCrud.edit',['funcionario'=>$funcionario[0]]);
    }

    public function editHospede ($id)
    {
        $hospede=DB::table('hospedes')
            ->select('enderecos.*','pessoas.*','users.*','hospedes.*')
            ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
            ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
            ->join('users','users.id', '=', 'pessoas.user_id')
            ->where('hospedes.id','=', $id)
            ->get();     
        return view('admin.hospedeCrud.edit',['hospede'=>$hospede[0]]);
    }

    // FIM PESSOA

    public function editProduto ($id)
    {
        $produto=Produto::findOrFail($id);
        return view('admin.ProdutoCrud.edit',['produto'=>$produto]);
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
