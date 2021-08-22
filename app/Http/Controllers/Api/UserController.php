<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users= User::all();
       
        return $users;
    }
    public function show($id)
    {
        $user = User::where('id',"=",$id)->first();
        return $user;

    }
    public function destroy($id)
    {
     User::destroy($id);
      
    }
}
