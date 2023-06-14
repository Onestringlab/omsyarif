<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowances extends Model
{
    use HasFactory;

    public $primaryKey  = 'id';
    protected $table = 'allowances';

    function months()
    {
        return $this->belongsTo('App\Models\Months', 'month_id');
    }
}
