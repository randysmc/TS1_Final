<?php

namespace App\Http\Controllers;

use App\Models\WasteIncome;
use App\Models\Conversions;
use App\Models\Sells;
use App\Models\Employee;



use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function index()
    {
        $employeeData = $this->getEmployeeData();
        
        return view('reports.index', compact('employeeData'));
    }

    private function getEmployeeData()
    {
        $employeeData = Session::get('employeeData');
        return $employeeData;
    }


    public function residuosMasIngresados()
    {
      $employeeData = $this->getEmployeeData();

    $report = WasteIncome::groupBy('waste_inventory_id')
      ->selectRaw('waste_inventory_id, SUM(amount) as total_amount')
       ->orderByDesc('total_amount')
       ->with('wasteInventory')
       ->get();

    return view('reports.residuos-mas-ingresados', compact('report', 'employeeData'));
     }






    public function residuosMasReciclados()
    {
        $employeeData = $this->getEmployeeData();

        $report = Conversions::groupBy('recycled_waste_inventory_id')
            ->selectRaw('recycled_waste_inventory_id, SUM(recycled_amount) as total_recycled_amount')
            ->orderByDesc('total_recycled_amount')
            ->with('recycledWasteInventory')
            ->get();

        return view('reports.residuos-mas-reciclado', compact('report', 'employeeData'));
    }




    public function residuosRecicladosMasVendidos()
    {
        $employeeData = $this->getEmployeeData();

        $report = Sells::groupBy('recycled_waste_inventory_id')
            ->selectRaw('recycled_waste_inventory_id, SUM(amount) as total_amount, SUM(cost) as total_money')
            ->orderByDesc('total_amount')
            ->with('recycledWasteInventory')
            ->get();

        return view('reports.residuos-reciclados-mas-vendidos', compact('report', 'employeeData'));
    }


    public function usuarioMayorIngresoResiduos()
    {
        $employeeData = $this->getEmployeeData();

        $report = WasteIncome::groupBy('employee_id')
            ->selectRaw('employee_id, SUM(amount) as total_ingresado')
            ->orderByDesc('total_ingresado')
            ->with('employee')
            ->get();

        return view('reports.usuario-mayor-ingreso-residuos', compact('report', 'employeeData'));
    }

    public function usuarioMayorConversiones()
    {
        $employeeData = $this->getEmployeeData();

        $report = Conversions::groupBy('employee_id')
            ->selectRaw('employee_id, SUM(recycled_amount) as total_reciclado')
            ->orderByDesc('total_reciclado')
            ->with('employee')
            ->get();

        return view('reports.usuario-mas-conversiones', compact('report', 'employeeData'));
    }

    public function usuarioMayorIngresos()
    {
        $employeeData = $this->getEmployeeData();

        $reportVentas = Sells::selectRaw('employee_id, COUNT(id) as total_ventas')
            ->groupBy('employee_id')
            ->orderByDesc('total_ventas')
            ->with(['employee'])
            ->get();

        $reportDinero = Sells::selectRaw('employee_id, SUM(cost) as total_dinero_vendido')
            ->groupBy('employee_id')
            ->with(['employee'])
            ->get();

        return view('reports.usuario-mayor-ventas', compact('reportVentas', 'reportDinero', 'employeeData'));
    }
}
