<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\WasteIncome;
use App\Models\WasteInventory;
use Illuminate\Http\Request;
use App\Enums\UserRole as RoleEnum;
use Illuminate\Support\Facades\Session;


class WasteIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeData = $this->getEmployeeData();
        $data['waste_incomes'] = WasteIncome::paginate(100);
        return view('waste-income.index', $data, compact('employeeData'));
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
        $employeeData = $this->getEmployeeData();
        //se obtienen todos los empleados del modelo Employee
        $wasteClassifierEmployees = Employee::where('role', RoleEnum::WasteClassifier)->get();
        $employees = Employee::all();
        //se obtienen todos los elementos del inventario
        $wasteInventories = WasteInventory::all();

        return view('waste-income.create', compact('wasteClassifierEmployees', 'wasteInventories', 'employeeData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            //'cost' => 'required||numeric',
            'amount' => 'required||integer',
            'date' => 'required||date',
            'employee_id' => 'required|exists:employees,id',
            'waste_inventory_id' => 'required|exists:waste_inventories,id',
        ]);

        //Esto es nuevo
        //Obtenemos el WasteInventory Correspondiente
        $wasteInventory= WasteInventory::findOrFail($data['waste_inventory_id']);

        //Calculamos el costo del ingreso basado en cantidad x el atributo cost del inventario
        $data['cost'] = $data['amount']* $wasteInventory->cost;


        //Ingreso de un nuevo residuo
        $wasteIncome = WasteIncome::create($data);

        //Actualizamos el atributo amount de wasteinventory
        //$wasteInventory = $wasteIncome->wasteInventory;
        $wasteInventory->amount += $wasteIncome->amount;
        $wasteInventory->save();

        return redirect()->route('waste-income.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
