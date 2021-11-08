<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Estado, Funcionario, Hospede, Pais, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    // INICIO PESSOA
    public function viewFuncionario()
    {
        $funcionario=DB::table('funcionarios')
                    ->select('funcionarios.id AS FuncID','funcionarios.*','pessoas.*','enderecos.*','users.*',)
                    ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
                    ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
                    ->join('users','users.id', '=', 'pessoas.user_id')
                    ->get();
        return view('admin.funcionarioCrud.view',['funcionario'=>$funcionario]);

    }

    public function viewHospede()
    {
        $hospede=DB::table('hospedes')
                    ->select('hospedes.id AS HospID','hospedes.*','pessoas.*','users.*','enderecos.*')
                    ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
                    ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
                    ->join('users','users.id', '=', 'pessoas.user_id')
                    ->get();
        return view('admin.hospedeCrud.view',['hospede'=>$hospede]);
    }
    // Terminado
    // FIM PESSOA

    public function viewReserva()
    {
        /** /
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
        /** /
        $reserva=DB::table('reservas')
                ->select('reservas.*','users.*','quartos.*','pessoas.*')
                ->join('hospedes','reservas.id','=','hospedes.id')
                ->join('pessoas','hospedes.pessoa_id','=','pessoas.id')
                ->join('users','pessoas.user_id','=','users.id')
                ->join('quartos','reservas.quarto_id','=','quartos.id')
                ->get();

        /**/
        $reserva=Reserva::all();
        return view('admin.reservaCrud.view',['reserva'=>$reserva]);
    }
    
    public function viewProduto()
    {
        $produto=Produto::all();
        return view('admin.produtoCrud.view',['produto'=>$produto]);
    }

    public function viewTiposQuarto()
    {
        $tipoQuarto=TipoQuarto::all();
        return view('admin.tiposQuartoCrud.view',['tipoQuarto'=>$tipoQuarto]);
    }

    //dropdonw

    public function viewAjuda()
    {
        return view('dropdown_menu.ajuda');
    }

    public function viewPerfil()
    {
        return view('dropdown_menu.perfil');
        // $pessoas = Pessoa::all();
    }

    public function viewReserva2()
    {
        return view('dropdown_menu.reserva');
    }

    //Quartos

    public function viewDeluxe()
    {
        return view('room.deluxe');
    }

    public function viewStandard()
    {
        return view('room.standard');
    }

    public function viewPremium()
    {
        return view('room.premium');
    }
}
