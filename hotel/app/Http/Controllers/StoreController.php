<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Consumo, Endereco, Funcionario, Hospede, ListaConsumo, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $user->funcionario = 1;
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
        $valor = $request->input('valor');
        $tipoQuarto->valor = $valor;
        $tipoQuarto->tamanho = $request->input('tamanho');
        $tipoQuarto->limite_pessoa = $request->input('limite_pessoa');
        $tipoQuarto->descricao = $request->input('descricao');
        $tipoQuarto->save();

        return redirect(route('TQuartoView'));
    }

    public function storeReserva(Request $request, $id){

        
        /**/
        $quarto = new Quarto;
        $quarto->tipoQuarto_id = $request->input('tipoQuarto');
        $quarto->numero = $request->input('numero');
        $quarto->andar  = $request->input('andar');
        $quarto->anotacoes = $request->input('anotacoes');
        $quarto->save();

        
        $consumo = new Consumo;
        $consumo->quantidade = 0;
        $consumo->save();

        $listConsumo = new ListaConsumo;
        $listConsumo->consumo_id = $consumo->id;
        $listConsumo->produto_id = 1;
        $listConsumo->save();

        $quartoid  = $quarto->id;
        $Quary = DB::table('tipo_quartos')
                    ->join('quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->where('quartos.id','=', $quartoid)
                    ->get();
        $qValor = $Quary[0]->valor;

        $consumoid  = $consumo->id;
        $hospedeid = $id;
        $reserva = new Reserva;
        $reserva->quarto_id = $quartoid;
        $reserva->consumo_id = $consumoid;
        $reserva->hospede_id = $hospedeid;
        $reserva->valor = $qValor ;
        $reserva->data_entrada = $request->input('data_entrada');
        $reserva->data_saida = $request->input('data_saida');
        $reserva->save(); 
        /**/
        return redirect(route('ReserView'));
    }

    public function storeConsumo(Request $request, $id){
        $listConsumo = new ListaConsumo;
        $listConsumo->produto_id = $request->input('produto');
        $listConsumo->consumo_id = $id;
        $listConsumo->save();
        //dd($listConsumo);

        return redirect(route('consView',$id));
    }
}
 