<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  AddressController extends Controller
{

    //create address
    public function createAddress(Request $request)
    {
        $address = Address::create($request->all());
        return response()->json($address);
    }

    //update address details

    public function updateAddress(Request $request, $id)
    {
        $address = Address::find($id);
        $address->name = $request->input('street');
        $address->name = $request->input('number');
        $address->name = $request->input('zip_code');
        $address->name = $request->input('office_id');
        $address->save();
        return response()->json($address);
    }


    //view cities
    public function viewAddress($id)
    {
        $address =  Address::find($id);
        return response()->json($address);
    }


    //delete cities
    public function deleteAddress($id)
    {
        $address =  Address::find($id);
        $address->delete();

        return response()->json('Removed successfully');
    }

    //list cities
    public function index()
    {
        $address = Address::all();
        return response()->json($address);
    }
}
