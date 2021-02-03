<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  CategoryController extends Controller
{

    //create category
    public function createCategory(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category);
    }

    //update category details

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category = $request->input('category');
        $category->save();
        return response()->json($category);
    }


    //view categories
    public function viewCategory($id)
    {
        $category =  Category::find($id);
        return response()->json($category);
    }


    //delete categories
    public function deleteCategory($id)
    {
        $category =  Category::find($id);
        $category->delete();

        return response()->json('Removed successfully');
    }

    //list categories
    public function index()
    {
        $category = Category::all();
        foreach ($category as $category) {
           $category->agents;
        }
        return response()->json($category);
    }
}
