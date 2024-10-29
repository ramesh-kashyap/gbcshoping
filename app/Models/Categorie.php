<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
         'categoryname',' status',' image',

    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id'); // Adjust 'category_id' if needed
    }
}
