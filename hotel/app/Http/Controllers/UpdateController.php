<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Endereco, Funcionario, Hospede, Pessoa, Produto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function updateFuncionario (Request $request, $id){
        /**/
        $Quary=DB::table('funcionarios')
        ->select('funcionarios.id','funcionarios.pessoa_id','pessoas.user_id','pessoas.endereco_id')
        ->join('pessoas','funcionarios.pessoa_id', '=', 'pessoas.id')
        ->join('users','pessoas.user_id', '=', 'users.id')
        ->join('enderecos','pessoas.endereco_id', '=', 'enderecos.id')
        ->where('funcionarios.id', '=', $id)
        ->get();
        // acessa as array  trasformando em string
        $userID = $Quary[0]->user_id;
        $pessoaID = $Quary[0]->pessoa_id;
        $enderecoID = $Quary[0]->endereco_id;

        //Atulizar usuario
        $user = User::findOrFail($userID);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        //check box
        $radio = $request->input('flexRadioDefault');
        if($radio == 'func'){
            $user->funcionario = 1;
            $user->admin = 0;
        }else{
            $user->admin = 1;
            $user->funcionario = 0;
        }
        $user->save();

        //atualiza endereço
        $endereco = Endereco::findOrFail($pessoaID);
        $endereco->cep = $request->input('cep');
        $endereco->rua = $request->input('rua');
        $endereco->bairro = $request->input('bairro');
        $endereco->estado = $request->input('uf');
        $endereco->cidade = $request->input('cidade');
        $endereco->numero_casa = $request->input('numero_casa');
        $endereco->complemento = $request->input('complemento');
        $endereco->save();

        //atualiza pessoa
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->nacionalidade = $request->input('nacionalidade');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->save();

        //atualiza pessoa
        $funcionario = Funcionario::findOrFail($enderecoID);
        $funcionario->ra= $request->input('ra');
        $funcionario->rg= $request->input('rg');
        $funcionario->pis_pasep= $request->input('pis_pasep');
        $funcionario->save();
        /**/
        return redirect('FuncView');
    }

    public function updateHospede (Request $request, $id){
        //pega o id de funcionario independente da ordem dele na lista user
        $Quary=DB::table('hospedes')
        ->select('hospedes.id','hospedes.pessoa_id','pessoas.user_id','pessoas.endereco_id')
        ->join('pessoas','hospedes.pessoa_id', '=', 'pessoas.id')
        ->join('users','pessoas.user_id', '=', 'users.id')
        ->join('enderecos','pessoas.endereco_id', '=', 'enderecos.id')
        ->where('hospedes.id', '=', $id)
        ->get();
        // acessa as array  trasformando em string
        $userID = $Quary[0]->user_id;
        $pessoaID = $Quary[0]->pessoa_id;
        $enderecoID = $Quary[0]->endereco_id;
        /**/
        //Atulizar usuario
        $user = User::findOrFail($userID);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        /**/
        //atualiza endereço
        $endereco = Endereco::findOrFail($enderecoID);
        $endereco->cep = $request->input('cep');
        $endereco->rua = $request->input('rua');
        $endereco->bairro = $request->input('bairro');
        $endereco->estado = $request->input('uf');
        $endereco->cidade = $request->input('cidade');
        $endereco->numero_casa = $request->input('numero_casa');
        $endereco->complemento = $request->input('complemento');
        $endereco->save();

        //atualiza pessoa
        $pessoa = Pessoa::findOrFail($pessoaID);
        $pessoa->nacionalidade = $request->input('nacionalidade');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->save();

        //atualiza pessoa
        $hospede = Hospede::findOrFail($id);
        $hospede->save();
        //dd($userID);
        return redirect(route('HospView'));
    }

    public function updateProduto (Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto ->update($request->all());
        return redirect(route('ProdView'));
    }

    public function updateTiposQuarto (Request $request, $id){
        $tipoQuarto = TipoQuarto::findOrFail($id);
        $tipoQuarto ->update($request->all());
        return redirect('/');
    }

    //
    public function updateReserva (Request $request, $id){
        $reserva = Reserva::findOrFail($id);
        $reserva ->update($request->all());
        return redirect('/');
    }
}
