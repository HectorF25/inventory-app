<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetails extends Model
{
    use HasFactory;
    function product(){
        return $this->belongsTo(Product::class);
    }
    function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
