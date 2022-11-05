<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'service_ID';
    
    protected $fillable = [
        'service_title',
        'service_desc',
        'serivce_price',
        'serice_provider',
        'service_type'
    ];

}
