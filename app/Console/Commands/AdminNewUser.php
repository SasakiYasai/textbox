<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\User;


class AdminNewUser extends Command
{
    /**
     * 管理者権限付与コマンド
     *
     * @var string
     */
    protected $signature = 'admin:newuser {email} {password}';

    /**
     * 説明文
     *
     * @var string
     */
    protected $description = 'ユーザーとパスワードを登録する';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userEmail = $this->argument('email');
        $userPassword = $this->argument('password');
        return User::create([
            'name' => $userEmail,
            'email' => $userEmail,
            'password' => $userPassword,
        ]);
        return true;
    }
}
