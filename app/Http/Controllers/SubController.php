<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function index(){
        $client = Client::all();
        return inertia('Subscribe/Index', [
            'client'=> $client
        ]);
    }
}
