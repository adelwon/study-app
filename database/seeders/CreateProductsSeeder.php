<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => '1',
                'name' => 'Ноутбук Acer Aspire 7 A715',
                'price' => '25999',
                'description' => '<li>Екран 15.6" IPS (1920x1080) Full HD, матовий</li>
                <li>Intel Core i5-10300H (2.5 — 4.5 ГГц)</li>
                 <li>RAM 16 ГБ</li>
                 <li>SSD 512 ГБ</li>
                 <li>nVidia GeForce GTX 1650, 4 ГБ</li>'
            ],
            [
                'category_id' => '2',
                'name' => 'Комп\'ютер Everest Home 4070',
                'price' => '17299',
                'description' => '<li>Intel Core i3-10100F (3.6 - 4.3 ГГц)</li>
                <li>RAM 8 ГБ</li>
                <li>HDD 1 ТБ</li>
                <li>nVidia GeForce GTX 1050 Ti</li>'
            ],
            [
                'category_id' => '2',
                'name' => 'Комп\'ютер 2E Complex Gaming',
                'price' => '43999',
                'description' => '<li>Intel Core i5-10400F (2.9 — 4.3 ГГц)</li>
                <li>RAM 16 ГБ</li>
                <li>HDD 1 ТБ + SSD 500 ГБ</li>
                <li>nVidia GeForce RTX 3060 Ti</li>
                <li>8 ГБ/без ОД/LAN/FreeDos</li>'
            ],
            [
                'category_id' => '3',
                'name' => 'Планшет Lenovo Tab P11 LTE',
                'price' => '9999',
                'description' => '<li>Екран 11" IPS (2000x1200) MultiTouch</li>
                <li>Qualcomm Snapdragon 662 (2.0 ГГц + 1.8 ГГц)</li>
                <li>RAM 6 ГБ/128 ГБ вбудованої пам\'яті + microSD</li>
                <li>3G/4G/Wi-Fi</li>
                <li>Bluetooth 5.1</li>'
            ],
            [
                'category_id' => '3',
                'name' => 'Планшет Lenovo Tab M10 FHD Plus',
                'price' => '7499',
                'description' => '<li>Екран 10.3" (1920x1200) MultiTouch</li>
                <li>MediaTek Helio P22T (2.3 ГГц)</li>
                <li>RAM 4 ГБ/64 ГБ вбудованої пам\'яті + microSD</li>
                <li>3G/4G/Wi-Fi</li>
                <li>Bluetooth 5.0</li>'
            ],
            [
                'category_id' => '3',
                'name' => 'Планшет Samsung Galaxy Tab S7 FE',
                'price' => '14999',
                'description' => '<li>Екран 12.4" (2560x1600) MultiTouch</li>
                <li>Qualcomm Snapdragon 778G (2.4 ГГц)</li>
                <li>RAM 4 ГБ/64 ГБ вбудованої пам\'яті + microSD</li>
                <li>Wi-Fi</li>
                <li>Bluetooth 5.0</li>'
            ]
        ];

        foreach ($products as $product) {
            (new Product($product))->save();
        }
    }
}
