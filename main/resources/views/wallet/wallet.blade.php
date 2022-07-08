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
                            <h5 class="mb-0 ml-2" id="balance-total">0.0</h5>
                        </span>
                        <span class="ln"></span>
                    </div>
                </div>
                <div class=""></div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex">
                    {{-- <a class="col wb_footer" href="#" id="re_wallet">
                        <i class="fa-solid fa-credit-card wf_icons"></i>
                        <p class="">Recharge</p>
                    </a> --}}
                    <a class="col wb_footer" href="javascript:void(0)" data-toggle="modal"
                        data-target=".bd-example-modal-lg">
                        <i class="fa-solid fa-receipt"></i>
                        <p class="">Transaction History</p>
                    </a>
                    <a class="col wb_footer" href="javascript:void(0)">
                        <i class="fa-solid fa-calculator"></i>
                        <p class="">Cost Calculation</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="card text-center">
            {{-- <div class="card-header">
                <h2>Wallet</h2>
            </div> --}}
            <div class="card-body">
                <div class="d-flex jcsa aic">

                    <input type="number" id="points" name="points" step="100" min="100" value="0">
                    <input type="hidden" id="name" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" id="email" name="email" value="{{ Auth::user()->email }}">
                    <input type="hidden" id="phone" name="phone" value="{{ Auth::user()->mobile }}">
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                    @csrf
                    <button id="rzp-button1" class="btn btn-primary">Pay</button>
                    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                    <script>
                        console.log(mainURL)
                        $(document).ready(function() {
                            document.getElementById("points").addEventListener("keydown", e => e.preventDefault());
                            $("#points").change(function() {
                                var amt = $(this).val();
                                var name = $('#name').val();
                                var email = $('#email').val();
                                var mobile = $('#phone').val();
                                var user_id = $('#user_id').val();
                                console.log(name, email, mobile);
                                console.log(amt);
                                var options = {
                                    key: "rzp_test_HQVzoK0uL1YIpQ", // Enter the Key ID generated from the Dashboard
                                    amount: amt *
                                        100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                    currency: "INR",
                                    name: "Employee Bureau",
                                    description: "Account Recharge Amount",
                                    image: "http://localhost/employee_bureau/assets/images/rpg.png",
                                    // order_id: "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                    handler: function(response) {
                                        console.log(response)
                                        // console.log(response.razorpay_payment_id);
                                        // console.log(response.razorpay_order_id);
                                        // console.log(response.razorpay_signature);
                                        $.ajax({
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            type: "POST",
                                            url: mainURL + "/transaction-payment",
                                            dataType: "json",
                                            contentType: "application/json; charset=utf-8",

                                            data: JSON.stringify({
                                                razorpay_payment_id: response.razorpay_payment_id,
                                                amt: amt,
                                                name: name,
                                                email: email,
                                                mobile: mobile,
                                                user_id: user_id,
                                            }),
                                            success: function(result) {
                                                // when call is sucessfull
                                                console.log(result)
                                            },
                                            error: function(err) {
                                                // check the err for error details
                                                console.log(err)
                                            }
                                        }); // ajax call closing
                                    },
                                    prefill: {
                                        name: name,
                                        email: email,
                                        contact: mobile,
                                    },
                                    notes: {
                                        address: "Razorpay Corporate Office",
                                    },
                                    theme: {
                                        color: "#3363cc",
                                    },
                                };
                                var rzp1 = new Razorpay(options);
                                rzp1.on("payment.failed", function(response) {
                                    console.log(response);
                                    // console.log(response.error.code);
                                    // console.log(response.error.description);
                                    // console.log(response.error.source);
                                    // console.log(response.error.step);
                                    // console.log(response.error.reason);
                                    // console.log(response.error.metadata.order_id);
                                    // console.log(response.error.metadata.payment_id);
                                });
                                document.getElementById("rzp-button1").onclick = function(e) {
                                    rzp1.open();
                                    e.preventDefault();
                                };
                            });
                        });
                    </script>
                </div>
                <div class=""></div>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex">

                </div>
            </div>
        </div>
    </main>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Recharge Amount</th>
                            <th scope="col">Transation ID</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($transaction as $k => $item)
                            <tr>
                                <th scope="row">{{ ++$k }}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->amt}}</td>
                                <td>{{$item->razorpay_payment_id}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var intervalId = window.setInterval(function() {
            /// call your function here
            // alert('Please wait...');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                url: mainURL + "/balance/balance",
                success: function(result) {
                    // when call is sucessfull
                    console.log(result.balance);
                    $("#balance-total").text(result.balance);
                },
                error: function(err) {
                    // check the err for error details
                    console.log(err)
                }
            }); // ajax call closing
        }, 5000);
    </script>
@endsection
