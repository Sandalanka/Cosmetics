<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use  HasFactory;
    
    protected $fillable = [
        'product_id',
        'product_name',
        'product_category',
        'product_description',
        'directions',
        'price',
        'in_stock',
        'product_image'
    ];
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    public static function boot()
    {
        parent::boot();

        // Generate product_id on creating
        static::creating(function ($product) {
            $latest = self::latest('id')->first();
            $nextId = $latest ? $latest->id + 1 : 1;
            $product->product_id = 'P' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
}
