<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install {--email=admin@admin.com} {--password=password} {--username=Administrator} {--force} {--fresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Script Install';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->option('force') || $this->option('fresh')) {
            $this->call('migrate:fresh');
        } else {
            $this->call('migrate');
        }

        if (! User::where('email', '=', $this->option('email'))->count()) {
            $user = new User([
                'email' => $this->option('email'),
                'password' => Hash::make($this->option('password')),
                'username' => $this->option('username')
            ]);

            $user->save();
        }

        return 0;
    }
}
