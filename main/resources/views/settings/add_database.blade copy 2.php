@extends('layouts.master')

@section('content')
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Add Database</h6>
                        <form action="{{ route('add_database') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="template-demo">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="name" type="text"
                                                name="name" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="name" class="mdc-floating-label">Name</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            {{-- <i class="material-icons mdc-text-field__icon">favorite</i> --}}
                                            <input class="mdc-text-field__input" id="mobile" type="text"
                                                name="mobile" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="mobile" class="mdc-floating-label">Mobile</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="aadhar" type="text"
                                                name="aadhar" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="aadhar" class="mdc-floating-label">Aadhar</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="pan" type="text"
                                                name="pan" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="pan" class="mdc-floating-label">PAN</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            {{-- <input class="mdc-text-field__input" id="text-field-hero-input" type="text"
                                                name="company_name"> --}}
                                            <textarea class="mdc-text-field__input" id="description" name="description" required></textarea>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="description" class="mdc-floating-label">Description</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            {{-- <input class="mdc-text-field__input" id="text-field-hero-input" type="text"
                                                name="company_name"> --}}
                                            <select class="mdc-text-field__input" name="typeof" required id="typeof">
                                                <option value="" selected disabled></option>
                                                <option value="1">Money Related Frauds</option>
                                                <option value="2">Integrity Related Frauds</option>
                                                <option value="3">Function Related Angels Money Package</option>
                                                <option value="4">Money Package Related</option>
                                                <option value="5">Money Package Related</option>
                                                <option value="6">Duel Employement Alert</option>
                                            </select>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="typeof" class="mdc-floating-label">Type of
                                                        fraud</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mt-5">
                                        <div class="mdc-text-field mdc-text-field--outlined input_height">
                                            {{-- <input class="mdc-text-field__input" id="text-field-hero-input"> --}}
                                            <textarea class="mdc-text-field__input" id="address" name="address" required></textarea>
                                            <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch" style="">
                                                    <label for="address" class="mdc-floating-label"
                                                        style="">Address</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="fir" type="file"
                                                name="fir" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="fir" class="mdc-floating-label">Upload
                                                        Fir Copy</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" id="letter" type="file"
                                                name="letter" required>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="letter" class="mdc-floating-label">Upload
                                                        Letter Head Copy</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="mdc-button mdc-button--raised">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
