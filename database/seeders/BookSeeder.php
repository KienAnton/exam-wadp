<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('books')->truncate();
        DB::table('books')->insert([
             [
                    'authorid' => 2,
                    'title' => 'Book 1',
                    'ISBN' => 'ISBN1',
                    'pub_year' => 1995,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 3,
                    'title' => 'Book 2',
                    'ISBN' => 'ISBN2',
                    'pub_year' => 1995,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 4,
                    'title' => 'Book 3',
                    'ISBN' => 'ISBN3',
                    'pub_year' => 1995,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 5,
                    'title' => 'Book 4',
                    'ISBN' => 'ISBN4',
                    'pub_year' => 1995,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 6,
                    'title' => 'Book 5',
                    'ISBN' => 'ISBN5',
                    'pub_year' => 1996,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 7,
                    'title' => 'Book 6',
                    'ISBN' => 'ISBN6',
                    'pub_year' => 1993,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 2,
                    'title' => 'Book 7',
                    'ISBN' => 'ISBN1',
                    'pub_year' => 1991,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],[
                    'authorid' => 2,
                    'title' => 'Book 8',
                    'ISBN' => 'ISBN8',
                    'pub_year' => 1995,
                    'available' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
