<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        /*$vehicles =Vehicle::select('name as NOMBRE','brand as MARCA','model as MODELO')
                ->where('brand','TOYOTA')->get();*/
        return View('admin.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create'); #ubicACION de vista create
    }

    /**
     * Store a newly created resource in storage. GUARDAR
     */
    public function store(Request $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');

        // return $request;
    }

    /**
     * Display the specified resource. EDITAR
     */
    public function show(string $id)
    {
        $vehicle = Vehicle::find($id);
        return view('admin.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicle::find($id);
        return view('admin.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->update($request->all());
        return redirect()->route('vehicles.show', $vehicle);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::find($id);
        
        if ($vehicle) {
            $vehicle->delete();
            return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
        }
    
        return redirect()->route('vehicles.index')->with('error', 'Vehicle not found.');
    }
}
