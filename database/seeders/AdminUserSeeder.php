<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Validation\Rules\Password;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = config('admin.email');
        $password = config('admin.password');
        if (! $email || ! $password || User::where('email', $email)->exists()) {
            return;
        }
        validator(['email' => $email, 'password' => $password], ['email' => ['required', 'email'], 'password' => ['required', Password::min(12)->letters()->numbers()]])->validate();
        $user = new User(['name' => config('admin.name'), 'email' => $email, 'password' => $password]);
        $user->is_admin = true;
        $user->save();
    }
}
