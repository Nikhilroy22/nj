<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class uploads extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('uploads')->insert([
            'name' => Str::random(10),
            'file' => Str::random(10).'@example.com',
           
        ]);
    }
}
