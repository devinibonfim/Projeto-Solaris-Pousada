<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Pais , Estado, Funcionario, Hospede, ListaConsumo, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function showFuncionario ($id)
    {   
        $funcionario=DB::table('funcionarios')
                    ->select('funcionarios.*','pessoas.*','users.*','enderecos.*')
                    ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
                    ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
                    ->join('users','users.id', '=', 'pessoas.user_id')
                    ->where('funcionarios.id','=', $id)
                    ->get();

        return view('admin.funcionarioCrud.show',['funcionario'=>$funcionario[0]]);
    }

    public function showHospede ($id)
    {
        $hospede=DB::table('hospedes')
            ->select('hospedes.*','pessoas.*','users.*','enderecos.*')
            ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
            ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
            ->join('users','users.id', '=', 'pessoas.user_id')
            ->where('hospedes.id','=', $id)
            ->get();
        return view('admin.hospedeCrud.show',['hospede'=>$hospede[0]]);
    }

    // FIM PESSOA

    public function showProduto ($id)
    {
        $produto=Produto::findOrFail($id);
        return view('admin.produtoCrud.show',['produto'=>$produto]);
    }

    public function showTipoQuarto ($id)
    {
        $tipoQuarto=TipoQuarto::findOrFail($id);
        return view('tipoQuarto_show',['tipoQuarto'=>$tipoQuarto]);
    }

    public function showReserva ($id)
    {
        $reserva=Reserva::findOrFail($id);
        return view('reserva_show',['reserva'=>$reserva]);
    }

    //

    public function listaConsumo ($id)
    {
        $listaConsumo = ListaConsumo::findOrFail($id);
        return view('listaConsumo_show',['listaConsumo'=>$listaConsumo]);
    }
}
