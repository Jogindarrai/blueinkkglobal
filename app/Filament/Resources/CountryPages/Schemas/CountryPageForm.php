<?php

namespace App\Filament\Resources\CountryPages\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\RichEditor\ToolbarButtonGroup;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;


class CountryPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                /*
                |--------------------------------------------------------------------------
                | Page Settings
                |--------------------------------------------------------------------------
                */
                Section::make('Page Settings')
                    ->description(
                        'Country name, page URL, country code and publishing settings.'
                    )
                    ->icon('heroicon-o-adjustments-horizontal')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('country_name')
                            ->label('Country Name')
                            ->placeholder('Nepal')
                            ->required()
                            ->maxLength(100)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                function (?string $state, Set $set): void {
                                    $set(
                                        'slug',
                                        Str::slug($state ?? '')
                                    );
                                }
                            ),

                        TextInput::make('country_adjective')
                            ->label('Country Adjective')
                            ->placeholder('Nepali')
                            ->maxLength(100),

                        TextInput::make('slug')
                            ->label('Page Slug')
                            ->prefix('trademark-registration-')
                            ->placeholder('nepal')
                            ->required()
                            ->maxLength(150)
                            ->unique(ignoreRecord: true)
                            ->helperText(
                                'Frontend URL: /trademark-registration-nepal'
                            ),

                        TextInput::make('country_code')
                            ->label('Flag Country Code')
                            ->placeholder('np')
                            ->maxLength(2)
                            ->helperText(
                                'Use lowercase ISO country code, such as np, ae or sg.'
                            )
                            ->dehydrateStateUsing(
                                fn(?string $state): ?string =>
                                filled($state)
                                    ? strtolower($state)
                                    : null
                            ),

                        Toggle::make('is_active')
                            ->label('Published')
                            ->default(false)
                            ->inline(false),

                        TextInput::make('sort_order')
                            ->label('Sort Order')
                            ->numeric()
                            ->default(0)
                            ->minValue(0),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | Hero Section
                |--------------------------------------------------------------------------
                */
Section::make('Country & Menu Settings')
    ->description(
        'Country ko mega menu mein region-wise organize aur display karein.'
    )
    ->icon('heroicon-o-bars-3-bottom-left')
    ->columnSpanFull()
    ->columns(3)
    ->schema([
        TextInput::make('country_flag')
            ->label('Country Flag')
            ->placeholder('🇳🇵')
            ->helperText('Country flag emoji enter karein.')
            ->maxLength(20),

         Select::make('menu_region')
            ->label('Menu Region')
            ->placeholder('Select region')
            ->options([
                'asia_pacific' => 'Asia Pacific',
                'north_america' => 'North America',
                'europe' => 'Europe',
                'middle_east' => 'Middle East',
                'africa' => 'Africa',
                'south_america' => 'South America',
            ])
            ->native(false)
            ->searchable()
,

        Toggle::make('is_popular_destination')
            ->label('Popular Destination')
            ->helperText(
                'Enable karne par country Popular Destinations mein dikhega.'
            )
            ->default(false),

        Toggle::make('show_in_menu')
            ->label('Show in Mega Menu')
            ->helperText('Country ko header mega menu mein show/hide karein.')
            ->default(true),

        TextInput::make('menu_order')
            ->label('Menu Order')
            ->placeholder('1')
            ->numeric()
            ->default(0)
            ->minValue(0),
    ]),


