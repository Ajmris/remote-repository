<?php
namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=['name','price','description',];

    public function categories(){
        return $this->belongsTo(Categories::class,'category_id', 'id');
    }
}