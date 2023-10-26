<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
    ];
    public function service_cat(){
        return $this->belongsTo(ServiceCat::class, 'category_id');
    } 
        
    
}
