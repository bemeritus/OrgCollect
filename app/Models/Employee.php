<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['organization_id', 'first_name', 'last_name', 'date_of_birth', 
        'adress', 'position', 'salary', 'hire_date'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
