<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Consumo, Funcionario, Hospede, ListaConsumo, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    // INICIO PESSOA

    public function destroyFuncionario ($id)
    {
        Funcionario::destroy($id);
        return redirect(route('FuncView'));
    }

    public function destroyHospede ($id)
    {
        Hospede::destroy($id);
        return redirect(route('HospView'));
    }

    // FIM PESSOA
    
    public function destroyProduto ($id)
    {
        Produto::destroy($id);
        return redirect(route('ProdView'));
    }

    public function destroyTiposQuarto ($id)
    {
        TipoQuarto::destroy($id);
        return redirect()->route('TQuartoView');
    }

    public function destroyReserva ($id)
    {
        Reserva::destroy($id);
        return redirect(route('ReserView'));
    }

    //
    public function destroyListaConsumo (Request $request,$id,$LID)
    {
        $Quary = DB::table('produtos')
                    ->select('produtos.*','lista_consumos.*')
                    ->join('lista_consumos','produtos.id','=','lista_consumos.produto_id')
                    ->where('lista_consumos.consumo_id','=',$id)
                    ->where('lista_consumos.id','=',$LID)
                    ->get();
        $val= $Quary[0]->valor;
        $reserva= Reserva::findOrFail($id);
        $reserva->valor -= $val;
        $reserva->save();
        ListaConsumo::destroy($LID);
        return redirect(route('ReserView'));
    }



    public function destroyPerfil ()
    {
        $id=Auth::User()->id;
        User::destroy($id);
        return redirect( route('home'));
    }
}