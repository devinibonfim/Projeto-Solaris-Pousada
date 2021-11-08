<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Consumo, Funcionario, Hospede, ListaConsumo, Produto, Quarto, Reserva, TipoQuarto};

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

    public function destroyConsumo ($id)
    {
        Consumo::destroy($id);
        return redirect()->route('consumo');
    }

    public function destroyTipoQuarto ($id)
    {
        TipoQuarto::destroy($id);
        return redirect()->route('tipoQuarto');
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
}
