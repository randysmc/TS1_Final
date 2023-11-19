<?php

namespace App\Http\Controllers;

use App\Models\RecycledWasteInventory;
use App\Models\WasteInventory;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Session;


class RecycledWasteInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$employeeData = $this->getEmployeeData();
        //$employees = Employee::all(); 
        $recycledWasteInventories = RecycledWasteInventory::all();
        return view('recycled-waste-inventory.index', compact('recycledWasteInventories'));
    }

    private function getEmployeeData()
    {
        $employeeData = Session::get('employeeData');
        return $employeeData;
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wasteInventories = WasteInventory::all();
        return view('recycled-waste-inventory.form', compact('wasteInventories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //corregir el formulario::
            $request->validate([
                //'waste_inventory_id' => 'required|exists:waste_inventories,id'
            ]);

            $wasteInventory = WasteInventory::findOrFail($request->input('waste_inventory_id'));

            //Crear un nuevo elemento
            $recycledWasteInventory = RecycledWasteInventory::create([
                'name' => $wasteInventory->name . '_Reciclado',
                'amount' => 0,
                'recycled_price' => $wasteInventory->cost * 2,
                //'waste_inventory_id' => $wasteInventory->id,
            ]);

            return redirect()->route('recycled-waste-inventory.index');

        

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
