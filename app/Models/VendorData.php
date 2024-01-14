<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorData extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'uom',
        'name',
        'unit_count',
        'cost',
        'projected_price',
        'min_qty',
        'remark',
        'image',
    ];

    protected $appends = [
        'uom_name',
        'img_url'
    ];

    public function getVendorData($product_id)
    {
        return $this->where('product_id', $product_id)->get();
    }

    public function uomR()
    {
        return $this->hasOne(UnitOfMeasure::class, 'id', 'uom');
    }

    public function getUomNameAttribute()
    {
        return $this->uomR ? $this->uomR->name : 'N/A';
    }

    public function img()
    {
        return $this->hasOne(Image::class, 'id', 'image');
    }

    public function getImgUrlAttribute()
    {
        return $this->img ? $this->img->name : 'N/A';
    }
}