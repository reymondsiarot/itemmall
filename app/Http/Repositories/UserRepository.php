<?php
namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{

    public function findByLoginId($loginId){
        return User::where('login_id', $loginId)->first();
    }

    public function create($user){
        return User::create([
            'login_id'=>$user['username'],
            'login_pw' => md5($user['password']),
            'login_pw2' => $user['password']
        ]);
    }

}
