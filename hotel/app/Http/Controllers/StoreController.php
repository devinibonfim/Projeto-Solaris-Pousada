<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{Funcionario, Pessoa, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        /** /
        $user['name'] = $request->get('name');
        $user['email'] = $request->get('email');
        $user['password'] = $request->get('password');

        $pessoa['telefone'] = $request->get('telefone');
        $pessoa['nacionalidade'] = $request->get('nacionalidade');
        $pessoa['dataNascimento'] = $request->get('dataNascimento');
        
        $funcionario['ra'] = $request->get('ra');
        $funcionario['rg'] = $request->get('rg');
        $funcionario['pis_pasep'] = $request->get('pis_pasep');
     
        User::create($user);
        Pessoa::create($pessoa);
        Funcionario::create($funcionario);
        /**/

        //

        /** /
        $user->save();

        //KLUDGE!! rest of site depends on user id in auth object - need to force/create it here
        Auth::attempt(array('email' => $request->input::get('email'), 'password' => $request->input::get('password')), true);

        return redirect('users/' . Auth::user()->id);
        /**/

        /** /
        $user = Auth::user();
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);



        Pessoa::create([
            'user_id'=>  User::findOrFail($id),
            'telefone' => $request->input('telefone'),
            'nacionalidade' => $request->input('nacionalidade'),
            'data_nascimento' => $request->input('data_nascimento'),
        ]);
        Funcionario::create([
            'pessoa_id'=> auth()->id(),
            'ra' => $request->input('ra'),
            'rg' => $request->input('rg'),
            'pis_pasep' => $request->input('pis_pasep'),
        ]);
        /**/


        /** /
        //Atulizar usuario
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        Pessoa::create([
            'user_id'=>  $this->attributes['user_id'] = Auth::user()->id,
            'telefone' => $request->input('telefone'),
            'nacionalidade' => $request->input('nacionalidade'),
            'data_nascimento' => $request->input('data_nascimento'),
        ]);
        /**/

        /**/
        $funcioanrio = new Funcionario([
            'ra' => $request->input('ra'),
            'rg' => $request->input('rg'),
            'pis_pasep' => $request->input('pis_pasep'),
        ]);

        $pessoa = new Pessoa([
            'telefone' => $request->input('telefone'),
            'nacionalidade' => $request->input('nacionalidade'),
            'data_nascimento' => $request->input('data_nascimento'),
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        $user->pessoa()->save($user);
        /**/
        dd();
        //return redirect('/');
    }
}
