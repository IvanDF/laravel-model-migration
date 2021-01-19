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
        
        $myBike = Bike::where('marca', 'Derbi')->get();

        $otherBikes = Bike::where('marca', '<>', 'Derbi')
            ->orderBy('marca', 'asc')
            ->limit(5)
            ->get();

        return view('home', compact('cars', 'myBike', 'otherBikes'));
    }
}
