<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = [
            ['name' => 'Gadget', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Furniture', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Sneaker', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Electronics', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Fashion', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Home Appliances', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Books', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Sports', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Beauty', 'created_by' => getUserWithRole('employee')->id],
            ['name' => 'Automotive', 'created_by' => getUserWithRole('employee')->id],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
