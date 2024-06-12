<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CarController extends Controller {
    /* =========== Display a listing of the resources =========== */
    public function index() {
        $cars = Car::all();
        return view('pages.gallery')->with('cars', $cars);
    }
    

    /* ======= Show the forms for creating a new resource ======= */
    public function create() {
        return view('pages.create');
    }
    
    /* ======= Store a newly created resources in storage ======= */
    public function store(Request $request) {
        $this->validate($request, [
            'VIN' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'class' => 'required',
            'mileage' => 'required',
            'fuel' => 'required',
            'ext_color' => 'required',
            'int_color' => 'nullable',
            'features' => 'nullable',
            'photo' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);
        
        $input = $request->all();
        
        // Store the photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('assets/img/cars'), $photoName);
            $input['photo'] = $photoName;
            
            // Store the photo name to database
            $car = Car::create($input);
            $car->photo = $photoName;
            $car->save();
        }
        
        Session::flash('flash_message', 'New Car has been added!');
        
        return redirect()->back();
    }
    
    /* ============= Display the specified resource ============= */
    public function show(string $id) {
        //
    }
    
    /* ==== Show the form for editing the specified resource ==== */
    public function edit(string $id) {
        //
    }
    
    /* ======== Update the specified resource in storage ======== */
    public function update(Request $request, string $id) {
        //
    }
    
    /* ======= Remove the specified resource from storage ======= */
    public function destroy(string $id) {
        //
    }
}
