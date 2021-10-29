<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Estado, Funcionario, Hospede, Pais, Pessoa, Produto, Quarto, Reserva, TipoQuarto};
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function updatePais (Request $request, $id){
        $pais = Pais::findOrFail($id);
        $pais ->update($request->all());
        return redirect('/');
    }

    public function updateEstado (Request $request, $id){
        $estado = Estado::findOrFail($id);
        $estado ->update($request->all());
        return redirect('/');
    }

    public function updateCidade (Request $request, $id){
        $cidade = Cidade::findOrFail($id);
        $cidade ->update($request->all());
        return redirect('/');
    }

    public function updateBairro (Request $request, $id){
        $bairro = Bairro::findOrFail($id);
        $bairro ->update($request->all());
        return redirect('/');
    }

    public function updateEndereco (Request $request, $id){
        $endereco = Endereco::findOrFail($id);
        $endereco ->update($request->all());
        return redirect('/');
    }

    // INICIO PESSOA

    public function updatePessoa (Request $request, $id){
        $pessoa = Pessoa::findOrFail($id);
        $pessoa ->update($request->all());
        return redirect('/');
    }

    public function updateFuncionario (Request $request, $id){
        $funcionario = Funcionario::findOrFail($id);
        $funcionario ->update($request->all());
        return redirect('/');
    }

    public function updateHospede (Request $request, $id){
        $hospede = Hospede::findOrFail($id);
        $hospede ->update($request->all());
        return redirect('/');
    }

    // FIM PESSOA

    public function updateProduto (Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto ->update($request->all());
        return redirect('/');
    }

    public function updateConsumo (Request $request, $id){
        $consumo = Consumo::findOrFail($id);
        $consumo ->update($request->all());
        return redirect('/');
    }

    public function updateTipoQuarto (Request $request, $id){
        $tipoQuarto = TipoQuarto::findOrFail($id);
        $tipoQuarto ->update($request->all());
        return redirect('/');
    }

    public function updateQuarto (Request $request, $id){
        $quarto = Quarto::findOrFail($id);
        $quarto ->update($request->all());
        return redirect('/');
    }

    public function updateReserva (Request $request, $id){
        $reserva = Reserva::findOrFail($id);
        $reserva ->update($request->all());
        return redirect('/');
    }
}
