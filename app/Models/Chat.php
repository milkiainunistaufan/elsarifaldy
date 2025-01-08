<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable=['name', 'chat', 'invitation_id'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
