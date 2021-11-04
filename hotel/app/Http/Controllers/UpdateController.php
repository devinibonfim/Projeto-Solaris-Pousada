<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Estado, Funcionario, Hospede, ListaConsumo, Pais, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //Atulizar usuario
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        //atualiza pessoa
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->nacionalidade = $request->input('nacionalidade');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->save();
        
        //pega o id de funcionario independente da ordem dele na lista user
        $Quary=DB::table('funcionarios')
                ->select('funcionarios.id')
                ->join('pessoas','funcionarios.pessoa_id', '=', 'pessoas.id')
                ->where('pessoas.id', '=', $id)
                ->get();
        // acessa as array  trasformando em string
        $FuncID = $Quary[0]->id;

        //atualiza pessoa
        $funcionario = Funcionario::findOrFail($FuncID);
        $funcionario->ra= $request->input('ra');
        $funcionario->rg= $request->input('rg');
        $funcionario->pis_pasep= $request->input('pis_pasep');
        $funcionario->save();
        return redirect('FuncView');
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

    public function updateListaConsumo (Request $request, $id){
        $listaConsumo = ListaConsumo::findOrFail($id);
        $listaConsumo ->update($request->all());
        return redirect('/');
    }

    //

    public function updateAdmin (Request $request, $id){
        $adm = User::findOrFail($id);
        $adm ->update($request->all());
        return redirect('/');
    }
}
