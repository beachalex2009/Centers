<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compny extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Manger()
    {
        return $this->hasOne(manager::class);
    }

    public function Branches()

    {
        return $this->hasMany(branch::class);
    }
}
