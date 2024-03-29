<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $guarded = ['id'];

    use HasFactory;
    public function user(){
        return $this->hasMany(User::class);
    }
}
