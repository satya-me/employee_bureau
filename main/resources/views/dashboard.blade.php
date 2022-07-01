@extends('layouts.master')

@section('content')
<main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="dashboard_panel">
            <div class="d-flex jcc aic mb-3 text-muted">
                <h4 class="" style="color: #454647">Enter Aadhar Number to Search Fraud</h4>
            </div>
            <div class="searchDashboard">
                <i class="material-icons mdc-text-field__icon">search</i>
                <form action="{{ url('aadhar/search') }}" method="post" id="aadhar_search_form" class="col">
                    @csrf
                    <input class="form-control" name="aadhar_search" id="text-field-hero-input" value="">
                    <input class="t" type="submit" value="Search" style="display: none">
                </form>
            </div>

            <div class="mt-3 mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                    <div class="d-flex justify-content-between">
                        <div></div>
                        <div>
                            <i class="material-icons refresh-icon">refresh</i>
                            <i class="material-icons options-icon ml-2">more_vert</i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="info-card info-card--success pr w-50 d-flex aic flex-column">
                            <!-- <img src="http://localhost/employee_bureau/assets/images/fraud.png" alt="" class="fraudBg"> -->
                            <div class="card-inner text-center z99 totalFraud">
                                <h1 class="card-title">Total Fraud</h1>
                                <h1 class="font-weight-bold pb-2 mb-1">{{ App\Models\FraudDB::where('user_id', Auth::user()->id)->count() }}</h1>

                            </div>
                        </div>
                        <div class="w-50">
                            <div class="d-block d-sm-flex justify-content-between align-items-center">

                                <div>
                                    <h4 class="card-title mb-0">Fraud by location</h4>
                                    <h5 class="card-sub-title mb-2 mb-sm-0">Sales performance revenue based by
                                        country</h5>
                                </div>
                                <div class="menu-button-container">
                                    <button class="mdc-button mdc-menu-button mdc-button--raised button-box-shadow tx-12 text-dark bg-white font-weight-light">
                                        Todays
                                        <i class="material-icons">arrow_drop_down</i>
                                    </button>
                                    <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                                        <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal">Last 1 month</h6>
                                            </li>
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal">Last 15 days</h6>
                                            </li>
                                            <li class="mdc-list-item" role="menuitem">
                                                <h6 class="item-subject font-weight-normal">Last 7 days</h6>
                                            </li>
                                            <!-- <li class="mdc-list-divider"></li>
                                    <li class="mdc-list-item" role="menuitem">
                                        <h6 class="item-subject font-weight-normal">Save As..</h6>
                                    </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mdc-layout-grid__inner mt-2">
                                <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                                    <div id="revenue-map" class="revenue-world-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection