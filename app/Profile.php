<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile\kJ6EfFLgNjiqEjZKVLIghcUMYM4rDVMNtpCogeIy.jpeg';

        return '/storage/' . $imagePath;
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
