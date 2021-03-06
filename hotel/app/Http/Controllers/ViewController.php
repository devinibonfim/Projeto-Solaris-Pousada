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
        ->select('reservas.*','reservas.valor AS VAL','reservas.id AS RID','quartos.*','tipo_quartos.*','hospedes.*','pessoas.*','users.*')
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
            //dd($perfil->id);
        return view('dropDownSuport.edit',['perfil'=>$perfil[0]]);
    }

    public function viewReserva2()
    {
        $id = Auth::user()->id;
        $Quary = DB::table('reservas')->select('reservas.*')->where('reservas.hospede_id','=', $id)->get();

        if(empty($Quary[0])){
            $OP = 0;
        }else{
            $OP = 1;
        }
        //dd($OP);

        $reserva=DB::table('reservas')
                    ->select('reservas.*','quartos.*','tipo_quartos.*','hospedes.*','pessoas.*','enderecos.*','users.*')
                    ->join('quartos','reservas.quarto_id', '=', 'quartos.id')
                    ->join('tipo_quartos','quartos.tipoQuarto_id', '=', 'tipo_quartos.id')
                    ->join('hospedes','reservas.hospede_id', '=', 'hospedes.id')
                    ->join('pessoas','hospedes.pessoa_id', '=', 'pessoas.id')
                    ->join('enderecos','pessoas.endereco_id', '=', 'enderecos.id')
                    ->join('users','pessoas.user_id', '=', 'users.id')
                    ->where('users.id','=',$id)
                    ->get();
        //dd($reserva);
        return view('dropDownMenu.reserva',['op'=>$OP],['reserva'=>$reserva]);
    }

    //Quartos

    public function viewStandard()
    {
        $quarto = DB::table('quartos')
                    ->select('Tipo_quartos.*','quartos.*','quartos.id AS QID')
                    ->join('tipo_quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->where('tipoQuarto_id','=', 1)
                    ->where('quartos.reserva','=', '0')
                    ->get();
        return view('room.standard',['quarto'=>$quarto]);
    }

    public function viewDeluxe()
    {
        $quarto = DB::table('quartos')
                    ->select('Tipo_quartos.*','quartos.*','quartos.id AS QID')
                    ->join('tipo_quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->where('tipoQuarto_id','=', 2)
                    ->get();
        return view('room.deluxe',['quarto'=>$quarto]);
    }

    public function viewPremium()
    {
        $quarto = DB::table('quartos')
                    ->select('Tipo_quartos.*','quartos.*','quartos.id AS QID')
                    ->join('tipo_quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->where('tipoQuarto_id','=', 3)
                    ->get();
        return view('room.premium', ['quarto'=>$quarto]);
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

        // dd($consumo[0]->CSID);
        return view('admin.consumoCrud.view',['consumo'=>$consumo],['produto'=>$produto]);
    }

    public function admin()
    {
        return view('acesso.admin');
    }

    public function funcionario()
    {
        return view('acesso.funcionario');
    }

    public function hospede()
    {
        return view('acesso.hospede');
    }
}
