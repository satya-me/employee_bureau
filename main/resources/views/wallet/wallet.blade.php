@extends('layouts.master')

@section('content')
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <div class="mdc-card p-0">
                        <div class="d-flex justify-content-between">
                            {{-- <h6 class="card-title card-padding pb-0">Organisation</h6> --}}
                            {{-- <a href="addfraud.html" class="add_btn">Add</a> --}}
                        </div>
                        <div class="table-responsive">
                            @if (isset($eye))
                                {{ json_encode($eye) }}
                            @endif
                            <h1>My Wallet </h1>
                            <form action="{{ route('recharge') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <input type="submit" value="+Add Money">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
