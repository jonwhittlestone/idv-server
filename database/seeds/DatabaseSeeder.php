<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedAccountsTable::class);
        //$this->call(SeedUsersTable::class);
        (new \Neomerx\LimoncelloIlluminate\Database\Seeds\Runner($this))->run();
    }
}
