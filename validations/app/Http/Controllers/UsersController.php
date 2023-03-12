<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function getData(Request $req)
    {
        $req->validate([
            'username' => 'required|unique:App\Models\User,email',
            'userpassword' => 'required|unique:App\Models\User,password'

        ]);

        $data = new User();

        $data->name = 'Joestar';
        $data->email = $req->username;
        $data->password = $req->userpassword;

        $data->save();

        return $req->input();
    }
}
