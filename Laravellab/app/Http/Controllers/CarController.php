<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCar;
use App\Car;

class CarController extends Controller
{
    public function allCars()
    {
        $cars = Car::all();
        return view('car.allcars', ['cars' => $cars]);
    }

    public function particularcar($id)
    {
        $car = Car::where('id', '=', $id)->get();
        return view('car.particularcar', ['car' => $car]);
    }

    public function newcar(StoreCar $request)
    {
        $make = $request->input('carmake');
        $model = $request->input('carmodel');
        $producedon = $request->input('producedon');

        $car = new Car;
        $car->make = $make;
        $car->model = $model;
        $car->produced_on = $producedon;

        if ($car->save()) {
            $request->session()->flash('success', 'Save successful');
            echo "Save successful";
        } else {
            $request->flash('failure', 'Ooh, something went wrong');
            echo "Ooh, something went wrong";
        }

        return redirect('/addcar');
    }

    public function addcar()
    {
        return view('car.newcar');
    }
}
