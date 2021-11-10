<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Consumo, Funcionario, Hospede, ListaConsumo, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Support\Facades\Auth;

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
        return redirect()->route('reserva');
    }

    //
    public function destroyListaConsumo ($id)
    {
        ListaConsumo::destroy($id);
        return redirect()->route('listaConsumo');
    }

    public function destroyPerfil ($id)
    {
        User::destroy($id);
        Auth::logout();
        return redirect( route('home'));
    }
    
    public function destroyConsumo ($id)
    {
        Consumo::destroy($id);
        return redirect()->route('consumo');
    }
}
 