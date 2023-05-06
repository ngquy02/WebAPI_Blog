<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Sentinel;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Sentinel::register([
        //     'email'    => 'test@example.com',
        //     'password' => 'foobar',
        // ]);

        // $credentials = [
        //     'email'    => 'test@example.com',
        //     'password' => 'foobar',
        // ];
        
        // try {
        //     $result = Sentinel::authenticate($credentials);

        //     dd($result);
        // } catch (Exception $e) {
        //    dd($e->getMessage());
        // }

    }
}
