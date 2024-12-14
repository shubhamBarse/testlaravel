<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            /* Living Room and subcategories */
            ['category_id' => 1, 'name' => 'Bedroom', 'status' => 1, 'parent_id' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 2, 'name' => 'Beds', 'status' => 1, 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 3, 'name' => 'Panel Beds', 'status' => 1, 'parent_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 4, 'name' => 'Night Stand', 'status' => 1, 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 5, 'name' => 'Dresser', 'status' => 1, 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            /* Living Room and subcategories */
            ['category_id' => 6, 'name' => 'Living Room', 'status' => 1, 'parent_id' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 7, 'name' => 'Sofas', 'status' => 1, 'parent_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 8, 'name' => 'Loveseats', 'status' => 1, 'parent_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 9, 'name' => 'Tables', 'status' => 1, 'parent_id' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 10, 'name' => 'Coffee Table', 'status' => 1, 'parent_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['category_id' => 11, 'name' => 'Side Table', 'status' => 1, 'parent_id' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}


