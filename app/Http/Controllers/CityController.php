<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  CityController extends Controller
{

    //create city
    public function createCity(Request $request)
    {
        $city = City::create($request->all());
        return response()->json($city);
    }

    //update city details

    public function updateCity(Request $request, $id)
    {
        $city = City::find($id);
        $city->name = $request->input('name');
        $city->name = $request->input('state');
        $city->save();
        return response()->json($city);
    }


    //view cities
    public function viewCity($id)
    {
        $city =  City::find($id);
        return response()->json($city);
    }


    //delete cities
    public function deleteCity($id)
    {
        $city =  City::find($id);
        $city->delete();

        return response()->json('Removed successfully');
    }

    //list cities
    public function index()
    {
        $cities = City::all();
        foreach ($cities as $city) {
           $city->zipCodes;
        }
        return response()->json($city);
        
    }
}
