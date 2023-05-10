<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'year_of_creation',
        'value',
        'gender',
    ];


    public function people()
    {
        //return $this->hasOne('Peoples','id','people_id');
        return $this->hasOne('People');

    }
}
