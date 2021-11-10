<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Consumo, Funcionario, Hospede, ListaConsumo, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return redirect()->route('produto');
    }

    public function destroyTiposQuarto ($id)
    {
        TipoQuarto::destroy($id);
        return redirect()->route('TQuartoView');
    }

    public function destroyQuarto ($id)
    {
        Quarto::destroy($id);
        return redirect()->route('quarto');
    }

    public function destroyReserva ($id)
    {
        Reserva::destroy($id);
        return redirect(route('ReserView'));
    }

    //
    public function destroyListaConsumo ($id)
    {
        ListaConsumo::destroy($id);
        return redirect(route('ReserView'));
    }



    public function destroyPerfil ()
    {
        $id=Auth::User()->id;
        User::destroy($id);
        return redirect( route('home'));
    }
}