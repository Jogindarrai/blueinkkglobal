<!-- @if ($errors->any() && old('form_location') === ($formLocation ?? 'page'))
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif -->


<form
    method="POST"
    action="{{ route('enquiry.submit') }}"
    class="contact-enquiry-form">
    @csrf
{{-- Form identification and source tracking --}}
<input
    type="hidden"
    name="form_location"
    value="{{ $formLocation }}">

<input
    type="hidden"
    name="source_page"
    value="{{ $formLocation === 'modal' ? 'modal' : 'page' }}">

<input
    type="hidden"
    name="source_url"
    value="{{ url()->current() }}">
    <div class="contact-form-body">
        <div class="row g-3">

            {{-- Full Name --}}
            <div class="col-md-6">
                <label
                    for="contact-name"
                    class="form-label">
                    Full Name
                    <span class="text-danger">*</span>
                </label>

                <input
                    type="text"
                    id="contact-name"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter your full name"
                    value="{{ old('name') }}"
                    autocomplete="name"
                    required>

                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Email Address --}}
            <div class="col-md-6">
                <label
                    for="contact-email"
                    class="form-label">
                    Email Address
                    <span class="text-danger">*</span>
                </label>

                <input
                    type="email"
                    id="contact-email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter your email address"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    required>

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Phone Number --}}
            <div class="col-md-6">
                <label
                    for="contact-phone"
                    class="form-label">
                    Phone Number
                    <span class="text-danger">*</span>
                </label>

                <input
                    type="tel"
                    id="contact-phone"
                    name="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    placeholder="Enter your phone number"
                    value="{{ old('phone') }}"
                    autocomplete="tel"
                    required>

                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Dynamic Country --}}
            <div class="col-md-6">
                <label
                    for="contact-country"
                    class="form-label">
                    Country
                    <span class="text-danger">*</span>
                </label>

                <select
                    id="contact-country"
                    name="country"
                    class="form-select @error('country') is-invalid @enderror"
                    required>
                    <option value="" disabled @selected(!old('country'))>
                        Select country
                    </option>

                    @foreach($formCountries as $countryName)
                    <option
                        value="{{ $countryName }}"
                        @selected(old('country')===$countryName)>
                        {{ $countryName }}
                    </option>
                    @endforeach

                    <option
                        value="Other"
                        @selected(old('country')==='Other' )>
                        Other
                    </option>
                </select>

                @error('country')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Service Required --}}
            <div class="col-12">
                <label
                    for="contact-service"
                    class="form-label">
                    Service Required
                    <span class="text-danger">*</span>
                </label>

                <select
                    id="contact-service"
                    name="service"
                    class="form-select @error('service') is-invalid @enderror"
                    required>
                    <option value="" disabled @selected(!old('service'))>
                        Select service
                    </option>

                    <option
                        value="Trademark"
                        @selected(old('service')==='Trademark' )>
                        Trademark
                    </option>

                    <option
                        value="Copyright"
                        @selected(old('service')==='Copyright' )>
                        Copyright
                    </option>

                    <option
                        value="Design"
                        @selected(old('service')==='Design' )>
                        Design
                    </option>

                    <option
                        value="Patent"
                        @selected(old('service')==='Patent' )>
                        Patent
                    </option>

                    <option
                        value="Contracts & Agreements"
                        @selected(old('service')==='Contracts & Agreements' )>
                        Contracts &amp; Agreements
                    </option>

                    <option
                        value="IP Valuation & Due Diligence"
                        @selected(old('service')==='IP Valuation & Due Diligence' )>
                        IP Valuation &amp; Due Diligence
                    </option>

                    <option
                        value="Commercial Litigation"
                        @selected(old('service')==='Commercial Litigation' )>
                        Commercial Litigation
                    </option>

                    <option
                        value="Criminal Litigation"
                        @selected(old('service')==='Criminal Litigation' )>
                        Criminal Litigation
                    </option>

                    <option
                        value="Arbitration & Conciliation"
                        @selected(old('service')==='Arbitration & Conciliation' )>
                        Arbitration &amp; Conciliation
                    </option>

                    <option
                        value="IP Enforcement & Anti Counterfeiting"
                        @selected(old('service')==='IP Enforcement & Anti Counterfeiting' )>
                        IP Enforcement &amp; Anti Counterfeiting
                    </option>
                </select>

                @error('service')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Your Requirement --}}
            <div class="col-12">
                <label
                    for="contact-message"
                    class="form-label">
                    Your Requirement
                    <span class="text-danger">*</span>
                </label>

                <textarea
                    id="contact-message"
                    name="message"
                    class="form-control @error('message') is-invalid @enderror"
                    rows="5"
                    placeholder="Tell us briefly about your requirement"
                    required>{{ old('message') }}</textarea>

                @error('message')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

        </div>
    </div>

    {{-- Form Actions --}}
    <div class="contact-form-actions">

        <button
            type="reset"
            class="contact-reset-btn">
            Clear Form
        </button>

        <button
            type="submit"
            class="contact-submit-btn">
            Submit Enquiry
            <i class="bi bi-send"></i>
        </button>

    </div>
</form>