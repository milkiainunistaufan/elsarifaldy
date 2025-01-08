<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function chat()
    {
        return $this->hasMany(Chat::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function guest()
    {
        return $this->hasMany(Guest::class);
    }

    public function image_groom_path()
    {
        if($this->image_groom){
            return asset($this->image_groom);
        }else{
            return 'https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_640.png';
        }
    }
    public function image_bride_path()
    {
        if($this->image_bride){
            return asset($this->image_bride);
        }else{
            return 'https://cdn.pixabay.com/photo/2012/04/13/21/07/user-33638_640.png';
        }
    }
}
