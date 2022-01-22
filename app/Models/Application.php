<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'name', 'email', 'phone', 'cv'];

    public function job()
    {
        return $this->belongsTo(AddJob::class);
    }
}
