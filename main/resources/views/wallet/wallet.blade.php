@extends('layouts.master')

@section('content')

    @if (isset($eye))
        {{ json_encode($eye) }}
    @endif
    <style>
        .jcsa {
            justify-content: space-around;
        }

        .walletBg {
            max-width: 450px !important;
        }

        .aic {
            align-items: center !important;
        }

        .fa_wallet {
            font-size: 7rem;
            color: #2381C1;
        }

        .wb_footer {
            color: unset;
        }

        .wb_footer:hover {
            color: rgb(2, 173, 2);
            text-decoration: none;
        }
    </style>
    <main class="content-wrapper p-5">

        <div class="card text-center">
            <div class="card-header">
                <h2>Wallet</h2>
            </div>
            <div class="card-body">
                <div class="d-flex jcsa aic">
                    <i class="fa-solid fa-wallet fa_wallet"></i>
                    <div class="text-center">
                        <h4>Balance</h4>
                        <span class="d-flex aic">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <h5 class="mb-0 ml-2">1200</h5>
                        </span>
                        <span class="ln"></span>
                    </div>
                </div>
                <div class=""></div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex">
                    <a class="col wb_footer" href="#" data-toggle="modal" data-target="#myModal">
                        <i class="fa-solid fa-credit-card wf_icons"></i>
                        <p class="">Recharge</p>
                    </a>
                    <a class="col wb_footer" href="#">
                        <i class="fa-solid fa-receipt"></i>
                        <p class="">Transaction History</p>
                    </a>
                    <a class="col wb_footer" href="#">
                        <i class="fa-solid fa-calculator"></i>
                        <p class="">Cost Calculation</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal fade  come-from-modal right" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4> --}}
                    </div>
                    <div class="modal-body">
                        <div class="card text-end" style="width: auto;">
                            <div class="card-body">
                                <form>
                                    <h5 class="card-title">Add Money to Your Account</h5>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-indian-rupee-sign"></i></span>
                                        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                        <input type="text" class="form-control" value="100" name="money"
                                            id="money" aria-label="Money" aria-describedby="basic-addon1" readonly>
                                    </div>
                                    <div>
                                        <span class="badge rounded-pill bg-light text-dark">
                                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 100</h4>
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark">
                                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 200</h4>
                                        </span>
                                        <span class="badge rounded-pill bg-light text-dark">
                                            <h4><i class="fa-solid fa-indian-rupee-sign"></i> 300</h4>
                                        </span>
                                    </div>
                                    <input type="button" class="btn btn-primary" name="btn" id="btn"
                                        value="Process to add" onclick="pay_now()" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')

@endsection

