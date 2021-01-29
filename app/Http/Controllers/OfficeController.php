<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  OfficeController extends Controller
{

    //create office
    public function createOffice(Request $request)
    {
        $office = Office::create($request->all());
        return response()->json($office);
    }

    //update office details

    public function updateOffice(Request $request, $id)
    {
        $office = Office::find($id);
        $office->name = $request->input('name');
        $office->save();
        return response()->json($office);
    }


    //view offices
    public function viewOffice($id)
    {
        $office =  Office::find($id);
        return response()->json($office);
    }


    //delete offices
    public function deleteOffice($id)
    {
        $office =  Office::find($id);
        $office->delete();

        return response()->json('Removed successfully');
    }

    //list offices
    public function index()
    {
        $office = Office::all();
        return response()->json($office);
    }
}
