<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'123456789',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'user_type'=>'admin',
            'image_path'=>asset('admin/profile_image/2.jpg'),
        ]);

        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'1111111111',
            'password'=>'12345678',
            'user_type'=>'معلم',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'2222222222',
            'password'=>'12345678',
            'user_type'=>'طالب',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'3333333333',
            'password'=>'12345678',
            'user_type'=>'اداري',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'4444444444',
            'password'=>'12345678',
            'user_type'=>'المدير',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'5555555555',
            'password'=>'12345678',
            'user_type'=>'التوجيه الطلابي',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'6666666666',
            'password'=>Hash::make('12345678'),
            'user_type'=>'مصادر التعلم',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'7777777777',
            'password'=>'12345678',
            'user_type'=>'الامن والسلامه',
        ]);
        $user = User::create([
            'name'=>'Ahmed',
            'national_id'=>'8888888888',
            'password'=>12345678,
            'user_type'=>'الصحه المدرسيه',
        ]);

        
    }
}
