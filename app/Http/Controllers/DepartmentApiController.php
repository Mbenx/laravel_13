<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentApiController extends Controller
{
    public function index(){
        $data = Department::all();
        // return response()->json($data);
        return response()->json([
            'code' => 200,
            'message' => 'success!',
            'value' => $data
        ]);

    }

    public function store(Request $request)
    {
        // $dapartment = new Department;

        // $dapartment->name = $request->name;
        // $dapartment->save();

        Department::create([
            'name' => $request->name
        ]);

        return response()->json([
            'code' => 201,
            'message' => 'success!'
        ]);
    }
}
