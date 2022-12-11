<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cashier\User;
use Laravel\Cashier\Cashier;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Models\Collection;
use App\Http\Resources\CollectionResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cashier::useCustomerModel(User::class);
        $productAreaBooks = json_decode($this->getProductAreaBooks()->toJson(), true);
        $mostAreaBooks = json_decode($this->getMostAreaBooks()->toJson(), true);

        \View::share('productAreaBooks', $productAreaBooks);
        \View::share('mostAreaBooks', $mostAreaBooks);
    }

    public function getProductAreaBooks()
    {
      $topInterestingCollections = [
        'new-arrival',
        'on-sale',
        'featured-product',
      ];

      $collections = Collection::whereIn('slug', $topInterestingCollections)
                               ->where('status', true)
                               ->with('books.images')
                               ->orderBy('order_by')
                               ->get();

      return CollectionResource::collection($collections);
    }

    public function getMostAreaBooks()
    {
      $collections = Category::where('status', true)
                             ->with('books.images')
                             ->orderBy('order_by')
                             ->get();

      return CategoryResource::collection($collections);
    }
}
