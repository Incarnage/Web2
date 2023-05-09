<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "user_id",
        "img1",
        "nickname",
        "bio",
        "course",
        "school",
        "age",
        "height",
        "hobbies1",
        "hobbies2",
        "hobbies3",
        "interest1",
        "interest2",
        "interest3",
    ];

    

}
