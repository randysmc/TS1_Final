<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\WasteInventory;
use App\Models\RecycledWasteInventory;
use Illuminate\Support\Facades\Session;

class ConversionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $employees = Employee::all();
        return view('conversion.create', compact('employees', 'wasteInventories', 'employeeData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([]);

        RecycledWasteInventory::create([
            'name' => $request->input('new_element_name'),
            'amount' => $request->input('new_element_amount'),
        ]);
        return redirect()->route('conversion.create')->with('success', 'Elemento reciclado creado exitosamente.');
    }

    private function getEmployeeData()
    {
        $employeeData = Session::get('employeeData');
        return $employeeData;
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
