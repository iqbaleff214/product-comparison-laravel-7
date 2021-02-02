<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $handphoneId = Category::create(['title' => 'Handphone',]);
        $laptopId = Category::create(['title' => 'Laptop',]);

        Category::create(['title' => 'Asus', 'parent_id'=>$laptopId->id]);
        Category::create(['title' => 'Apple', 'parent_id'=>$laptopId->id]);

        Category::create(['title' => 'Samsung', 'parent_id'=>$handphoneId->id]);
        Category::create(['title' => 'Nokia', 'parent_id'=>$handphoneId->id]);
    }
}
