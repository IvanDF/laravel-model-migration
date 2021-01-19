<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index() 
    {

        // Get data from db
        $cars = Car::all();
        // dump($cars);


        return view('home', compact('cars'));
    }
}
