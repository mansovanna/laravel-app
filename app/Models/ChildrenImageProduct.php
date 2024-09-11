<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildrenImageProduct extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'children_image_products';

    protected $fillable = [
        'image_url',
        'product_id',
    ];

    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
