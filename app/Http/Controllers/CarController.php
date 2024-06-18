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
    
    /* ======= Store a newly created resources in storage ======= */
    public function store(Request $request) {
        // Validate incoming request
        $validated = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'color' => 'required|string',
            'type' => 'required|in:sedan,suv,hatchback,mpv,truck,van,coupe,convertible',
            'seats' => 'required|integer|min:1',
            'transmission' => 'required|in:manual,automatic',
            'fuel_type' => 'required|in:petrol,diesel,electric,hybrid',
            'price' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'photo_url' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Handle file upload if 'photo_url' exists in the request
        if ($request->hasFile('photo_url')) {
            $photo = $request->file('photo_url');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('assets/img/cars'), $photoName);
            $validated['photo_url'] = $photoName;
        }
    
        // Create a new Car instance and store it in the database
        $car = Car::create($validated);
    
        // Flash a success message to the session
        Session::flash('flash_message', 'New Car has been added!');
    
        // Redirect back to the form page
        return redirect()->back();
    }
    
    /* ======== Update the specified resource in storage ======== */
    public function update(Request $request, string $id) {
        // Find the car by its ID
        $car = Car::findOrFail($id);

        // Validate incoming request
        $validated = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
            'color' => 'required|string',
            'type' => 'required|in:sedan,suv,hatchback,mpv,truck,van,coupe,convertible',
            'seats' => 'required|integer|min:1',
            'transmission' => 'required|in:manual,automatic',
            'fuel_type' => 'required|in:petrol,diesel,electric,hybrid',
            'price' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'photo_url' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if 'photo_url' exists in the request
        if ($request->hasFile('photo_url')) {
            $photo = $request->file('photo_url');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('assets/img/cars'), $photoName);
            $validated['photo_url'] = $photoName;
        }

        // Update the car with the validated data
        $car->update($validated);

        // Flash a success message to the session
        Session::flash('flash_message', 'Car has been updated!');

        // Redirect back to the form page
        return redirect()->back();
    }
    
    /* ======= Remove the specified resource from storage ======= */
    public function destroy(string $id) {
        // Find the car by its ID
        $car = Car::findOrFail($id);
        
        // Delete the car from the database
        $car->delete();
        
        // Flash a success message to the session
        Session::flash('flash_message', 'Car has been deleted!');
        
        // Redirect back to the form page
        return redirect()->back();
    }
}
