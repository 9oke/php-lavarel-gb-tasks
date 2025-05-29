<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use TCG\Voyager\Widgets\BaseDimmer;

class CategoriesWidget extends BaseDimmer
{
    public function run()
    {
        $count = Category::count();
        return view('voyager::dimmer', [
            'title' => 'Категории',
            'text' => "Всего категорий: $count",
            'icon' => 'voyager-categories',
            'button' => [
                'text' => 'Просмотреть',
                'link' => route('voyager.categories.index'),
            ],
            'image' => '', // Добавляем пустую строку
        ]);
    }
}
