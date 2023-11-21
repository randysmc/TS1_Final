<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\RecycledWasteInventory;

class Sells extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'sell_price',
        'cost',
        'date',
        'employee_id',
        'recycled_waste_inventory_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function recycledWasteInventory()
    {
        return $this->belongsTo(RecycledWasteInventory::class);
    }
}
