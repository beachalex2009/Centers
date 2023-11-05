<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function branches()
    {
        return $this->belongsTo(branch::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
