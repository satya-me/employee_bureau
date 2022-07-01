@extends('layouts.master')

@section('content')
<main class="content-wrapper">
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title card-padding pb-0">Organisation</h6>
                        {{-- <a href="addfraud.html" class="add_btn">Add</a> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hoverable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-left">Name</th>
                                    <th>Mobile No</th>
                                    <th>Aadhaar No</th>
                                    <th>Pan No</th>
                                    <th>Description</th>
                                    <th>Fraud Type</th>
                                    <th>Address</th>
                                    <th>FIR</th>
                                    <th>Letter</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fraud as $k => $v)
                                <tr>
                                    <td>{{ ++$k }}</td>
                                    <td class="text-left">{{ $v->name }}</td>
                                    <td>{{ $v->mobile }}</td>
                                    <td>{{ $v->aadhar }}</td>
                                    <td>{{ $v->pan }}</td>
                                    <td>{{ $v->description }}</td>
                                    <td>{{ $v->type }}</td>
                                    <td>{{ $v->address }}</td>
                                    <td>
                                        <!-- <img src="{{ asset('/') . $v->fir }}" alt="" srcset="" width="50px"> -->
                                        <i class="fa-solid fa-download"></i>
                                    </td>
                                    <td>
                                        <!-- <img src="{{ asset('/') . $v->letter }}" alt="" srcset="" width="50px"> -->
                                        <i class="fa-solid fa-download"></i>
                                    </td>
                                    <td><span class="edit_"><i class="fa-solid fa-pen-to-square"></i></span><i class="fa-solid fa-trash"></i></td>
                                    <!-- <td>6%</td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection