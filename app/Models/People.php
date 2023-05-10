<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];

    protected $table = "peoples";

    public function hasBook(){
        return $this->hasMany(Book::class, 'book_id');
    }

    public function loans() {
        return $this->hasMany(Loan::class, "loan_id");
    }
}
