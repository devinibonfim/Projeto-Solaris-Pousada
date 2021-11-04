<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Pais, Estado, Funcionario, Hospede, ListaConsumo, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
    public function destroyPais ($id)
    {
        Pais::destroy($id);
        return redirect()->route('pais');
    }

    public function destroyEstado ($id)
    {
        Estado::destroy($id);
        return redirect()->route('estado');
    }

    public function destroyCidade ($id)
    {
        Cidade::destroy($id);
        return redirect()->route('cidade');
    }

    public function destroyBairro ($id)
    {
        Bairro::destroy($id);
        return redirect()->route('bairro');
    }

    public function destroyEndereco ($id)
    {
        Endereco::destroy($id);
        return redirect()->route('endereco');
    }

    // INICIO PESSOA

    public function destroyPessoa ($id)
    {
        Pessoa::destroy($id);
        return redirect()->route('pessoa');
    }

    public function destroyFuncionario ($id)
    {
        $Quary=DB::table('funcionarios')
                ->select('funcionarios.id')
                ->join('pessoas','funcionarios.pessoa_id', '=', 'pessoas.id')
                ->where('pessoas.id', '=', $id)
                ->get();
        // acessa as array  trasformando em string
        $FuncID = $Quary[0]->id;

        Funcionario::destroy($FuncID);
        return redirect()->route('FuncView');
    }

    public function destroyHospede ($id)
    {
        Hospede::destroy($id);
        return redirect()->route('hospede');
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

    public function destroyAdmin ($id)
    {
        User::destroy($id);
        return redirect()->route('adm');
    }

    public function destroyListaConsumo ($id)
    {
        ListaConsumo::destroy($id);
        return redirect()->route('listaConsumo');
    }
}
