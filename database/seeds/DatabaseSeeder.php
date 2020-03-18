<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Users::class);
        $this->call(Shops::class);
        $this->call(Admins::class);
        $this->call(Business::class);
        $this->call(Locations::class);
    }
}
