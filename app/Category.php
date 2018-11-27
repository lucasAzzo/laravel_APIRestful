<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;
use App\Transformers\CategoryTransformer;

class Category extends Model
{
    use SoftDeletes;

    public $transformer = CategoryTransformer::class;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $dates = ['deleted_at'];

    protected $hidden = [
        'pivot'
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
