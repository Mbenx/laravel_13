<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use App\Archive;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inventory::all();
        return view('inventory.home',[
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
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $inventory = Inventory::create([
            'name' => $req->name,
            'detail' => $req->detail
        ]);

        // $insertedId = $inventory->id;
        // dd($insertedId);

        $last_inventory = Inventory::where('name', $req->name)->get()->last();

        // dd($last_inventory);
        Archive::create([
            'inventory_id' => $last_inventory->id,
            'name' => $req->archive_name,
            'detail' => $req->archive_detail
        ]);
        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::find($id);
        return view('inventory.show',[
            "data" => $inventory
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
        $inventory = Inventory::find($id);
        $archive = Archive::where('inventory_id','=', $id)->first();
        return view('inventory.edit',[
            "data" => $inventory,
            "archive" => $archive
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
        Inventory::where('id','=',$req->id)->update([
            'name' => $req->name,
            'detail' => $req->detail
        ]);

        Archive::where('id','=',$req->archive_id)->update([
            'name' => $req->archive_name,
            'detail' => $req->archive_detail
        ]);

        return redirect('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inventory::where('id', '=', $id)->delete();
        Archive::where('inventory_id','=',$id)->delete();

        return redirect("/inventory");
    }
}
