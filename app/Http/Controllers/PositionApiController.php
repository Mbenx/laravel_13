<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionApiController extends Controller
{
    public function index(){
        $data = Position::all();

        return response()->json([
            'code' => 200,
            'message' => 'success!',
            'value' => $data
        ]);
    }

    public function create(Request $request){
        Position::create([
            'name' => $request->name,
            'department_id' => $request->department_id
        ]);

        return response()->json([
            'code' => 201,
            'message' => 'Created!'
        ]);
    }

    public function edit(Request $request, $id){
        Position::where('id','=', $id)->update([
            'name' => $request->name,
            'department_id' => $request->department_id
        ]);

        return response()->json([
            'code' => 201,
            'message' => 'Updated!'
        ]);
    }

    public function delete($id){
        Position::destroy($id);

        return response()->json([
            'code' => 200,
            'message' => 'Deleted!'
        ]);
    }

}
