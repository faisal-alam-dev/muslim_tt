@extends('agent.dashboard')

@section('agent_title', 'Agent Dashboard')

@section('agent_content')

    <style>
        .custom_dashboard_title {
            color: var(--bs-body-color);
        }
    </style>

    <div class="main-content">

        {{-- Card Area --}}
        <section class="section">

            <div class="row ">

                {{-- Packages --}}
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-20"><a href="{{ route('agent.package.list') }}" class="custom_dashboard_title">Packages</a></h5>
                                            <h2 class="mb-3 font-18">{{ $packages->count() }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('/backend/assets/img/banner/1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pending Package Booking --}}
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-20"><a href="#!" class="custom_dashboard_title">Pending Package Booking</a></h5>
                                            <h2 class="mb-3 font-18">{{ $package_booking_pending->count() }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('/backend/assets/img/banner/about_us.svg') }}" style="width: 140px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Confirmed Package Booking --}}
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-20"><a href="#!" class="custom_dashboard_title">Confirmed Package Booking</a></h5>
                                            <h2 class="mb-3 font-18">{{ $package_booking_confirmed->count() }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('/backend/assets/img/banner/our_team.svg') }}" style="width: 140px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        {{-- Package Booking List Table --}}
        <section class="section">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <h4>Agent Package Booking List</h4>
                                <h4>
                                    <a href="{{ route('agent.package_booking.list') }}" class="btn btn-outline-success"><i class="fas fa-eye"></i> View All</a>
                                </h4>
                            </div>

                            <div class="card-body">

                                @include('widgets.errors')
                                @include('widgets.success')

                                <div class="table-responsive">

                                    <div style="overflow-x: auto;">

                                        <table class="table table-striped table-hover" id="" style="width:100%; white-space: nowrap;">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Phone</th>
                                                    <th>Package Name</th>
                                                    <th>Package Type</th>
                                                    {{-- <th>NID or Passport</th> --}}
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($agent_package_booking_list as $key => $item)
                                                    <tr>
                                                        <td>#</td>
                                                        <td>{{ $item->user_name }}</td>
                                                        <td>{{ $item->user_phone }}</td>
                                                        <td>{{ $item->package->package_name }}</td>
                                                        <td>
                                                            <div class="badges">
                                                                @if ($item->package->package_type == 'umrah')
                                                                    <span class="badge badge-info">Umrah</span>
                                                                @elseif ($item->package->package_type == 'hajj')
                                                                    <span class="badge badge-dark">Hajj</span>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        {{-- <td>
                                                            @if ($item->nid_passport)
                                                                <a href="{{ asset($item->nid_passport) }}" target="_blank" class="btn btn-outline-info">
                                                                    <i class="fas fa-file"></i> View File
                                                                </a>
                                                            @else
                                                                <span class="text-muted">No File</span>
                                                            @endif
                                                        </td> --}}
                                                        <td>
                                                            <div class="badges">
                                                                @if ($item->status == 'pending')
                                                                    <span class="badge badge-warning">Pending</span>
                                                                @elseif ($item->status == 'confirmed')
                                                                    <span class="badge badge-success">Confirmed</span>
                                                                @elseif ($item->status == 'cancelled')
                                                                    <span class="badge badge-danger">Cancelled</span>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection
