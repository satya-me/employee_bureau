@extends('admin.layouts.master')

@section('content')
    <main class="content-wrapper">

        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Add Organization</h6>
                        <form action="{{ route('admin.add_organization') }}" method="post">
                            @csrf
                            <div class="template-demo">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="text-field-hero-input" type="text"
                                                name="company_name" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Company
                                                        Name</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="text-field-hero-input" type="text"
                                                name="contact_no" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Contact
                                                        No</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            {{-- <i class="material-icons mdc-text-field__icon">favorite</i> --}}
                                            <input class="mdc-text-field__input" id="text-field-hero-input" type="text"
                                                name="mobile" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input"
                                                        class="mdc-floating-label">Mobile</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined ">
                                            {{-- <i class="material-icons mdc-text-field__icon">visibility</i> --}}
                                            <input class="mdc-text-field__input" id="text-field-hero-input" type="email"
                                                name="email" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input"
                                                        class="mdc-floating-label">Email</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined ">
                                            {{-- <i class="material-icons mdc-text-field__icon">visibility</i> --}}
                                            <input class="mdc-text-field__input" id="address" type="text"
                                                name="address" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="address"
                                                        class="mdc-floating-label">Address</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="mdc-button mdc-button--raised">
                                    SAVE
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script>
        
    </script>
@endsection
