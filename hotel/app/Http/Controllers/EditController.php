<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Bairro, Pais, Estado,Cidade, Consumo, Endereco, Funcionario, Hospede, Pessoa, Produto, Quarto, Reserva, TipoQuarto, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function editEndereco ($id)
    {
        $endereco=Endereco::findOrFail($id);
        return view('endereco_edit',['endereco'=>$endereco]);
    }

    // INICIO PESSOA
    
    public function editFuncionario ($id)
    {
         $funcionario=DB::table('funcionarios')
             ->select('enderecos.*','pessoas.*','users.*','funcionarios.*')
             ->join('pessoas','pessoas.id','=','funcionarios.pessoa_id')
             ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
             ->join('users','users.id', '=', 'pessoas.user_id')
             ->where('funcionarios.id','=', $id)
             ->get();
        
        return view('admin.funcionarioCrud.edit',['funcionario'=>$funcionario[0]]);
    }

    public function editHospede ($id)
    {
        $hospede=DB::table('hospedes')
            ->select('enderecos.*','pessoas.*','users.*','hospedes.*')
            ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
            ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
            ->join('users','users.id', '=', 'pessoas.user_id')
            ->where('hospedes.id','=', $id)
            ->get();     
        return view('admin.hospedeCrud.edit',['hospede'=>$hospede[0]]);
    }


    public function editProduto ($id)
    {
        $produto=Produto::findOrFail($id);
        return view('admin.ProdutoCrud.edit',['produto'=>$produto]);
    }

    public function editConsumo ($id)
    {
        $consumo=Consumo::findOrFail($id);
        return view('consumo_edit',['consumo'=>$consumo]);
    }

    public function editTiposQuarto ($id)
    {
        $tipoQuarto=TipoQuarto::findOrFail($id);
        return view('admin.tiposQuartoCrud.edit',['tipoQuarto'=>$tipoQuarto]);
    }

    //

    public function editReserva1 ($id)
    {
        $reserva=DB::table('reservas')
                ->select('reservas.*','quartos.*','tipo_quartos.*','hospedes.*','pessoas.*','enderecos.*','users.*')
                ->join('quartos','reservas.quarto_id', '=', 'quartos.id')
                ->join('tipo_quartos','quartos.tipoQuarto_id', '=', 'tipo_quartos.id')
                ->join('hospedes','reservas.hospede_id', '=', 'hospedes.id')
                ->join('pessoas','hospedes.pessoa_id', '=', 'pessoas.id')
                ->join('enderecos','pessoas.endereco_id', '=', 'enderecos.id')
                ->join('users','pessoas.user_id', '=', 'users.id')
                ->where('reservas.id','=',$id)
                ->get();
        $tipoQuarto=TipoQuarto::all();
        return view('admin.reservaCrud.1.edit',['reserva'=>$reserva[0]],['tipoQuarto'=>$tipoQuarto]);
    }

    public function editReserva2 ($id)
    {
        $reserva=Reserva::findOrFail($id);
        return view('admin.reservaCrud.2.edit',['reserva'=>$reserva]);
    }

}
