<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\FACADES\SCHEMA;

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


        function paginateCollection($collection, $perPage, $pageName = 'page', $fragment = null)
        {
            $currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage($pageName);
            $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage);
            parse_str(request()->getQueryString(), $query);
            unset($query[$pageName]);
            $paginator = new \Illuminate\Pagination\LengthAwarePaginator(
                $currentPageItems,
                $collection->count(),
                $perPage,
                $currentPage,
                [
                    'pageName' => $pageName,
                    'path' => \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPath(),
                    'query' => $query,
                    'fragment' => $fragment
                ]
            );
        
            return $paginator;
        }
    }
    
}
