<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $car = Car::all();

        return inertia('Car/Index', [
            'car'=> $car
        ]);
    }
}
