<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'description',
        'discount',
        'price',
        'category_id',
        'brand_id',
        'quantity',
    ];

    // Relationship to Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Corrected relationship to Brand (singular)
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Relationship to Child Images
    public function childImage()
    {
        return $this->hasMany(ChildrenImageProduct::class);
    }





}
