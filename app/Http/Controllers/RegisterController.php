<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use App\Http\Requests\RegisterRequest;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user = new UserRepository();
    }

    public function registerIndex(){
        return inertia("Auth/Register");
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
            return response()->json(["success"=>false,"message"=>"Error, Please try again.".$er->getMessage()]);
        }

    }
}
