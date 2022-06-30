<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
        }

        .imgSide {
            max-width: 300px;
            background-image: linear-gradient(to right,
                    #df6975,
                    #e27372,
                    #e47c6f,
                    #e6866e,
                    #e6906e);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .cardimgUser {
            width: 100px;
            height: 100px;
            border-radius: 100px;
        }

        .social .fa-brands {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #2688f7;
        }

        .jcc {
            justify-content: center;
        }

        .aic {
            align-items: center;
        }
    </style>
</head>


<body>
    <div class="main h-100 d-flex jcc aic">
        <div class="col" style="max-width: 1000px">
            <div class="d-flex jcc">
                <img src="{{ asset('assets/images/main-logo.png') }}" alt="" />
            </div>

            @if (!empty($data))
                <div class="card col p-0 flex-row border-0 shadow">
                    <div class="imgSide col py-5">
                        <img src="{{ asset('assets/images/blur.png') }}" class="cardimgUser mb-5" />
                        <div class="userInfo text-white text-center">
                            <h2>{{ $data->name }}</h2>
                            {{-- <h2 class="mb-4">Web Designer</h2> --}}
                            {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                        </div>
                    </div>
                    <div class="col px-5 py-3">
                        <div>
                            <h4>Information</h4>
                            <hr />
                        </div>
                        <div class="d-flex">
                            <div class="col-4">
                                <h4>Phone</h4>
                                <h4 class="text-muted">{{ $data->mobile }}</h4>
                            </div>
                            <div class="col-4">
                                <h4>Pan</h4>
                                <h4 class="text-muted">{{ $data->pan }}</h4>
                            </div>
                            <div class="col-4">
                                <h4>Aadhar</h4>
                                <h4 class="text-muted">{{ $data->aadhar }}</h4>
                            </div>
                        </div>
                        {{-- <div class="mt-4">
                        <h4>Description</h4>
                        <hr>
                        <p>{{$data->description}}</p>
                        <hr />
                    </div> --}}
                        <hr>
                        <div class="d-flex">
                            <div class="col-6">
                                <h4>Description</h4>
                                <h4 class="text-muted">{{ $data->description }}</h4>
                            </div>
                            <div class="col-6">
                                <h4>Address</h4>
                                <h4 class="text-muted">{{ $data->address }}</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-6">
                                <h4>Fraud Type</h4>
                                <h4 class="text-muted">{{ $data->type }}</h4>
                            </div>
                            <div class="col-6">
                                <h4>Organization</h4>
                                <h4 class="text-muted">{{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                        <div class="social mt-3">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            @else
                <div class="card col p-0 flex-row border-0 shadow">
                    <div class="imgSide col py-5">
                        <img src="{{ asset('assets/images/blur.png') }}" class="cardimgUser mb-5" />
                        <div class="userInfo text-white text-center">
                            <h2>XXXXXX XXXXX  XXXXX</h2>
                        </div>
                    </div>
                    <div class="col px-5 py-3">
                        <div>
                            <h4>This person have no fraud history, Good Selection</h4>
                            <hr />
                        </div>
                        <div class="d-flex">
                            <div class="col-4">
                                <h4>Phone</h4>
                                <h4 class="text-muted">+91-XXXXXXXXXX</h4>
                            </div>
                            <div class="col-4">
                                <h4>Pan</h4>
                                <h4 class="text-muted">DNQXXXXXXX</h4>
                            </div>
                            <div class="col-4">
                                <h4>Aadhar</h4>
                                <h4 class="text-muted">XXXX XXXX XXXX</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-6">
                                <h4>Description</h4>
                                <h4 class="text-muted">No fruad history found</h4>
                            </div>
                            <div class="col-6">
                                <h4>Address</h4>
                                <h4 class="text-muted">XXXXXXXXX</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-6">
                                <h4>Fraud Type</h4>
                                <h4 class="text-muted">No fraud sofar</h4>
                            </div>
                            <div class="col-6">
                                <h4>Organization</h4>
                                <h4 class="text-muted">XXXXXXXX</h4>
                            </div>
                        </div>
                        <div class="social mt-3">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
