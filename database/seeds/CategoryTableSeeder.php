<?php
use Illuminate\Database\Seeder;
use AdvancedELOQUENT\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function run()
    {
        Category::create([
            'name' => 'PHP'
        ]);
        Category::create([
            'name' => 'HTML'
        ]);
        Category::create([
            'name' => 'JAVASCRIPT'
        ]);
        Category::create([
            'name' => 'CSS'
        ]);
    }
}

