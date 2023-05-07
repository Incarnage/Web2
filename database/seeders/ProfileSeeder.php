<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(
            [
                'user_id'=>1,
                'img1'=>"hanni1.png",
                'img2'=>"hanni2.jpg",
                'img3'=>"hanni3.jpg",
                'nickname'=>"admin",
                'bio'=>"Test Bio",
                'course'=>"BSIT",
                'school'=>"Ateneo De Naga University",
                'age'=>19,
                'height'=>"5'11",
                'hobbies1'=>"Cooking",
                'hobbies2'=>"Reading",
                'hobbies3'=>"Gaming",
                'interest1'=>"Cosplay",
                'interest2'=>"Origami",
                'interest3'=>"Science",
            ]
        );

    }
}
