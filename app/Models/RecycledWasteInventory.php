<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Conversions;
use App\Models\Sells;

class RecycledWasteInventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'recycled_price',
        //'employee_id',
        'waste_inventory_id'

    ];

    public function conversions()
    {
        return $this->hasMany(Conversions::class);
    }

    public function sells()
    {
        return $this->hasMany(Sells::class);
    }   

    public function wasteInventory()
    {
        return $this->belongsTo(WasteInventory::class);
    }

   public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    
    
}
