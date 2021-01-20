<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function index() {
        $bikes = Bike::all();
        // dd($bikes);
        return response()->json($bikes);
    }
}