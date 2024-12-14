<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id'; 

    protected $fillable = ['name', 'status', 'parent_id'];

    
    public function parent()
    {
        return $this->belongsTo(Categorie::class, 'parent_id', 'category_id');
    }

    public function children()
    {
        return $this->hasMany(Categorie::class, 'parent_id', 'category_id');
    }

}


