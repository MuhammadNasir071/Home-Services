<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_categories')->insert([
            [
                "name" => "AC",
                "slug" => "ac",
                "image" => "1521969345.png"	
             ],
             [
                "name" => "Beauty",
                "slug" => "beauty",
                "image" => "1521969358.png"	
             ],
             [
                "name" => "Plumbing",
                "slug" => "plumbing",
                "image" => "1521969409.png"	
             ],
             [
                "name" => "Electrical",
                "slug" => "electrical",
                "image" => "1521969419.png"	
             ],
             [
                "name" => "Shower Filter",
                "slug" => "shower_filter",
                "image" => "1521969430.png"	
             ],
             [
                "name" => "Home Cleaning",
                "slug" => "home_cleaning",
                "image" => "1521969446.png"	
             ],
             [
                "name" => "Carpentry",
                "slug" => "carpentry",
                "image" => "1521969454.png"	
             ],
             [
                "name" => "Post Control",
                "slug" => "post_control",
                "image" => "1521969464.png"	
             ],
             [
                "name" => "Water Purifier",
                "slug" => "water_purifier",
                "image" => "1521972593.png"	
             ],
             [
                "name" => "Computer Repair",
                "slug" => "computer_repair",
                "image" => "1521969512.png"	
             ],
             [
                "name" => "TV",
                "slug" => "tv",
                "image" => "1521969522.png"	
             ],
             [
                "name" => "Refrigerator",
                "slug" => "refrigerator",
                "image" => "1521969536.png"	
             ],
             [
                "name" => "Geyser",
                "slug" => "geyser",
                "image" => "1521969558.png"	
             ],
             [
                "name" => "Car",
                "slug" => "car",
                "image" => "1521969576.png"	
             ],
             [
                "name" => "Document",
                "slug" => "document",
                "image" => "1521974355.png"	
             ],
             [
                "name" => "Movers & Pickers",
                "slug" => "movers_pickers",
                "image" => "1521969599.png"	
             ],
             [
                "name" => "Home Automation",
                "slug" => "home_automation",
                "image" => "1521969622.png"	
             ],
             [
                "name" => "Laundry",
                "slug" => "laundry",
                "image" => "1521972624.png"	
             ],
             [
                "name" => "Painting",
                "slug" => "painting",
                "image" => "1521972643.png"	
             ]
        ]);
    }
}
