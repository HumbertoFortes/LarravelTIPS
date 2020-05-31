<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listAllUser()
    {
        $users = User::all();

        return view('listAllUsers',[
            'users' => $users //O Parámetro User recebe todos os dados dentro da variável Users que declaramos antes.
        ]);
    }

    public function listUser(User $user) //Aqui recebe o vairável passada na rotam e esse valor só tem de ser do tipo User
    {
        return view('listUser2' , [
            'user' => $user
        ]);
    }

    public function formAddUser()
    {
        return view('addUser');
    }

    public function saveUser(Request $request)
    {       
        $user = new User();
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->password = Hash::make($request->senha);
        
        $user->save();

        return redirect()->route('users.listAll'); // Após  salvar o user Redireciona-nos a página de listagem de usuários

    }

    public function formEditUser(User $user)
    {
        return view('editUser' , [
            'user' => $user
        ]);
    }

    public function editUser(User $user, Request $request)
    {
        $user->name = $request->nome;

        if(filter_var($request->email, FILTER_VALIDATE_EMAIL))
        {
            $user->email = $request->email;
        }
        if (!empty($request->senha)) 
        {
            $user->password = Hash::make($request->senha);
        }

        $user->save();

        return redirect()->route('users.listAll'); // Após  salvar o user Redireciona-nos a página de listagem de usuários
    }

    public function destroyUser(User $user)
    {
        $user->delete();

        return redirect()->route('users.listAll'); // Após  salvar o user Redireciona-nos a página de listagem de usuários
    }
}
