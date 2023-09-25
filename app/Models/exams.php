<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exams extends Model
{
    use HasFactory;
    protected $table='exams';
    protected $fillable=[
        'date',
        'niveau',
        'email',
        'file',
        'description',
    ];
}
