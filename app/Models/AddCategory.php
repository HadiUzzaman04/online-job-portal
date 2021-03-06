<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCategory extends Model
{
    use HasFactory;
    protected $fillable=['category','category_details'];
    public function job(){
        return $this->belongsTo(AddCategory::class);
    }
}
