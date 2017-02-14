<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $this->call(CategoryTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BookUserTableSeeder::class);

        Model::reguard();
    }
}
