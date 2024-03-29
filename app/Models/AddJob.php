<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddJob extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
