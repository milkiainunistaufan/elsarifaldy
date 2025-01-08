<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'name_bank', 'account_number'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
