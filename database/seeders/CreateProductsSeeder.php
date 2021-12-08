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
                'description' => 'Екран 15.6" IPS (1920x1080) Full HD, матовий / Intel Core i5-10300H (2.5 — 4.5 ГГц) / RAM 16 ГБ / SSD 512 ГБ / nVidia GeForce GTX 1650, 4 ГБ / без ОД / LAN / Wi-Fi / Bluetooth / вебкамера / без ОС / 2.15 кг / чорний'
            ],
            [
                'category_id' => '2',
                'name' => 'Комп\'ютер Everest Home 4070',
                'price' => '17299',
                'description' => 'Intel Core i3-10100F (3.6 - 4.3 ГГц) / RAM 8 ГБ / HDD 1 ТБ / nVidia GeForce GTX 1050 Ti, 4 ГБ / Без ОД / LAN / без ОС'
            ],
            [
                'category_id' => '2',
                'name' => 'Комп\'ютер 2E Complex Gaming',
                'price' => '43999',
                'description' => 'Intel Core i5-10400F (2.9 — 4.3 ГГц) / RAM 16 ГБ / HDD 1 ТБ + SSD 500 ГБ / nVidia GeForce RTX 3060 Ti, 8 ГБ / без ОД / LAN / FreeDos'
            ],
            [
                'category_id' => '3',
                'name' => 'Планшет Lenovo Tab P11 LTE',
                'price' => '9999',
                'description' => 'Екран 11" IPS (2000x1200) MultiTouch / Qualcomm Snapdragon 662 (2.0 ГГц + 1.8 ГГц) / RAM 6 ГБ / 128 ГБ вбудованої пам\'яті + microSD / 3G / 4G / Wi-Fi / Bluetooth 5.1 / основна камера 13 Мп, фронтальна — 8 Мп / GPS / ГЛОНАСС / Android 10 / 490 г / темно-сірий'
            ],
            [
                'category_id' => '3',
                'name' => 'Планшет Lenovo Tab M10 FHD Plus',
                'price' => '7499',
                'description' => 'Екран 10.3" (1920x1200) MultiTouch / MediaTek Helio P22T (2.3 ГГц) / RAM 4 ГБ / 64 ГБ вбудованої пам\'яті + microSD / 3G / 4G / Wi-Fi / Bluetooth 5.0 / основна камера 8 Мп, фронтальна — 5 Мп / Android 9.0 (Pie) / 460 г / платиновий сірий'
            ],
            [
                'category_id' => '3',
                'name' => 'Планшет Samsung Galaxy Tab S7 FE',
                'price' => '14999',
                'description' => 'Екран 12.4" (2560x1600) MultiTouch / Qualcomm Snapdragon 778G (2.4 ГГц) / RAM 4 ГБ / 64 ГБ вбудованої пам\'яті + microSD / Wi-Fi / Bluetooth 5.0 / основна камера: 8 Мп, фронтальна — 5 Мп / GPS / ГЛОНАСС / Android 11 / 608 г / чорний'
            ]
        ];

        foreach ($products as $product) {
            (new Product($product))->save();
        }
    }
}
