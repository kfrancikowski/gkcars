<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rental extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'customer_id',
        'car_id',
        'rent_start_date',
        'rent_end_date'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}