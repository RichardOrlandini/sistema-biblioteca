<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = "loans";

    protected $fillable = [
        'loan_date',
        'return_date',
        'book_id',
        'people_id'
    ];
    

    /*
    public function setDataEmprestimoAttribute($val) {
    $this->attributes['data_emprestimo'] = implode('-', array_reverse(explode('/', $val)));
    }

    public function getDataEmprestimoAttribute($val) {
    return implode('/', array_reverse(explode('-', $val)));
    }

    public function setDataDevolucaoAttribute($val) {
    $this->attributes['data_devolucao'] = implode('-', array_reverse(explode('/', $val)));
    }

    public function getDataDevolucaoAttribute($val) {
    return implode('/', array_reverse(explode('-', $val)));
    }
    */

}
