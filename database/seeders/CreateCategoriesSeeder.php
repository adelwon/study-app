<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CreateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ноутбуки',
                'description' => 'Ноутбуки-ShopOnline'
            ],
            [
                'name' => 'Компютери',
                'description' => 'Компютери-ShopOnline'
            ],
            [
                'name' => 'Планшети',
                'description' => 'Планшети-ShopOnline'
            ],
            [
                'name' => 'Смартфони',
                'description' => 'Планшети-ShopOnline'
            ]
        ];

        foreach ($categories as $category) {
            (new Category($category))->save();
        }
    }
}
