<?php

namespace App\Http\Controllers;
use App\Models\Cars;
use Illuminate\Http\Request;
class CarSettings extends Controller
{
    public function index()
    {
        $cars = Cars::all();

        return view('settings.index', ['cars' => $cars]);
    }
    public function indexes()
    {
        $cars = Cars::all();

        return view('/transactions.transaction', ['cars' => $cars]);
    }


    public function create()
    {
        return view('settings.create');
    }


    public function delete(Cars $car)
    {
        return view('settings.delete', ['car' => $car]);
    }

    public function updates(Cars $car)
    {
        return view('transactions.update', ['car' => $car]);
    }

    public function update(Cars $car)
    {
        request()->validate([
            'carModel' => 'required',
            'License' => 'required',
            'status' => 'required',
        ]);

        $car->update([
            'carModel' => request('carModel'),
            'License' => request('License'),
            'status' => request('status'),
        ]);

        return redirect('/transactions');
    }

    public function destroy(Cars $car)
    {
        $car->delete();

        return redirect('/settings');
    }

  

    public function addCar(Request $request)
    {
        $request->validate([
            'carModel'      => 'required|string|max:255',
            'License'     => 'required|string|max:255',
            'status'     => 'required|string|max:255',
           
        ]);


        Cars::create([
            'carModel'      => $request->carModel,
            'License'     => $request->License,
            'status'     => $request->status,
            
        ]);
        return redirect('settings');
    }

}
