<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Account;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$account = Account::pluck('id');

        User::create([
        	'firstname' 	=> 'Raymond',
        	'surname'		=> 'Smith',
        	'email'			=> 'raymond.smith@mail.com',
        	'dob'			=> '1945-01-11',
        	'building'		=> '39',
        	'street'		=> 'High Street',
        	'town'			=> 'Westbury',
        	'postcode'		=> 'BA133BN',
        	'account_id'	=> 1

        ]);

        User::create([
        	'firstname' 	=> 'Roger',
        	'surname'		=> 'Hayne',
        	'email'			=> 'roger.hanyne@mail.com',
        	'dob'			=> '1951-01-11',
        	'building'		=> '5',
        	'street'		=> 'High Street',
        	'town'			=> 'Westbury',
        	'postcode'		=> 'BA133BN',
        	'account_id'	=> 1

        ]);

        User::create([
        	'firstname' 	=> 'John',
        	'surname'		=> 'Skutans',
        	'email'			=> 'john.skutans@mail.com',
        	'dob'			=> '1937-01-06',
        	'building'		=> '8',
        	'street'		=> 'High Street',
        	'town'			=> 'Westbury',
        	'postcode'		=> 'BA133BN',
        	'driving_license' => 'SKUTA306017J99AB',
        	'account_id'	=> 1

        ]);
    }
}
