<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\WasteInventory;
use App\Models\RecycledWasteInventory;
use Illuminate\Support\Facades\Session;
use App\Models\Conversions;
use App\Enums\UserRole as RoleEnum;

class ConversionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $employeeData = $this->getEmployeeData();
        $conversions = Conversions::all();
        return view('conversion.index', compact('conversions', 'employeeData'));
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
        //
        //
        $employeeData = $this->getEmployeeData();
        $wasteInventories = WasteInventory::all();
        $recycledWasteInventories = RecycledWasteInventory::all();
        $employees = Employee::all();
        $operatorEmployees = Employee::where('role', RoleEnum::Operator)->get();


        return view('conversion.create', compact('operatorEmployees', 'wasteInventories', 'recycledWasteInventories', 'employeeData'));
        //return view('conversion.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
          'employee_id' => 'required|exists:employees,id',
           'recycled_waste_inventory_id' => 'required|exists:recycled_waste_inventories,id',
          'recycled_amount' => 'required|numeric|min:0',
          'date' => 'required|date',

        ]);


        $recycledWasteInventory = RecycledWasteInventory::findOrFail($request->recycled_waste_inventory_id);

        
        //obtenemos waste_inventory_id

        $wasteInventoryId = $recycledWasteInventory->waste_inventory_id;
        

        //obtenemos el WasteInventory
        $wasteInventory = WasteInventory::findOrFail($wasteInventoryId);
        //dd($wasteInventory);

        //verificamos si la cantidad es suficiente el el WasteInventory
        if ($wasteInventory->amount >= $request->recycled_amount) {
            // Crear la conversión
            $conversion = Conversions::create([
                'employee_id' => $request->employee_id,
                'waste_inventory_id' => $wasteInventoryId,
                'waste_amount' => $request->recycled_amount,
                'recycled_waste_inventory_id' => $request->recycled_waste_inventory_id,
                'recycled_amount' => $request->recycled_amount,
                'date' => $request->date,
            ]);
            //dd($conversion);



            // Actualizar los amounts en WasteInventory y RecycledWasteInventory
            $wasteInventory->decrement('amount', $request->recycled_amount);
            $recycledWasteInventory->increment('amount', $request->recycled_amount);

            return redirect()->route('conversion.create')->with('success', 'Conversión realizada exitosamente.');
        } else {
            return redirect()->route('conversion.create')->with('error', 'No hay suficiente cantidad en WasteInventory para realizar la conversión.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
