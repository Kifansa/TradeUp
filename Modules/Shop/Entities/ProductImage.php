<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'shop_product_images';
    protected $fillable = [
        'product_id',
        'name',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\ProductImageFactory::new();
    }
}
