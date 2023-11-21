<?php

namespace App\Http\Controllers;

use App\Models\WasteIncome;
use App\Models\Conversions;


use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    private function getEmployeeData(){
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

    public function residuoMasReciclado()
    {
        $report = Conversions::groupBy('recycled_waste_inventory_id')
        ->selectRaw('recycled_waste_inventory_id, SUM(recycled_amount) as total_recycled_amount')
        ->orderByDesc('total_recycled_amount')
        ->with('recycledWasteInventory')
        ->get();
    }

    public function residuoMasVendido()
    {

    }

    public function usuarioMayorIngresoResiduos(){

    }

    public function usuarioMayorReciclajes(){

    }

    public function usuarioMayorVentas(){

    }

    public function usuarioMayorIngresos(){

    }



}