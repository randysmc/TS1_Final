<?php

namespace App\Http\Controllers;

use App\Models\RecycledWasteInventory;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Sells;
use Illuminate\Support\Facades\Session;

class SellsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sells = Sells::with(['employee', 'recycledWasteInventory'])->paginate(10);

        return view('sell.index', compact('sells'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        ///ESTA ES MI FUNCION DE VENTAS, NO TOCAR
        $employeeData = $this->getEmployeeData();
        $recycledWasteInventories = RecycledWasteInventory::all();
        $employees = Employee::all();

        return view('sell.create', compact('recycledWasteInventories', 'employees', 'employeeData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
            $data = $request->validate([
                'amount' => 'required|integer',
                //'sell_price' => 'required|numeric',
                'employee_id' => 'required',
                'recycled_waste_inventory_id' => 'required',
                'date' => 'required|date',
            ]);
    
            $recycledWasteInventory = RecycledWasteInventory::find($data['recycled_waste_inventory_id']);
    
            if ($recycledWasteInventory && $recycledWasteInventory->amount >= $data['amount']) {
                $sell = new Sells([
                    'amount' => $data['amount'],
                    'sell_price' => $recycledWasteInventory->recycled_price,
                    //'sell_price' => $data['sell_price'],
                    'employee_id' => $data['employee_id'],
                    'recycled_waste_inventory_id' => $data['recycled_waste_inventory_id'],
                    'date' => $data['date'],
                ]);
    
                $recycledWasteInventory->decrement('amount', $sell->amount);
    
                $sell->save();
    
                return redirect()->route('sell.index')->with('success', 'Venta registrada exitosamente');
            } else {
                return redirect()->back()->with('error', 'Inventario Insuficiente');
            }

    }

    private function getEmployeeData()
    {
        $employeeData = Session::get('employeeData');
        return $employeeData;
    }

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
