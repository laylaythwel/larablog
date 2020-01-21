<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Profile;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	"name" => "laylay",
        	"email" => "laylaythwe89@gmail.com",
        	"password" => Hash::make("admin123"),
            "is_admin" => '1'
        ]);

        Profile::create([
            "user_id" => '1',
            "profile_image" => 'default.png',
            "about" => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            "facebook_link" => 'www.facebook.com',
            "youtube_link" => 'www.youtube.com',
        ]);
    }
}
