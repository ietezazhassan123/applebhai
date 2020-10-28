<?php

use Illuminate\Database\Seeder;

use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);



           Role::create([
               'title' => 'Customer'
           ]);

           Role::create([
               'title' => 'Employee'
           ]);

           Role::create([
               'title' => 'Support Staff'
           ]);

           Role::create([
               'title' => 'Accountants'
           ]);
    }
}
