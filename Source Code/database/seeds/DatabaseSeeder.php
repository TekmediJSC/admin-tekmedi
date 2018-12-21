<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        DB::table('roles')->insert(['id' => Role::ADMIN, 'name' => 'Admin']);
        DB::table('roles')->insert(['id' => Role::USER, 'name' => 'User']);

        // $this->call(UsersTableSeeder::class);
    }
}
