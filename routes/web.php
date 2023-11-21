<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConversionsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RecycledWasteInventoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WasteIncomeController;
use App\Http\Controllers\WasteInventoryController;
use App\Http\Controllers\SellsController;


//use App\Models\WasteInventory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    // all the routes that need to be shown when the user is not logged in
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('root');

    Route::post('/login', [AuthController::class, 'login'])->name('login');
    //Route::resource('/employee', EmployeeController::class);


});

Route::middleware(['auth'])->group(function () {
    // all the routes that need to be shown when the user is logged in

    // redirection to the home page
    Route::get('/home', [HomeController::class,'index'])->name('home');
    // employee logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    // employee crud routing
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/waste-inventory', WasteInventoryController::class); 
    Route::resource('/waste-income', WasteIncomeController::class);
    Route::resource('/recycled-waste-inventory', RecycledWasteInventoryController::class);
    Route::resource('/conversion',ConversionsController::class);
    Route::resource('/sell', SellsController::class);
    Route::get('report/residuos-mas-ingresados', [ReportController::class, 'residuosMasIngresados'])->name('report.residuosMasIngresados');
    Route::get('report/residuos-mas-reciclados', [ReportController::class, 'residuosMasReciclados'])->name('report.residuosMasReciclados');
    Route::get('report/residuos-reciclados-mas-vendidos', [ReportController::class, 'residuosRecicladosMasVendidos'])->name('report.residuosRecicladosMasVendidos');
    Route::get('report/usuario-mayor-ingreso-residuos', [ReportController::class, 'usuarioMayorIngresoResiduos'])->name('report.usuarioMayorIngresoResiduos');
    Route::get('report/usuario-mas-conversiones', [ReportController::class, 'usuarioMayorConversiones'])->name('report.usuarioMayorConversiones');
    Route::get('report/usuario-mayor-ventas', [ReportController::class, 'usuarioMayorIngresos'])->name('report.usuarioMayorIngresos');

    //Route::get('report/usuario-mayor-ventas', 'ReportController@usuarioMayorVentas')->name('report.usuarioMayorVentas');
    //Route::get('report/usuario-mayor-ingresos', 'ReportController@usuarioMayorIngresos')->name('report.usuarioMayorIngresos');






    
    
    
});
