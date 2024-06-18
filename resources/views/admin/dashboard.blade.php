@extends('layouts.index')

@section('title', 'User Profile')

@section('content')
<div class="access page">
    <div class="bg-white shadow pt-2">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </div>

    <div class="py-12">
        <div class="tables max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="tab-header text-center">
                <p>Cars</p>
                <h3>Car List</h3>
            </div>
            <div class="d-flex pb-4 justify-content-center">
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" data-toggle="modal" data-target="#addCarModal">
                    + Add Car
                </a>
            </div>
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg" style="scrollbar-width: none">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Car Name</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Year</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Color</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Type</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Seats</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Transmission</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Fuel Type</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Price /hour</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Notes</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Photo URL</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap"></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($cars as $car)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->name}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->year}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->color}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->type}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->seats}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->transmission}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->fuel_type}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rp{{ number_format($car->price) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$car->notes}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    <img src="{{ asset('assets/img/cars/'. ($car->photo_url ? $car->photo_url : 'default.png')) }}" alt="Car Photo">
                                </div>
                            </td>
                            <td class="whitespace-nowrap">
                                <div class="flex flex-column items-center w-24">
                                    <a href="#" class="dotbtn btn btn-warning text-white font-bold p-2 rounded-full mb-2" data-toggle="modal" data-target="#editCarModal{{$car->id}}"><span>edit</span></a>
                                    <a href="#" class="dotbtn btn btn-danger text-white font-bold p-2 rounded-full" data-toggle="modal" data-target="#deleteCarModal{{$car->id}}"><span>delete</span></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="tables max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="tab-header text-center">
                <p>Transactions</p>
                <h3>Transactions List</h3>
            </div>
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg" style="scrollbar-width: none">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Booker Name</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Car Name Booked</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Start Date</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">End Date</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Total Price</div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="whitespace-nowrap">Payment Status</div>
                            </th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($transactions as $trans)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ \App\Models\User::find($trans->customer_id)->name }}</div>
                            </td>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{\App\Models\Car::find($trans->car_id)->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ date('Y-m-d', strtotime($trans->start_date)) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ date('Y-m-d', strtotime($trans->end_date)) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rp{{number_format($trans->total_price)}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$trans->payment_status}}</div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Car Modal -->
<div class="modal fade" id="addCarModal" tabindex="-1" role="dialog" aria-labelledby="addCarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCarModalLabel">Add New Car</h5>
            </div>
            <div class="modal-body">
                <form id="addCarForm" action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Car Name</label>
                        <input type="text" class="form-control mb-2" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" class="form-control mb-2" id="brand" name="brand" required>
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" class="form-control mb-2" id="model" name="model" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" class="form-control mb-2" id="year" name="year" min="1900" max="2024" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control mb-2" id="color" name="color" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-select mb-2" id="type" name="type" required>
                            <option value="" selected disabled hidden>Choose an option</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="hatchback">Hatchback</option>
                            <option value="mpv">MPV</option>
                            <option value="truck">Truck</option>
                            <option value="van">Van</option>
                            <option value="coupe">Coupe</option>
                            <option value="convertible">Convertible</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="seats">Seats</label>
                        <input type="number" class="form-control mb-2" id="seats" name="seats" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <select class="form-select mb-2" id="transmission" name="transmission" required>
                            <option value="" selected disabled hidden>Choose an option</option>
                            <option value="manual">Manual</option>
                            <option value="automatic">Automatic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <select class="form-select mb-2" id="fuel_type" name="fuel_type" required>
                            <option value="" selected disabled hidden>Choose an option</option>
                            <option value="petrol">Petrol</option>
                            <option value="diesel">Diesel</option>
                            <option value="electric">Electric</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control mb-2" id="price" name="price" min="0" step="1.00" required>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <input type="text" class="form-control mb-2" id="notes" name="notes" rows="3"></input>
                    </div>
                    <div class="form-group">
                        <label for="photo_url">Photo URL</label>
                        <input type="file" class="form-control mb-2" id="photo_url" name="photo_url">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach ($cars as $car)
<!-- Edit Car Modal {{$car->id}}-->
<div class="modal fade" id="editCarModal{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="editCarModalLabel{{$car->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarModalLabel{{$car->id}}">Edit Car</h5>
            </div>
            <div class="modal-body">
                <form id="editCarForm{{$car->id}}" action="{{ route('car.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Car Name</label>
                        <input type="text" class="form-control mb-2" id="name" name="name" value="{{$car->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <input type="text" class="form-control mb-2" id="brand" name="brand" value="{{$car->brand}}" required>
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" class="form-control mb-2" id="model" name="model" value="{{$car->model}}" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" class="form-control mb-2" id="year" name="year" min="1900" max="2024" value="{{$car->year}}" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control mb-2" id="color" name="color" value="{{$car->color}}" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-select mb-2" id="type" name="type" required>
                            <option value="" selected disabled hidden>Choose an option</option>
                            <option value="sedan" {{$car->type == 'sedan' ? 'selected' : ''}}>Sedan</option>
                            <option value="suv" {{$car->type == 'suv' ? 'selected' : ''}}>SUV</option>
                            <option value="hatchback" {{$car->type == 'hatchback' ? 'selected' : ''}}>Hatchback</option>
                            <option value="mpv" {{$car->type == 'mpv' ? 'selected' : ''}}>MPV</option>
                            <option value="truck" {{$car->type == 'truck' ? 'selected' : ''}}>Truck</option>
                            <option value="van" {{$car->type == 'van' ? 'selected' : ''}}>Van</option>
                            <option value="coupe" {{$car->type == 'coupe' ? 'selected' : ''}}>Coupe</option>
                            <option value="convertible" {{$car->type == 'convertible' ? 'selected' : ''}}>Convertible</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="seats">Seats</label>
                        <input type="number" class="form-control mb-2" id="seats" name="seats" min="1" value="{{$car->seats}}" required>
                    </div>
                    <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <select class="form-select mb-2" id="transmission" name="transmission" required>
                            <option value="" selected disabled hidden>Choose an option</option>
                            <option value="manual" {{$car->transmission == 'manual' ? 'selected' : ''}}>Manual</option>
                            <option value="automatic" {{$car->transmission == 'automatic' ? 'selected' : ''}}>Automatic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <select class="form-select mb-2" id="fuel_type" name="fuel_type" required>
                            <option value="" selected disabled hidden>Choose an option</option>
                            <option value="petrol" {{$car->fuel_type == 'petrol' ? 'selected' : ''}}>Petrol</option>
                            <option value="diesel" {{$car->fuel_type == 'diesel' ? 'selected' : ''}}>Diesel</option>
                            <option value="electric" {{$car->fuel_type == 'electric' ? 'selected' : ''}}>Electric</option>
                            <option value="hybrid" {{$car->fuel_type == 'hybrid' ? 'selected' : ''}}>Hybrid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control mb-2" id="price" name="price" min="0" step="1.00" value="{{$car->price}}" required>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <input type="text" class="form-control mb-2" id="notes" name="notes" value="{{$car->notes}}"></input>
                    </div>
                    <div class="form-group">
                        <label for="photo_url">Photo URL</label>
                        <input type="file" class="form-control mb-2" id="photo_url" name="photo_url">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Car Modal {{$car->id}}-->
<div class="modal fade" id="deleteCarModal{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteCarModalLabel{{$car->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCarModalLabel">Delete Car</h5>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this car?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteCarForm" action="{{ route('car.destroy', $car->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection