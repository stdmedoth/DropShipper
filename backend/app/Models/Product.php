<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    public $timestamps = true;
    use HasFactory;

    protected $with = [
        "category",
        "user",
        "provider_integration",
    ];

    protected $fillable = [
        "title",
        "description",
        "height",
        "length",
        "width",
        "price",
        "weight",
        "sku",
        "stock",
        "category_id",
        "provider_integration_id",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function provider_integration()
    {
        return $this->belongsTo(Integration::class, 'provider_integration_id');
    }
}
