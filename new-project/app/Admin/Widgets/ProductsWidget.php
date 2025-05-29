<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductsWidget extends BaseDimmer
{
    public function run()
    {
        $count = Product::count();
        return view('voyager::dimmer', [
            'title' => 'Товары',
            'text' => "Всего товаров: $count",
            'icon' => 'voyager-bag',
            'button' => [
                'text' => 'Просмотреть',
                'link' => route('voyager.products.index'),
            ],
            'image' => '', // Добавляем пустую строку, если виджет ожидает эту переменную
        ]);
    }
}