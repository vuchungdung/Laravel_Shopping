<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Exception;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login_index()
    {
        return view('auth.login');
    }
    public function login_post(Request $request){
        
    }
    public function regrister_index(){
        return view('auth.register');
    }
    
    public function regrister_post(Request $request){
        $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/login');
    }
}