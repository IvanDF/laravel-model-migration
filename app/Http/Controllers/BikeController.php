<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function bike() 
    {
        $bike = new Bike();

        $bike->marca = 'Derbi';
        $bike->modello = 'GPR125';

        $bike->save();

        return ('La mia vecchia moto... che catorcio');
    }
}
