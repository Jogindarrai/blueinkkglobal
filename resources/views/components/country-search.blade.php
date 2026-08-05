@props([
    'countries' => [],
    'directoryTarget' => null,
    'inputId' => 'countrySearch',
])

<div
    class="country-search-feature country-search-feature-compact"
    data-country-search-component
    @if($directoryTarget)
        data-directory-target="{{ $directoryTarget }}"
    @endif
>
    <div class="country-search-feature-control">

        {{-- Search input --}}
        <div class="country-search-input-wrap">

            <i class="bi bi-search country-search-input-icon"></i>

            <input
                type="search"
                id="{{ $inputId }}"
                class="country-search-input"
                placeholder="Search country here..."
                aria-label="Search trademark registration by country"
                aria-expanded="false"
                autocomplete="off"
                data-country-search-input
            >

            <button
                type="button"
                class="country-search-clear"
                aria-label="Clear country search"
                data-country-search-clear
                hidden
            >
                <i class="bi bi-x-lg"></i>
            </button>

        </div>

        {{-- Country suggestions --}}
        <div
            class="country-search-suggestions"
            data-country-search-suggestions
        >
            <div class="country-search-suggestions-header">

                <span>Country Suggestions</span>

                <small>
                    <strong data-country-suggestion-count>
                        {{ count($countries) }}
                    </strong>
                    found
                </small>

            </div>

            <div
                class="country-search-suggestions-list"
                data-country-search-list
            >
                @foreach($countries as $country)
                    <a
                        href="{{ url('/trademark-registration-' . $country['slug']) }}"
                        class="country-search-suggestion-item"
                        data-country-search-option
                        data-name="{{ strtolower($country['name']) }}"
                        data-region="{{ $country['region'] }}"
                    >
                        <span class="country-search-suggestion-flag">
                            <span
                                class="fi fi-{{ $country['flag'] }}"
                                role="img"
                                aria-label="{{ $country['name'] }} flag"
                            ></span>
                        </span>

                        <span class="country-search-suggestion-content">
                            <strong>{{ $country['name'] }}</strong>

                            <small>
                                Trademark Registration
                            </small>
                        </span>

                        <span class="country-search-suggestion-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                @endforeach
            </div>

            {{-- Empty result --}}
            <div
                class="country-search-suggestion-empty"
                data-country-search-suggestion-empty
                hidden
            >
                <span>
                    <i class="bi bi-search"></i>
                </span>

                <div>
                    <strong>No matching country</strong>

                    <small>
                        Try searching with another country name.
                    </small>
                </div>
            </div>

        </div>

    </div>
</div>