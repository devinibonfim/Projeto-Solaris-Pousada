<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Cidade, Consumo, Endereco, Estado, Funcionario, Hospede, Pais, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
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
    //^ terminado
    // FIM PESSOA

    public function viewProduto()
    {
        $produto=Produto::all();
        return view('admin.produtoCrud.view',['produto'=>$produto]);
    }

    public function viewTipoQuarto()
    {
        $tipoQuarto=TipoQuarto::all();
        return view('admin.tipoQuartoCrud.view',['tipoQuarto'=>$tipoQuarto]);
    }

    public function viewReserva()
    {
        $reserva=Reserva::all();
        return view('reserva_view',['reserva'=>$reserva]);
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

    public function viewDeluxe(Request $request)
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
