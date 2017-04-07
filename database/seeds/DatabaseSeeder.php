<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Model::unguard();

         $this->call('RoleSeeder');
         $this->call('UserSeeder');

        Model::reguard();*/

       factory(App\Flexhire::class, 100)->create();
    }
}