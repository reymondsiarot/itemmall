<?php
namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{

    public function findByLoginId($loginId){
        return User::where('login_id', $loginId)->first();
    }

    public function create($user){
        return User::create([
            'login_id'=>$user->login_id,
            'login_pw' => md5($user->login_pw),
            'login_pw2' => $user->login_pw
        ]);
    }

}
