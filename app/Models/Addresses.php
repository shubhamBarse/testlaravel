<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    use HasFactory;

    protected $fillable = [
        'city'
    ];

    /**
     * Define the relationship between an address and the student it belongs to.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}


