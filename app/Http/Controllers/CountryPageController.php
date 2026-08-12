<?php

namespace App\Http\Controllers;
use App\Mail\NewLeadNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\CountryPage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use App\Models\Lead;

class CountryPageController extends Controller
{
    /**
     * Display the trademark registration countries directory.
     *
     * Sirf active countries fetch karta hai aur unke available
     * regions directory filter ke liye generate karta hai.
     */
    public function index(): View
    {
        /*
        |--------------------------------------------------------------------------
        | Get Active Countries
        |--------------------------------------------------------------------------
        |
        | Filament/database se sirf active countries fetch hongi.
        | Pehle menu order aur phir country name ke according sort hongi.
        |
        */
        $countries = CountryPage::query()
            ->where('is_active', true)
            ->orderBy('menu_order')
            ->orderBy('country_name')
            ->get([
                'country_name',
                'slug',
                'country_flag',
                'menu_region',
            ]);

        /*
        |--------------------------------------------------------------------------
        | Region Labels
        |--------------------------------------------------------------------------
        |
        | Database mein stored region keys ke readable labels.
        |
        */
        $regionLabels = [
            'asia_pacific' => 'Asia Pacific',
            'asia' => 'Asia',
            'europe' => 'Europe',
            'middle_east' => 'Middle East',
            'africa' => 'Africa',
            'north_america' => 'North America',
            'south_america' => 'South America',
            'oceania' => 'Oceania',
        ];

        /*
        |--------------------------------------------------------------------------
        | Generate Dynamic Region Filters
        |--------------------------------------------------------------------------
        |
        | Sirf unhi regions ke filter buttons banenge jinmein kam se kam
        | ek active country available hai.
        |
        */
        $regions = $countries
            ->pluck('menu_region')
            ->filter()
            ->unique()
            ->mapWithKeys(function (string $region) use ($regionLabels): array {
                $label = $regionLabels[$region]
                    ?? str($region)
                        ->replace(['_', '-'], ' ')
                        ->title()
                        ->toString();

                return [$region => $label];
            });

        /*
        |--------------------------------------------------------------------------
        | Return Country Directory View
        |--------------------------------------------------------------------------
        */
        return view('countries', compact('countries', 'regions'));
    }

    /**
     * Display an individual active country page.
     */
    public function show(string $slug): View
    {
        /*
        |--------------------------------------------------------------------------
        | Find Active Country
        |--------------------------------------------------------------------------
        |
        | Invalid, inactive ya missing slug par Laravel automatic 404 dega.
        |
        */
        $country = CountryPage::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        /*
        |--------------------------------------------------------------------------
        | Return Individual Country View
        |--------------------------------------------------------------------------
        */
        return view('country.show', compact('country'));
    }

    /**
     * Validate and process the common enquiry form.
     */
    /**
 * Validate and save enquiry as a lead.
 */
public function submit(Request $request): RedirectResponse
{
    /*
    |--------------------------------------------------------------------------
    | Dynamic Allowed Countries
    |--------------------------------------------------------------------------
    */
    $allowedCountries = CountryPage::query()
        ->where('is_active', true)
        ->pluck('country_name')
        ->push('Other')
        ->unique()
        ->values()
        ->all();

    /*
    |--------------------------------------------------------------------------
    | Validate Form
    |--------------------------------------------------------------------------
    */
    $validated = $request->validate([
        'form_location' => [
            'required',
            'string',
            Rule::in(['modal', 'page']),
        ],

        'name' => [
            'required',
            'string',
            'max:255',
        ],

        'email' => [
            'nullable',
            'email',
            'max:255',
        ],

        'phone' => [
            'required',
            'string',
            'max:30',
        ],

        'country' => [
            'required',
            'string',
            Rule::in($allowedCountries),
        ],

        'service' => [
            'nullable',
            'string',
            'max:255',
        ],

        'message' => [
            'nullable',
            'string',
            'max:5000',
        ],

        'source_url' => [
            'nullable',
            'url',
            'max:2000',
        ],
    ]);

    /*
    |--------------------------------------------------------------------------
    | Remember Submitted Form Location
    |--------------------------------------------------------------------------
    | Validation error aane par sahi form/modal identify karne ke liye.
    */
    $request->session()->flash(
        'form_location',
        $validated['form_location']
    );

    /*
    |--------------------------------------------------------------------------
    | Generate Source Information
    |--------------------------------------------------------------------------
    */
    $sourcePage = $validated['form_location'] === 'modal'
        ? 'enquiry_modal'
        : 'contact_page';

    /*
    |--------------------------------------------------------------------------
    | Save Lead
    |--------------------------------------------------------------------------
    */
    $lead = Lead::create([
        'name'         => $validated['name'],
        'email'        => $validated['email'] ?? null,
        'phone'        => $validated['phone'],
        'country'      => $validated['country'],
        'service'      => $validated['service'] ?? null,
        'message'      => $validated['message'] ?? null,

        'source_page'  => $sourcePage,
        'source_url'   => $validated['source_url'] ?? url()->previous(),
        'referrer_url' => $request->headers->get('referer'),

        'status'       => 'new',
        'ip_address'   => $request->ip(),
        'user_agent'   => $request->userAgent(),
    ]);

    /*
    |--------------------------------------------------------------------------
    | Send Lead Details By Email
    |--------------------------------------------------------------------------
    | Email fail hone par bhi lead database mein save rahegi.
    */
    try {
        Mail::to('jogindar.rw@gmail.com')
            ->send(new NewLeadNotification($lead));
    } catch (\Throwable $exception) {
        Log::error('New lead email could not be sent.', [
            'lead_id' => $lead->id,
            'error'   => $exception->getMessage(),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Return Success Response
    |--------------------------------------------------------------------------
    */
    return back()->with([
        'success'       => 'Thank you! Your enquiry has been submitted successfully.',
        'form_location' => $validated['form_location'],
    ]);
}

}