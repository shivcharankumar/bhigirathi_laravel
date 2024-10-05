<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "customers";
    protected $primaryKey = "customers_id";

    ////Mutator 18Video
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    ////Accessor 19video

    public function getDobAttribute($value){
        return date('d-m-y',strtotime($value));
    }
}
