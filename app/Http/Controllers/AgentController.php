<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  AgentController extends Controller
{

    //create new agent
    public function createAgent(Request $request)
    {
        $agent = Agent::create($request->all());
        return response()->json($agent);
    }

    //update agent details

    public function updateAgent(Request $request, $id)
    {
        $agent = Agent::find($id);
        $agent->first_name = $request->input('first_name');
        $agent->last_name =  $request->input('last_name');
        $agent->email_address = $request->input('email_address');
        $agent->save();
        return response()->json($agent);
    }


    //view agent
    public function viewAgent($id)
    {
        $agent =  Agent::find($id);
        return response()->json($agent);
    }


    //delete agent
    public function deleteAgent($id)
    {
        $agent =  Agent::find($id);
        $agent->delete();

        return response()->json('Removed successfully');
    }

    //list agents
    public function index()
    {
        $agents = Agent::all();
        foreach ($agents as $agent) {
           $agent->category;
           $agent->office;
        }
        return response()->json($agent);
    }
}
