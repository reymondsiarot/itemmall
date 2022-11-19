<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemmallController extends Controller
{
    public function index(){
        return inertia("Itemmall/Index");
    }



}
