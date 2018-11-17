<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'About Page',
                'content' => 'This is the About Page'
            ],[
                'title' => 'Blog Page',
                'content' => 'This is the Blog Page'
            ],[
                'title' => 'Contact Page',
                'content' => 'This is the Contact Page'
            ]
        ]);
    }
}
