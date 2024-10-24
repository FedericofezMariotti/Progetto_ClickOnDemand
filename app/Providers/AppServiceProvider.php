<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        //
    }

   
    public function boot(): void
    {
        if(Schema::hasTable('categories')) {
            View::share('categories', Category::orderBy('name')->get());
        }
        if(Schema::hasTable('sub_categories')) {
            View::share('subcategories', SubCategory::orderBy('name')->get());
        }

        Paginator::usebootstrap();
    }
}
