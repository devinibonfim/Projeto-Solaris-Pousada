<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\Hospede;
use App\Models\Pessoa;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = DB::table('users')->insertGetId([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        //dd($user);

        $endereco =DB::table('enderecos')->insertGetId([
            'cep' => $data['cep'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'estado' => $data['uf'],
            'cidade' => $data['cidade'],
            'numero_casa' => $data['numero_casa'],
            'complemento' => $data['complemento'],
        ]);
        

        //dd($endereco);
        $pessoa = DB::table('pessoas')->insertGetId([
            'user_id' => $user,
            'endereco_id' => $endereco,
            'telefone' => $data['telefone'],
            'data_nascimento' => $data['data_nascimento'],
            'nacionalidade' => $data['nacionalidade'],
        ]);
        //dd($pessoa);

        $pessoa = DB::table('hospedes')->insertGetId([
            'pessoa_id' => $pessoa,
        ]);

        return User::findOrFail($user);
        /**/
    }
}
