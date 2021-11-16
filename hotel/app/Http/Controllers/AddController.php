<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hospede;
use App\Models\Quarto;
use App\Models\Reserva;
use App\Models\TipoQuarto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    // INICIO PESSOA
    public function createFuncionario()
    {
        return view('admin.funcionarioCrud.Add');
    }

    public function createHospede()
    {
        return view('admin.hospedeCrud.add');
    }

    // FIM PESSOA

    public function createReserva1()
    {

        $quarto = DB::table('quartos')
                    ->select('quartos.*','Tipo_quartos.*')
                    ->join('tipo_quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->get();
        return view('admin.reservaCrud.1.add',['quarto'=> $quarto]);
    }

    public function createReserva2($id)
    {
        $hospede=DB::table('hospedes')
            ->select('hospedes.*','pessoas.*','users.*','enderecos.*')
            ->join('pessoas','pessoas.id','=','hospedes.pessoa_id')
            ->join('enderecos','enderecos.id','=','pessoas.endereco_id')
            ->join('users','users.id', '=', 'pessoas.user_id')
            ->where('hospedes.id','=', $id)
            ->get();

        $quarto = DB::table('quartos')
                    ->select('Tipo_quartos.*','quartos.*','quartos.id AS QID')
                    ->join('tipo_quartos','quartos.tipoQuarto_id','=','tipo_quartos.id')
                    ->get();
        return view('admin.reservaCrud.2.add',['quarto'=> $quarto],['hospede'=>$hospede[0]]);
    }

    public function createProduto()
    {
        return view('admin.produtoCrud.add');
    }

    public function createTiposQuarto()
    {
        return view('admin.tiposQuartoCrud.add');
    }

    public function createQuarto()
    {
        return view('quarto_add');
    }
    
    public function createConsumo()
    {
        return view('admin.consumoCrud.add');
    }
}
  