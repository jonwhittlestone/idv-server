<?php

use Illuminate\Database\Seeder;

use App\Account;

class SeedAccountsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Account::create([
            'company_name' => 'IVXS',
            'company_registration' => 'admin',
        ]);
    }
}
