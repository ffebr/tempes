<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_category',
        'price',
        'actual',
        'date',
        'supplier_id',
        'product_storage_id',
        'defect'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function productStorage()
    {
        return $this->belongsTo(ProductStorage::class, 'product_storage_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }

    public function salesItems()
    {
        return $this->hasMany(SalesItem::class, 'product_id');
    }
}
