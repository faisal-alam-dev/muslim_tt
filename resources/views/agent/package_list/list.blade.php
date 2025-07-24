@extends('agent.dashboard')

@section('agent_title', $title)

@section('agent_content')

    <div class="main-content">

        <section class="section">

            <div class="section-body">

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <h4>{{ $title }}</h4>
                                <h4>
                                    <a href="{{ URL::previous() }}" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Back</a>
                                </h4>
                            </div>

                            <div class="card-body">

                                @include('widgets.errors')
                                @include('widgets.success')

                                <div class="table-responsive">

                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($packages as $key => $item)
                                                <tr>
                                                    <td>{{ $packages->count() - $key }}</td>
                                                    <td>
                                                        <div class="table_slider_list_image" style="background-image: url({{ asset($item->package_image) }});"></div>
                                                    </td>
                                                    <td>{{ $item->package_name }}</td>
                                                    <td>
                                                        <div class="badges">
                                                            @if ($item->package_type == 'umrah')
                                                                <span class="badge badge-info">Umrah</span>
                                                            @elseif ($item->package_type == 'hajj')
                                                                <span class="badge badge-dark">Hajj</span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="badges">
                                                            @if ($item->package_status == 'active')
                                                                <span class="badge badge-success">Active</span>
                                                            @elseif ($item->package_status == 'inactive')
                                                                <span class="badge badge-danger">Inactive</span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_actions">
                                                            <a href="#" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#packageDataModal" data-package_image="{{ asset($item->package_image) }}" data-package_name="{{ $item->package_name }}" data-package_short_description="{{ strip_tags($item->package_short_description) }}" data-package_long_description="{{ strip_tags($item->package_long_description) }}" data-package_price_with_food="{{ $item->package_price_with_food }}" data-package_price_without_food="{{ $item->package_price_without_food }}" data-package_duration_start="{{ $item->package_duration_start }}" data-package_duration="{{ $item->package_duration }}" data-package_hotel_makkah="{{ $item->package_hotel_makkah }}" data-package_hotel_madinah="{{ $item->package_hotel_madinah }}" data-package_flights_up="{{ $item->package_flights_up }}" data-package_flights_down="{{ $item->package_flights_down }}" data-package_land_transport="{{ $item->package_land_transport }}" data-package_food="{{ $item->package_food }}" data-package_special_services="{{ $item->package_special_services }}" data-package_type="{{ $item->package_type }}" data-package_status="{{ $item->package_status }}" title="View Package Details">
                                                                <i class="fas fa-eye"></i> View Details
                                                            </a>
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

        </section>

    </div>

    <!-- User Data Modal -->
    <div class="modal fade" id="packageDataModal" tabindex="-1" aria-labelledby="packageDataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body mt-4">
                    <div>
                        <h6>Image:</h6>
                        <img id="modal-package_image" src="" alt="Package Image" class="img-fluid mb-3">
                    </div>
                    <div>
                        <h6>Name:</h6>
                        <p id="modal-package_name"></p>
                    </div>
                    <div>
                        <h6>Short Description:</h6>
                        <p id="modal-package_short_description"></p>
                    </div>
                    <div>
                        <h6>Long Description:</h6>
                        <p id="modal-package_long_description"></p>
                    </div>
                    <div>
                        <h6>Price (with food):</h6>
                        <p id="modal-package_price_with_food"></p>
                    </div>
                    <div>
                        <h6>Price (without food):</h6>
                        <p id="modal-package_price_without_food"></p>
                    </div>
                    <div>
                        <h6>Duration Start:</h6>
                        <p id="modal-package_duration_start"></p>
                    </div>
                    <div>
                        <h6>Duration:</h6>
                        <p id="modal-package_duration"></p>
                    </div>
                    <div>
                        <h6>Hotel Makkah:</h6>
                        <p id="modal-package_hotel_makkah"></p>
                    </div>
                    <div>
                        <h6>Hotel Madinah:</h6>
                        <p id="modal-package_hotel_madinah"></p>
                    </div>
                    <div>
                        <h6>Flights Up:</h6>
                        <p id="modal-package_flights_up"></p>
                    </div>
                    <div>
                        <h6>Flights Down:</h6>
                        <p id="modal-package_flights_down"></p>
                    </div>
                    <div>
                        <h6>Land Transport:</h6>
                        <p id="modal-package_land_transport"></p>
                    </div>
                    <div>
                        <h6>Food:</h6>
                        <p id="modal-package_food"></p>
                    </div>
                    <div>
                        <h6>Special Services:</h6>
                        <p id="modal-package_special_services"></p>
                    </div>
                    <div>
                        <h6>Type:</h6>
                        <p id="modal-package_type"></p>
                    </div>
                    <div>
                        <h6>Status:</h6>
                        <p id="modal-package_status"></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_script')
    <script>
        var packageDataModal = document.getElementById('packageDataModal');
        packageDataModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            const button = event.relatedTarget;

            // Define an array of data attributes and their corresponding modal element IDs
            const dataAttributes = [
                'package_image', 'package_name', 'package_short_description', 'package_long_description',
                'package_price_with_food', 'package_price_without_food', 'package_duration_start',
                'package_duration', 'package_hotel_makkah', 'package_hotel_madinah',
                'package_flights_up', 'package_flights_down', 'package_land_transport',
                'package_food', 'package_special_services', 'package_type', 'package_status'
            ];

            dataAttributes.forEach(attr => {
                const value = button.getAttribute(`data-${attr}`);
                const element = packageDataModal.querySelector(`#modal-${attr}`);
                if (element) {
                    if (attr === 'package_image') {
                        element.src = value;
                    } else {
                        element.textContent = value;
                    }
                }
            });
        });
    </script>
@endsection
