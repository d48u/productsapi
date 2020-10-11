<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price'];

    /**
     * Get the price.
     *
     * @param integer $value
     * @return float
     */
    public function getPriceAttribute($value)
    {
        return $value / 1000000;
    }

    /**
     * Set the price.
     *
     * @param float $value
     * @return void
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = $value * 1000000;
    }
}
