<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Carbon;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('service_categories')->insert([



            [
                "name" => "AC" ,
                "slug" => "ac" ,
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "name" => "beauty",
                "slug" => "beauty",
                "image" => "1521969358.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "name" => "plumbing",
                "slug" => "plumbing",
                "image" => "1521969409.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "name" => "electrical",
                "slug" => "electrical",
                "image" => "1521969419.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "name" => "shower",
                "slug" => "shower",
                "image" => "1521969430.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "name" => "cleaning",
                "slug" => "cleaning",
                "image" => "1521969446.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ], [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.PNG",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],





        ]);
    }
}
