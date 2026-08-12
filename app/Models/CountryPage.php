<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryPage extends Model
{
    protected $fillable = [
        'country_name',
        'country_adjective',
        'slug',
        'country_code',
        'meta_title',
        'meta_description',
        'hero_description',
        'hero_heading',
        'why_register_heading',
        'why_register_items',
        'governing_law_heading',
        'governing_law_content',
        'who_can_apply_heading',
        'who_can_apply_content',
        'who_can_apply_note',
        'documents_heading',
        'documents_intro',
        'documents_items',
        'documents_note',
        'documents_cta_heading',
        'documents_cta_content',
        'filing_process_heading',
        'filing_process_steps',
        'government_fees_heading',
        'government_fees_items',
        'registration_time_heading',
        'registration_time_items',
        'registration_time_content',
        'validity_renewal_heading',
        'validity_duration',
        'validity_unit',
        'validity_label',
        'renewal_items',
        'refusal_heading',
        'refusal_intro',
        'refusal_items',
        'help_label',
        'help_heading',
        'help_content',
        'help_items',
        'help_cta_heading',
        'help_cta_content',
        'help_cta_email',
        'help_cta_button_text',
        'help_cta_button_url',
        'legal_disclaimer',
        'country_name',
        'country_flag',
        'menu_region',
        'is_popular_destination',
        'show_in_menu',
        'menu_order',



        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
        'why_register_items' => 'array',
        'documents_items' => 'array',
         'filing_process_steps' => 'array',
         'government_fees_items' => 'array',
         'registration_time_items' => 'array',
         'renewal_items' => 'array',
         'refusal_items' => 'array',
         'help_items' => 'array',
         'is_popular_destination' => 'boolean',
        'show_in_menu' => 'boolean',
        'menu_order' => 'integer',
    ];
}