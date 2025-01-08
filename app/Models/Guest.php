<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'phone_number'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
