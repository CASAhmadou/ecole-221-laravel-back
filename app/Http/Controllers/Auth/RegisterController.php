<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        
        return view("users.index", compact("users"));
    }

    public function register(Request $request)
    {
        return [
            "email" => "required|email",
            "password" => "required|min:6|max:10"
        ];
    }

}
