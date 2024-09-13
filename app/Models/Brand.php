<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model // Model should be singular: Brand
{
    use HasFactory;

    protected $table = 'brands'; // Table name can remain plural

    protected $fillable = [
        'name'
    ];

    // Relationship to Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
