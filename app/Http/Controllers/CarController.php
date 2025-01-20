<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Show the car creation form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a new car in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'type' => 'required|in:SUV,SEDAN,Coupe',
            'transmission' => 'required|in:Automatic,Manual',
            'fuel_type' => 'required|in:Diesel,Petrol,Hybrid,Electric',
            'mileage' => 'required|integer',
            'fuel_efficiency' => 'required|numeric',
            'engine_size' => 'required|numeric',
            'horsepower' => 'required|integer',
            'price' => 'required|numeric',
            'vin' => 'required|string|max:17|unique:cars,vin',
            'availability_status' => 'required|in:Sold,Available,Coming,Reserved',
            'seat_capacity' => 'required|integer',
            'drive_type' => 'required|in:FWD,RWD,AWD,4WD',
            'car_condition' => 'required|in:New,Used,Certified',
        ]);

        // Create a new car record
        Car::create($request->all());

        // Redirect to a success page or list of cars
        return redirect()->route('car.create')->with('success', 'Car created successfully!');
    }
}
