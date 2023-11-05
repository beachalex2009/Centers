<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function company()
    {
        return $this->belongsTo(company::class);
    }

    public function employee()

    {
        return $this->hasMany(employee::class);
    }
    public function class_rooms()
    {
        return $this->hasMany(ClassRoom::class);
    }
}
