<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['name', 'established_date', 'industry'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
