<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controllers\HasMiddleware;

class CategoryController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth',
            'check.device.limit'
        ];
    }

    public function show(Category $category)
    {
        $movies = $category->movies()->get();
        return view('categories.show', compact('category', 'movies'));
    }
}
