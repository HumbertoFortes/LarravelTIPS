<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ControllerUser extends Controller
{
    public function listUser()
    {
        
        /*
        $user = new User();
        $user->name ='Humberto Fortes';
        $user->email = 'humberto@hotmail.com';
        $user->password = Hash::make(value('123'));
        $user->save();
        
        echo "<h1>Listagem de Usuário</h1>";
        */
        $user = User::where('id', 1)->first();
        return view('listUser', [
            'user' => $user 
        ]);
    }
}
