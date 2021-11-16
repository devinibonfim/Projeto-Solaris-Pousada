<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Consumo, Endereco, Funcionario, Hospede, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $user->funcionario = 1;
        }
        $user->save();
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
        /**/
        //atualiza pessoa
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->ra= $request->input('ra');
        $funcionario->rg= $request->input('rg');
        $funcionario->pis_pasep= $request->input('pis_pasep');
        $funcionario->save();
        /**/
        return redirect(route('FuncView'));
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
        return redirect(route('TQuartoView'));
    }

    //
    public function updateReserva (Request $request, $id){
        $Quary=DB::table('reservas')
                ->select('reservas.*','quartos.*',)
                ->join('quartos','reservas.quarto_id', '=', 'quartos.id')
                ->join('tipo_quartos','quartos.tipoQuarto_id', '=', 'tipo_quartos.id')
                ->join('consumos','reservas.consumo_id', '=', 'consumos.id')
                ->where('reservas.id','=',$id)
                ->get();
        //dd($Quary);
        /**/
        $quartoid  = $Quary[0] -> quarto_id;
        $consumoid  = $Quary[0] -> consumo_id;
        $hospedeid = $Quary[0] -> hospede_id;
        
        $Qquarto = DB::table('quartos')
                    ->select('quartos.id AS QID','quartos.*','Tipo_quartos.*')
                    ->join('tipo_quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->where('quartos.id','=',$request->input('quarto'))
                    ->get();
        $quarto = Quarto::findOrFail($Qquarto[0]->QID);
        $quarto->reserva = 1;
        $quarto->save();

        $consumo = Consumo::findOrFail($consumoid);
        $consumo->quantidade = 0;
        $consumo->save();

        $quartoid  = $quarto->id;
        $Quary = DB::table('tipo_quartos')
                    ->join('quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->where('quartos.id','=', $quartoid)
                    ->get();
        $qValor = $Quary[0]->valor;

        $reserva = Reserva::findOrFail($id);
        $reserva->quarto_id = $quartoid;
        $reserva->consumo_id = $consumoid;
        $reserva->hospede_id = $hospedeid;
        $reserva->valor = $qValor ;
        $reserva->anotacoes = $request->input('anotacoes');
        $reserva->data_entrada = $request->input('data_entrada');
        $reserva->data_saida =  $request->input('data_saida');
        $reserva->save();
        /**/
        return redirect(route('ReserView'));
    }

    public function perfilUpdate (Request $request,$id){
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
        return redirect(route('perfil'));
    }

    public function updateConsumo (Request $request, $id){
        $consumo = Consumo::findOrFail($id);
        $consumo ->update($request->all());
        return redirect(route('consumoView'));
    }
}
 