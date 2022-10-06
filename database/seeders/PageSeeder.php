<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title'       => 'first page',
            'description' => 'page content',
            'slug'        => 'first-page',
            'is_main'     => false
        ]);
    }
}
