<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Bike;

class HomeController extends Controller
{
    public function index() 
    {

        // Get data from db
        $cars = Car::all();
        // dump($cars);
        
        $bikes = Bike::all();

        return view('home', compact('cars', 'bikes'));
    }
}
