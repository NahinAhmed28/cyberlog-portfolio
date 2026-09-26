<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create {email?} {--name= : Administrator display name}';

    protected $description = 'Create an administrator using a securely prompted password';

    public function handle(): int
    {
        $email = $this->argument('email') ?: $this->ask('Administrator email');
        $name = $this->option('name') ?: $this->ask('Administrator name');
        $password = $this->secret('Password (at least 12 characters, letters and numbers)');
        $confirmation = $this->secret('Confirm password');
        $validator = Validator::make(compact('email', 'name', 'password') + ['password_confirmation' => $confirmation], [
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Password::min(12)->letters()->numbers()],
        ]);
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return self::FAILURE;
        }
        $user = new User(compact('name', 'email', 'password'));
        $user->is_admin = true;
        $user->save();
        $this->info('Administrator created. Sign in at '.url('/login'));

        return self::SUCCESS;
    }
}
