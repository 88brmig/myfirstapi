<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  ZipController extends Controller
{

    //create city
    public function createZip(Request $request)
    {
        $zip = ZipCode::create($request->all());
        return response()->json($zip);
    }

    //update city details

    public function updateZip(Request $request, $id)
    {
        $zip = ZipCode::find($id);
        $zip->zip_code = $request->input('zip_code');
        $zip->city_id = $request->input('city_id');
        $zip->save();
        return response()->json($zip);
    }


    //view cities
    public function viewZip($id)
    {
        $zip =  ZipCode::find($id);
        return response()->json($zip);
    }


    //delete cities
    public function deleteZip($id)
    {
        $zip = ZipCode::find($id);
        $zip->delete();

        return response()->json('Removed successfully');
    }

    //list cities
    public function index()
    {
        $zipCode = ZipCode::all();
        foreach ($zipCode as $zipCode) {
           $zipCode->offices;
        }
        return response()->json($zipCode);
    }
}
