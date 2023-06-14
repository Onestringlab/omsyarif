<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{

  use HasFactory;

  public $primaryKey  = 'id';
  protected $table = 'salaries';

  function months()
  {
    return $this->belongsTo('App\Models\Months', 'month_id');
  }
}
