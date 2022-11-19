<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new UserRepository();
    }

    public function registerIndex(){
        return inertia("Auth/Register");
    }
    public function loginIndex(){
        return inertia("Auth/Login");
    }

    public function loginUser(LoginRequest $request){
        try{
            $user =  $this->user->findByLoginId($request['username']);
            if($user && $user->password == md5($request['password'])){
                auth()->attempt($request->only("username","password"),$request['remember']);
                return response()->json(["success"=>true]);
            }
            return response()->json(["success"=>false,"message"=>"Invalid credentials."]);
        }catch(Exception $er){
            return response()->json(["success"=>false,"message"=>"Error, Please try again."]);

        }
    }

    public function registerUser(RegisterRequest $request){
        try{
            $user =  $this->user->findByLoginId($request['username']);
            if($user){
                return response()->json(["success"=>false,"message"=>"User already registered."]);
            }
            $user =  $this->user->create($request->all());

            auth()->login($user);
            return response()->json(["success"=>true]);
        }catch(Exception $er){
            return response()->json(["success"=>false,"message"=>"Error, Please try again."]);
        }

    }
}
