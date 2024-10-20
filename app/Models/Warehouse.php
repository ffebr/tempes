<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouses';

    protected $fillable = ['total_cells', 'empty_cells', 'max_capacity'];

    public function storages()
    {
        return $this->hasMany(ProductStorage::class);
    }
}
