<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new UserRepository();
    }

    public function loginIndex(){
        return inertia("Auth/Login");
    }

    public function loginUser(LoginRequest $request){
        try{
            $user =  $this->user->findByLoginId($request['username']);
            if($user && $user->login_pw == md5($request['password'])){
                $login = Auth::login($user,$request['remember']);
                return response()->json(["success"=>true]);
            }
            return response()->json(["success"=>false,"message"=>"Invalid credentials."]);
        }catch(Exception $er){
            return response()->json(["success"=>false,"message"=>"Error, Please try again.".$er]);

        }
    }

    public function logout(){
        Auth::logout();
        return response()->json(["success"=>true]);

    }

}
