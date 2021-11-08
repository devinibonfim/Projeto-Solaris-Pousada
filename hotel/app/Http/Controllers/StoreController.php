<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Endereco, Funcionario, Hospede, Pessoa, Produto, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class StoreController extends Controller
{
    public function storeAdm(Request $request)
    {
        User::create($request->all());
        return redirect('/');

    }

    public function storeFuncionario(Request $request)
    {    
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        //check box
        $radio = $request->input('flexRadioDefault');
        if($radio == 'func'){
            $user->funcionario = 0;
            $user->admin = 1;
        }else{
            $user->admin = 1;
            $user->funcionario = 0;
        }
        $user->save();

        $endereco = new Endereco;       
        $endereco->cep = $request->input('cep');
        $endereco->rua = $request->input('rua');
        $endereco->bairro = $request->input('bairro');
        $endereco->estado = $request->input('uf');
        $endereco->cidade = $request->input('cidade');
        $endereco->numero_casa = $request->input('numero_casa');
        $endereco->complemento = $request->input('complemento');
        $endereco->save();
    
        $enderecoid  = $endereco->id;
        $userid  = $user->id;
        $pessoa = new Pessoa;
        $pessoa->user_id = $userid;
        $pessoa->endereco_id  = $enderecoid;
        $pessoa->telefone = $request->input('telefone');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->nacionalidade = $request->input('nacionalidade');
        $pessoa->save();

        $pessoaid  = $pessoa->id;
        $funcionario = new Funcionario;
        $funcionario->pessoa_id = $pessoaid;
        $funcionario->ra = $request->input('ra');
        $funcionario->rg = $request->input('rg');
        $funcionario->pis_pasep = $request->input('pis_pasep');
        $funcionario->save();

        return redirect(route('FuncView'));
    }

    public function storeHospede(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $endereco = new Endereco;       
        $endereco->cep = $request->input('cep');
        $endereco->rua = $request->input('rua');
        $endereco->bairro = $request->input('bairro');
        $endereco->estado = $request->input('uf');
        $endereco->cidade = $request->input('cidade');
        $endereco->numero_casa = $request->input('numero_casa');
        $endereco->complemento = $request->input('complemento');
        $endereco->save();
    
        $enderecoid  = $endereco->id;
        $userid  = $user->id;
        $pessoa = new Pessoa;
        $pessoa->user_id = $userid;
        $pessoa->endereco_id  = $enderecoid;
        $pessoa->telefone = $request->input('telefone');
        $pessoa->data_nascimento = $request->input('data_nascimento');
        $pessoa->nacionalidade = $request->input('nacionalidade');
        $pessoa->save();

        $pessoaid  = $pessoa->id;
        $hospede = new Hospede;
        $hospede->pessoa_id = $pessoaid;
        $hospede->save();

        return redirect(route('HospView'));
    }

    public function storeProduto(Request $request){
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        $produto->validade = $request->input('validade');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao');
        $produto->save();

        return redirect(route('ProdView'));
    }

    public function storeTiposQuarto(Request $request){
        $tipoQuarto = new TipoQuarto();
        $tipoQuarto->nome = $request->input('nome');
        $tipoQuarto->valor = $request->input('valor');
        $tipoQuarto->tamanho = $request->input('tamanho');
        $tipoQuarto->limite_pessoa = $request->input('limite_pessoa');
        $tipoQuarto->descricao = $request->input('descricao');
        $tipoQuarto->save();

        return redirect(route('TQuartoView'));
    }
}