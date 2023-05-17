<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class certificates extends Model
{
    protected $fillable = ['name'];
   

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
