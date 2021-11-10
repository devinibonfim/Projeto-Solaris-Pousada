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
        /**/
         $Quary=DB::table('reservas')
        ->select('reservas.*','reservas.id AS RID','quartos.*','tipo_quartos.*','hospedes.*','pessoas.*','users.*')
        ->join('quartos','reservas.quarto_id', '=', 'quartos.id')
        ->join('tipo_quartos','quartos.tipoQuarto_id', '=', 'tipo_quartos.id')
        ->join('hospedes','reservas.hospede_id', '=', 'hospedes.id')
        ->join('pessoas','hospedes.pessoa_id', '=', 'pessoas.id')
        ->join('users','pessoas.user_id', '=', 'users.id')
        ->get();
        /**/
        $reserva = $Quary;
        return view('admin.reservaCrud.view',['reserva'=>$reserva]);
        //echo $Quary;
    }

    public function viewReservaHosp(){
        $hospede=DB::table('hospedes')
        ->select('hospedes.id AS HospID','hospedes.*','pessoas.*','users.*','enderecos.*')
        ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
        ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
        ->join('users','users.id', '=', 'pessoas.user_id')
        ->get();
        return view('admin.reservaCrud.HospSearch',['hospede'=>$hospede]);
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
        return view('dropDownMenu.ajuda');
    }

    public function viewPerfil()
    {
        $id = Auth::user()->id;
        $perfil=DB::table('hospedes')
                ->select('hospedes.*','pessoas.*','users.*','enderecos.*')
                ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
                ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
                ->join('users','users.id', '=', 'pessoas.user_id')
                ->where('hospedes.id','=',$id)
                ->get();
        return view('dropDownMenu.perfil',['perfil'=>$perfil[0]]);
    }

    
    public function viewPerfilEdit()
    {
        $id = Auth::user()->id;
        $perfil=DB::table('hospedes')
                ->select('hospedes.*','hospedes.id AS HID','pessoas.*','users.*','users.id AS UID','enderecos.*')
                ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
                ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
                ->join('users','users.id', '=', 'pessoas.user_id')
                ->where('hospedes.id','=',$id)
                ->get();
        return view('dropDownSuport.edit',['perfil'=>$perfil[0]]);
    }

    public function viewReserva2()
    {
        return view('dropDownMenu.reserva');
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

    public function viewConsumo($id)
    {   

        $produto = Produto::all();

        $consumo = DB::table('consumos')
        ->select('consumos.*','consumos.id AS CSID','lista_consumos.*','lista_consumos.id AS LID','produtos.*','produtos.valor AS PID','reservas.*')
        ->join('lista_consumos','consumos.id', '=', 'lista_consumos.consumo_id')
        ->join('produtos','lista_consumos.produto_id', '=', 'produtos.id')
        ->join('reservas','consumos.id', '=', 'reservas.consumo_id')
        ->where('reservas.id','=',$id)
        ->get();

        //dd($consumo[0]->CSID);
        return view('admin.consumoCrud.view',['consumo'=>$consumo],['produto'=>$produto]);
    }
}
 