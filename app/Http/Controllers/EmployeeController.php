<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Position;
use App\Employee;
use File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Employee::all();
        $data = Employee::paginate(5);
        return view('employee.home',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all();
        return view('employee.create',[
            'position'=>$position
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {


        $req->validate([
            'name' => 'required|unique:App\Employee,name|min:5',
            'alamat' => 'required|min:15|max:250',
            'phone' => 'required|unique:App\Employee,phone',
            'email' => 'required|email:rfc,dns'
        ]);

        // penamaan file
        $filename = 'employee-'.$req->name.'-'.$req->id.time().'.png';

        // dd($filename);

        // store ke server
        $req->file('picture')->storeAs('public/employee',$filename);

        Employee::create([
            'name' => $req->name,
            'alamat' => $req->alamat,
            'phone' => $req->phone,
            'email' => $req->email,
            'position_id' => $req->position_id,
            'picture' => $filename,
        ]);

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employee::where('id','=',$id)->first();
        return view('employee.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::where('id','=',$id)->first();
        $position = Position::all();
        return view('employee.edit', [
            'data' => $data,
            'position'=>$position
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {

        $filename = 'employee-'.$req->name.'-'.$req->id.time().'-'.$req->file('picture')->getClientOriginalName();
        dd($filename);

        if ($req->picture) {
            // penamaan file
            $filename = 'employee-'.$req->name.'-'.$req->id.time().'.png';

            // store ke server
            $req->file('picture')->storeAs('public/employee',$filename);

            $employee = Employee::where('id','=',$req->id)->first();
            Storage::delete('public/employee/'. $employee->picture);

            Employee::where('id','=', $req->id)->update([
                'name' => $req->name,
                'alamat' => $req->alamat,
                'phone' => $req->phone,
                'email' => $req->email,
                'position_id' => $req->position_id,
                'picture' => $filename,
            ]);
        } else {
            Employee::where('id','=', $req->id)->update([
                'name' => $req->name,
                'alamat' => $req->alamat,
                'phone' => $req->phone,
                'email' => $req->email,
                'position_id' => $req->position_id,
            ]);
        }



        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employee::find($id);

        // menggunakan softdelete
        // $data->delete();

        // menggunakan softdelete namun data di paksa di buang
        $employee = Employee::where('id','=',$id)->first();
        Storage::delete('public/employee/'. $employee->picture);
        $data->forceDelete();



        return redirect('/employee');
    }
}
