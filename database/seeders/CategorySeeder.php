<?php

namespace Database\Seeders;

use App\Models\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            'name' => 'Нерухомість',
            'description' => 'Продаж/оренда квартир, Продаж/оренда кімнат, Продаж/оренда будинків',
            'photo' => '/images/categories/category-realty.png',
        ]);
        Category::insert([
            'name' => 'Транспорт',
            'description' => 'Автомобілі, автобуси, мото, спецтехніка, автосервіс',
            'photo' => '/images/categories/category-transport.png',
        ]);
        Category::insert([
            'name' => 'Сад',
            'description' => 'Садова техніка, ручний інструмент, рослини, полив, ландшафт',
            'photo' => '/images/categories/category-garden.png',
        ]);
        Category::insert([
            'name' => 'Меблі',
            'description' => 'Меблі, декор для дому, освітлення',
            'photo' => '/images/categories/category-furniture.png',
        ]);
        Category::insert([
            'name' => 'Послуги',
            'description' => 'Прокат, транспорні послуги, ремот побутової техніки',
            'photo' => '/images/categories/category-services.png',
        ]);
    }
}
