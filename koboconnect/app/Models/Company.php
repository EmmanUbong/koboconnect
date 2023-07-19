<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];
// doing relationship
//     public function userBiodata()
// {
//     return $this->hasOne(UserBiodata::class);
// }
// public function user()
//     {
//         return $this->belongsTo(User::class);
//     }
    // public function userBiodata()
    // {
    //     return $this->hasOne(UserBiodata::class);
    // }

// public function ReviewData()
// {
// return $this->hasMany( review_ratings::class,'post_id');
// }

}
