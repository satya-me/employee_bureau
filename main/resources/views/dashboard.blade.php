@extends('layouts.master')

@section('content')
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div
                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-4-tablet">
                    <div class="mdc-card info-card info-card--success">
                        <div class="card-inner">
                            <h5 class="card-title">Total Fraud</h5>
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom">{{ App\Models\FraudDB::where('user_id', Auth::user()->id)->count() }}</h5>
                            {{-- <p class="tx-12 text-muted">48% target reached</p> --}}
                            <!-- <div class="card-icon-wrapper">
                                    <i class="material-icons">dvr</i>
                                </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Fraud by location</h4>
                            <div>
                                <i class="material-icons refresh-icon">refresh</i>
                                <i class="material-icons options-icon ml-2">more_vert</i>
                            </div>
                        </div>
                        <div class="d-block d-sm-flex justify-content-between align-items-center">
                            <h5 class="card-sub-title mb-2 mb-sm-0">Sales performance revenue based by
                                country</h5>
                            <div class="menu-button-container">
                                <button
                                    class="mdc-button mdc-menu-button mdc-button--raised button-box-shadow tx-12 text-dark bg-white font-weight-light">
                                    Last 7 days
                                    <i class="material-icons">arrow_drop_down</i>
                                </button>
                                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                        <li class="mdc-list-item" role="menuitem">
                                            <h6 class="item-subject font-weight-normal">Back</h6>
                                        </li>
                                        <li class="mdc-list-item" role="menuitem">
                                            <h6 class="item-subject font-weight-normal">Forward</h6>
                                        </li>
                                        <li class="mdc-list-item" role="menuitem">
                                            <h6 class="item-subject font-weight-normal">Reload</h6>
                                        </li>
                                        <li class="mdc-list-divider"></li>
                                        <li class="mdc-list-item" role="menuitem">
                                            <h6 class="item-subject font-weight-normal">Save As..</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__inner mt-2">
                            
                            <div
                                class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                                <div id="revenue-map" class="revenue-world-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
@endsection
