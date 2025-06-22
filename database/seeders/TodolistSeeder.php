<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("todo_lists")->insert([
            'title' => Str::random(10),
            'status_id' => rand(1, 3),
            'detail' => Str::random(50),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
