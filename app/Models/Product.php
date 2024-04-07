<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;
    protected $table="products";
    protected $primaryKey="id";
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
