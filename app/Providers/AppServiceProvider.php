<?php

namespace App\Providers;

use App\Models\CountryPage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

public function boot(): void
{
    /*
    |--------------------------------------------------------------------------
    | Header Mega Menu
    |--------------------------------------------------------------------------
    */
    View::composer('partials.header', function ($view) {
        $menuCountries = CountryPage::query()
            ->where('is_active', true)
            ->where('show_in_menu', true)
            ->orderBy('menu_order')
            ->orderBy('country_name')
            ->get();

        $countriesByRegion = $menuCountries->groupBy('menu_region');

        $popularCountries = $menuCountries
            ->where('is_popular_destination', true)
            ->take(4)
            ->values();

        $view->with([
            'countriesByRegion' => $countriesByRegion,
            'popularCountries' => $popularCountries,
        ]);
    });

    /*
    |--------------------------------------------------------------------------
    | Global Country Search
    |--------------------------------------------------------------------------
    */
    View::composer('components.country-search', function ($view) {
        $countries = CountryPage::query()
            ->where('is_active', true)
            ->orderBy('country_name')
            ->get([
                'country_name',
                'slug',
                'country_flag',
                'menu_region',
            ])
            ->map(fn (CountryPage $country): array => [
                'name' => $country->country_name,
                'slug' => $country->slug,
                'region' => $country->menu_region,
                'flag' => strtolower($country->country_flag),
            ])
            ->values()
            ->all();

        $view->with('countries', $countries);
    });

    /*
    |--------------------------------------------------------------------------
    | Common Enquiry Popup Countries
    |--------------------------------------------------------------------------
    */
    View::composer('partials.enquiry-modal', function ($view) {
        $formCountries = CountryPage::query()
            ->where('is_active', true)
            ->orderBy('country_name')
            ->pluck('country_name');

        $view->with('formCountries', $formCountries);
    });
}
}