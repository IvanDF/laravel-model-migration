<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function warehouse() 
    {
        $car = new Car();

        $car->marca = 'Suzuki';
        $car->modello = 'Swift';
        $car->targa = 'AA124BB';

        $car->save();

        return ('aggiunta top');
    }
}