Section::make('Hero Section')
    ->description(
        'Frontend country page ke hero section ka complete content.'
    )
    ->icon('heroicon-o-globe-alt')
    ->columnSpanFull()
    ->columns(2)
    ->schema([
        TextInput::make('hero_heading')
            ->label('Main Heading')
            ->placeholder('Trademark Registration in Nepal')
            ->maxLength(255)
            ->columnSpanFull(),

RichEditor::make('hero_description')
    ->label('Hero Description')
    ->placeholder('Country page ka hero description...')
    ->toolbarButtons([
        [
            ToolbarButtonGroup::make('Text Style', [
                'paragraph',
                'h1',
                'h2',
                'h3',
                'h4',
                'h5',
                'h6',
                'lead',
                'small',
            ])->textualButtons(),
        ],

        [
            'bold',
            'italic',
            'underline',
            'strike',
        ],

        [
            'alignStart',
            'alignCenter',
            'alignEnd',
            'alignJustify',
        ],

        [
            'bulletList',
            'orderedList',
            'blockquote',
        ],

        [
            'link',
            'table',
            'attachFiles',
        ],

        [
            'clearFormatting',
            'undo',
            'redo',
        ],
    ])
    ->floatingToolbars([
        'table' => [
            'tableAddColumnBefore',
            'tableAddColumnAfter',
            'tableDeleteColumn',
            'tableAddRowBefore',
            'tableAddRowAfter',
            'tableDeleteRow',
            'tableMergeCells',
            'tableSplitCell',
            'tableToggleHeaderRow',
            'tableToggleHeaderCell',
            'tableDelete',
        ],
    ])
    ->fileAttachmentsDisk('public')
    ->fileAttachmentsDirectory('country-pages/editor')
    ->fileAttachmentsVisibility('public')
    ->columnSpanFull(),

    Section::make('Country Overview Content')
    ->description(
        'Country overview ka complete formatted content yahan add karein.'
    )
    ->icon('heroicon-o-document-text')
    ->columnSpanFull()
    ->schema([
        RichEditor::make('overview_content')
            ->label('Overview Content')
            ->placeholder(
                'Country trademark registration overview content...'
            )
            ->toolbarButtons([
                ['bold', 'italic', 'underline', 'strike'],
                ['h2', 'h3', 'h4', 'h5', 'h6'],
                ['bulletList', 'orderedList', 'blockquote'],
                ['link', 'table', 'attachFiles'],
                ['undo', 'redo'],
            ])
            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('country-pages/overview')
            ->fileAttachmentsVisibility('public')
            ->columnSpanFull(),
    ]),

        Repeater::make('country_overview_items')
            ->label('Country Overview Items')
            ->helperText(
                'Country overview ke liye heading aur value add karein.'
            )
            ->schema([
                TextInput::make('heading')
                    ->label('Heading')
                    ->placeholder('Example: Trademark Authority')
                    ->maxLength(255),

                TextInput::make('value')
                    ->label('Value / Subheading')
                    ->placeholder('Example: Department of Industry')
                    ->maxLength(500),
            ])
            ->columns(2)
            ->defaultItems(0)
            ->minItems(0)
            ->addActionLabel('Add Overview Item')
            ->reorderable()
            ->collapsible()
            ->cloneable()
            ->itemLabel(
                fn (array $state): ?string =>
                    $state['heading'] ?? 'Overview Item'
            )
            ->columnSpanFull(),
        ]),
                /*
                |--------------------------------------------------------------------------
                | Why Register Section
                |--------------------------------------------------------------------------
                */

                Section::make('Why Register Section')
                    ->description(
                        'Why register section ki heading aur list points manage karein.'
                    )
                    ->icon('heroicon-o-check-circle')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('why_register_heading')
                            ->label('Section Heading')
                            ->placeholder('Why Register a Trademark in Nepal?')
                            ->maxLength(255)
                            ->columnSpanFull(),
                            Textarea::make('why_register_subheading')
                            ->label('Subheading / Introduction')
                            ->placeholder(
                                'Explain briefly why trademark registration is important...'
                            )
                            ->rows(3)
                            ->columnSpanFull(),

                        Repeater::make('why_register_items')
                            ->label('List Points')
                            ->schema([
                                Textarea::make('text')
                                    ->label('List Point')
                                    ->placeholder(
                                        'Growing consumer market with strong cultural and trade ties to India'
                                    )
                                    ->rows(2)
                                    ->maxLength(500)
                                    ->columnSpanFull(),
                            ])
                            ->defaultItems(0)
                            ->minItems(0)
                            ->maxItems(12)
                            ->addActionLabel('Add New List Point')
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->itemLabel(
                                fn(array $state): ?string =>
                                $state['text'] ?? 'New list point'
                            )
                            ->columnSpanFull(),
                    ]),

                Section::make('Legal Information Section')
                    ->description(
                        'Governing law aur applicant eligibility ka content manage karein.'
                    )
                    ->icon('heroicon-o-building-library')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        /*
        |--------------------------------------------------------------------------
        | Governing Law Card
        |--------------------------------------------------------------------------
        */
                        Section::make('Governing Law Card')
                            ->columnSpan(1)
                            ->schema([
                                TextInput::make('governing_law_heading')
                                    ->label('Heading')
                                    ->placeholder('Governing Law')
                                    ->default('Governing Law')
                                    ->maxLength(255),

                                RichEditor::make('governing_law_content')
                                    ->label('Content')
                                    ->placeholder(
                                        'Trademarks in Nepal are governed by...'
                                    )
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline'],
                                        ['bulletList', 'orderedList'],
                                        ['link', 'undo', 'redo'],
                                    ])
                                    ->columnSpanFull(),
                            ]),

                        /*
        |--------------------------------------------------------------------------
        | Who Can Apply Card
        |--------------------------------------------------------------------------
        */
                 Section::make('Who Can Apply Card')
                            ->columnSpan(1)
                            ->schema([
                                TextInput::make('who_can_apply_heading')
                                    ->label('Heading')
                                    ->placeholder('Who Can Apply')
                                    ->default('Who Can Apply')
                                    ->maxLength(255),

                                RichEditor::make('who_can_apply_content')
                                    ->label('Main Content')
                                    ->placeholder(
                                        'Any individual or business entity can apply...'
                                    )
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline'],
                                        ['bulletList', 'orderedList'],
                                        ['link', 'undo', 'redo'],
                                    ])
                                    ->columnSpanFull(),

                                RichEditor::make('who_can_apply_note')
                                    ->label('Important Note')
                                    ->placeholder(
                                        'An important limitation to plan around...'
                                    )
                                    ->toolbarButtons([
                                        ['bold', 'italic', 'underline'],
                                        ['bulletList', 'orderedList'],
                                        ['link', 'undo', 'redo'],
                                    ])
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('Required Documents Section')
                    ->description(
                        'Section heading, introduction, documents list, note and CTA manage karein.'
                    )
                    ->icon('heroicon-o-document-check')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('documents_heading')
                            ->label('Section Heading')
                            ->placeholder('Documents Required')
                            ->default('Documents Required')
                            ->maxLength(255)
                            ->columnSpanFull(),

                        RichEditor::make('documents_intro')
                            ->label('Introduction')
                            ->placeholder(
                                'To file a trademark application in Nepal, the following documents are generally required:'
                            )
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline'],
                                ['link', 'undo', 'redo'],
                            ])
                            ->columnSpanFull(),

                        Repeater::make('documents_items')
                            ->label('Documents List')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Document Title')
                                    ->placeholder('Power of Attorney')
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Textarea::make('description')
                                    ->label('Document Description')
                                    ->placeholder(
                                        'Executed by the applicant, signed and attested before witnesses...'
                                    )
                                    ->rows(3)
                                    ->maxLength(1500)
                                    ->columnSpanFull(),
                               ])
                            ->defaultItems(0)
                            ->minItems(0)
                            ->maxItems(20)
                            ->addActionLabel('Add New Document')
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->itemLabel(
                                fn(array $state): ?string =>
                                $state['title'] ?? 'New document'
                            )
                            ->columnSpanFull(),

                           RichEditor::make('documents_note')
                            ->label('Important Note')
                            ->placeholder(
                                'Documents originating from India typically need to be legalized or notarized...'
                            )
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline'],
                                ['link', 'undo', 'redo'],
                            ])
                            ->columnSpanFull(),

                        ]),

                        Section::make('Filing Process Section')
    ->description(
        'Section heading aur filing process ke steps manage karein.'
    )
    ->icon('heroicon-o-list-bullet')
    ->columnSpanFull()
    ->schema([
        TextInput::make('filing_process_heading')
            ->label('Section Heading')
            ->placeholder('Step-by-Step Filing Process')
            ->default('Step-by-Step Filing Process')
            ->maxLength(255)
            ->columnSpanFull(),

        Textarea::make('filing_process_subheading')
    ->label('Filing Process Subheading')
    ->placeholder('Briefly explain the trademark filing process.')
    ->rows(3)
    ->columnSpanFull(),
    TextInput::make('filing_steps_heading')
    ->label('Filing Steps Heading')
    ->placeholder('Trademark Application Steps')
    ->maxLength(255)
    ->columnSpanFull(),

Repeater::make('filing_process_steps')
    ->label('Filing Steps')
    ->schema([
        TextInput::make('title')
            ->label('Step Heading')
            ->maxLength(255)
            ->columnSpanFull(),

        Textarea::make('description')
            ->label('Step Description')
            ->rows(4)
            ->columnSpanFull(),
    ])
    ->itemLabel(
        fn (array $state): ?string =>
            $state['title'] ?? 'New filing step'
    )
    ->addActionLabel('Add New Step')
    ->reorderable()
    ->collapsible()
    ->cloneable()
    ->columnSpanFull(),

FileUpload::make('filing_process_image')
    ->label('Filing Process Image')
    ->helperText('Saare filing steps ke baad dikhne wali ek image upload karein.')
    ->image()
    ->maxSize(2048)
    ->disk('public')
    ->directory('country-pages/filing-process')
    ->visibility('public')
    ->columnSpanFull(),

    ]),

    Section::make('Fees and Registration Timeline')
    ->description(
        'Government fees aur expected registration timeline manage karein.'
    )
    ->icon('heroicon-o-banknotes')
    ->columnSpanFull()
    ->columns(2)
    ->schema([
        /*
        |--------------------------------------------------------------------------
        | Government Fees
        |--------------------------------------------------------------------------
        */
        Section::make('Government Fees')
            ->columnSpan(1)
            ->schema([
                TextInput::make('government_fees_heading')
                    ->label('Section Heading')
                    ->placeholder('Government Fees')
                    ->default('Government Fees')
                    ->maxLength(255),

                Repeater::make('government_fees_items')
                    ->label('Fee Items')
                    ->schema([
                        TextInput::make('label')
                            ->label('Fee Name')
                            ->placeholder('Filing fee')
                            ->maxLength(255),

                        TextInput::make('amount')
                            ->label('Fee Amount')
                            ->placeholder('NPR 1,000')
                            ->maxLength(100),

                        Textarea::make('description')
                            ->label('Description')
                            ->placeholder(
                                'Payable per class at the time of filing...'
                            )
                            ->rows(3)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->defaultItems(0)
                    ->minItems(0)
                    ->maxItems(15)
                    ->addActionLabel('Add New Fee')
                    ->reorderable()
                    ->collapsible()
                    ->cloneable()
                    ->itemLabel(
                        fn (array $state): ?string =>
                            $state['label'] ?? 'New fee'
                    )
                    ->columnSpanFull(),
            ]),

        /*
        |--------------------------------------------------------------------------
        | Registration Timeline
        |--------------------------------------------------------------------------
        */
        Section::make('Registration Timeline')
            ->columnSpan(1)
            ->schema([
                TextInput::make('registration_time_heading')
                    ->label('Section Heading')
                    ->placeholder('Time Period for Registration')
                    ->default('Time Period for Registration')
                    ->maxLength(255),

                Repeater::make('registration_time_items')
                    ->label('Timeline Summary')
                    ->schema([
                        TextInput::make('duration')
                            ->label('Duration')
                            ->placeholder('12–14')
                            ->maxLength(100),

                        TextInput::make('unit')
                            ->label('Duration Unit')
                            ->placeholder('Months')
                            ->maxLength(100),

                        TextInput::make('label')
                            ->label('Summary Label')
                            ->placeholder('Without opposition')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->defaultItems(0)
                    ->minItems(0)
                    ->maxItems(6)
                    ->addActionLabel('Add Timeline Item')
                    ->reorderable()
                    ->collapsible()
                    ->cloneable()
                    ->itemLabel(
                        fn (array $state): ?string =>
                            ($state['duration'] ?? null)
                                ? ($state['duration'] . ' ' . ($state['unit'] ?? ''))
                                : 'New timeline item'
                    )
                    ->columnSpanFull(),

                RichEditor::make('registration_time_content')
                    ->label('Timeline Description')
                    ->placeholder(
                        'Trademark registration in Nepal is not a quick process...'
                    )
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline'],
                        ['link', 'undo', 'redo'],
                    ])
                    ->columnSpanFull(),
            ]),
    ]),

    Section::make('Validity and Renewal Section')
    ->description(
        'Registration validity aur renewal conditions manage karein.'
    )
    ->icon('heroicon-o-arrow-path')
    ->columnSpanFull()
    ->columns(2)
    ->schema([
        /*
        |--------------------------------------------------------------------------
        | Validity Summary
        |--------------------------------------------------------------------------
        */
        Section::make('Validity Summary')
            ->columnSpan(1)
            ->columns(2)
            ->schema([
                TextInput::make('validity_renewal_heading')
                    ->label('Section Heading')
                    ->placeholder('Validity and Renewal')
                    ->default('Validity and Renewal')
                    ->maxLength(255)
                    ->columnSpanFull(),

                TextInput::make('validity_duration')
                    ->label('Validity Duration')
                    ->placeholder('7')
                    ->maxLength(100),

                TextInput::make('validity_unit')
                    ->label('Duration Unit')
                    ->placeholder('Years')
                    ->maxLength(100),

                TextInput::make('validity_label')
                    ->label('Validity Label')
                    ->placeholder('Registration validity')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]),

        /*
        |--------------------------------------------------------------------------
        | Renewal Details
        |--------------------------------------------------------------------------
        */
        Section::make('Renewal Details')
            ->columnSpan(1)
            ->schema([
                Repeater::make('renewal_items')
                    ->label('Renewal Points')
                    ->schema([
                        Textarea::make('content')
                            ->label('Point Content')
                            ->placeholder(
                                'A trademark registered in Nepal is valid for 7 years...'
                            )
                            ->rows(3)
                            ->maxLength(2000)
                            ->columnSpanFull(),
                    ])
                    ->defaultItems(0)
                    ->minItems(0)
                    ->maxItems(20)
                    ->addActionLabel('Add Renewal Point')
                    ->reorderable()
                    ->collapsible()
                    ->cloneable()
                    ->itemLabel(
                        fn (array $state): ?string =>
                            isset($state['content'])
                                ? str($state['content'])->limit(60)->toString()
                                : 'New renewal point'
                    )
                    ->columnSpanFull(),
            ]),
    ]),

Section::make('Grounds for Refusal Section')
    ->description(
        'Section heading, introduction aur refusal grounds manage karein.'
    )
    ->icon('heroicon-o-shield-exclamation')
    ->columnSpanFull()
    ->schema([
        TextInput::make('refusal_heading')
            ->label('Section Heading')
            ->placeholder('Grounds for Refusal')
            ->default('Grounds for Refusal')
            ->maxLength(255)
            ->columnSpanFull(),

        Textarea::make('refusal_intro')
            ->label('Introduction')
            ->placeholder(
                'The DOI can refuse an application where the mark:'
            )
            ->rows(2)
            ->maxLength(1000)
            ->columnSpanFull(),

        Repeater::make('refusal_items')
            ->label('Refusal Grounds')
            ->schema([
                Textarea::make('content')
                    ->label('Ground Content')
                    ->placeholder(
                        'Is identical or confusingly similar to an existing registered trademark'
                    )
                    ->rows(3)
                    ->maxLength(2000)
                    ->columnSpanFull(),
            ])
            ->defaultItems(0)
            ->minItems(0)
            ->maxItems(20)
            ->addActionLabel('Add Refusal Ground')
            ->reorderable()
            ->collapsible()
            ->cloneable()
            ->itemLabel(
                fn (array $state): ?string =>
                    filled($state['content'] ?? null)
                        ? str($state['content'])->limit(70)->toString()
                        : 'New refusal ground'
            )
            ->columnSpanFull(),
    ]),

    Section::make('Blue Inkk Help and CTA Section')
    ->description(
        'Country-wise filing support, services, CTA and legal disclaimer manage karein.'
    )
    ->icon('heroicon-o-lifebuoy')
    ->columnSpanFull()
    ->schema([

        Section::make('Help Section Content')
            ->columns(2)
            ->schema([
                TextInput::make('help_label')
                    ->label('Support Label')
                    ->placeholder('Complete Filing Support')
                    ->maxLength(255),

                TextInput::make('help_heading')
                    ->label('Section Heading')
                    ->placeholder('How Blue Inkk Can Help')
                    ->maxLength(255),

                RichEditor::make('help_content')
                    ->label('Introduction Content')
                    ->placeholder(
                        'Explain how Blue Inkk assists applicants in this country...'
                    )
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline'],
                        ['link', 'undo', 'redo'],
                    ])
                    ->columnSpanFull(),

                Repeater::make('help_items')
                    ->label('Services List')
                    ->schema([
                        Textarea::make('content')
                            ->label('Service')
                            ->placeholder(
                                'Conducting a trademark availability search before filing'
                            )
                            ->rows(3)
                            ->maxLength(2000)
                            ->columnSpanFull(),
                    ])
                    ->defaultItems(0)
                    ->minItems(0)
                    ->maxItems(20)
                    ->addActionLabel('Add Service')
                    ->reorderable()
                    ->collapsible()
                    ->cloneable()
                    ->itemLabel(
                        fn (array $state): ?string =>
                            filled($state['content'] ?? null)
                                ? str($state['content'])->limit(70)->toString()
                                : 'New service'
                    )
                    ->columnSpanFull(),
            ]),

        Section::make('Final CTA')
            ->columns(2)
            ->schema([
                TextInput::make('help_cta_heading')
                    ->label('CTA Heading')
                    ->placeholder('Protect Your Trademark in Nepal')
                    ->maxLength(255)
                    ->columnSpanFull(),

                RichEditor::make('help_cta_content')
                    ->label('CTA Content')
                    ->placeholder(
                        'Invite users to contact the Blue Inkk team...'
                    )
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline'],
                        ['link', 'undo', 'redo'],
                    ])
                    ->columnSpanFull(),

                TextInput::make('help_cta_email')
                    ->label('Contact Email')
                    ->placeholder('global.ipr@blueinkk.com')
                    ->email()
                    ->maxLength(255),

                TextInput::make('help_cta_button_text')
                    ->label('Button Text')
                    ->placeholder('Connect With Us')
                    ->default('Connect With Us')
                    ->maxLength(100),

                TextInput::make('help_cta_button_url')
                    ->label('Button URL')
                    ->placeholder('#connect-with-us')
                    ->default('#connect-with-us')
                    ->maxLength(500)
                    ->columnSpanFull(),
            ]),

        Section::make('Legal Disclaimer')
            ->schema([
                Textarea::make('legal_disclaimer')
                    ->label('Disclaimer Content')
                    ->placeholder(
                        'This page is for general informational purposes and does not constitute legal advice...'
                    )
                    ->rows(5)
                    ->maxLength(5000)
                    ->columnSpanFull(),
            ]),


          ]),
            ]);
    }
}
