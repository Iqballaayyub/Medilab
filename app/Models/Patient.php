<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'agreement', 'phone', 'disease'
    ];

    public function news(){
        return $this->hasMany(Patient::class);
    }
}
