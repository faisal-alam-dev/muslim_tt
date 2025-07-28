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
                                                <th>Price (with food)</th>
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
                                                    <td><span class="custom_taka">৳</span>{{ $item->package_price_with_food }}</td>
                                                    <td>
                                                        <div class="table_actions">
                                                            <a href="#" class="btn btn-outline-warning view-package-details" data-bs-toggle="modal" data-bs-target="#packageDataModal" data-package="{{ json_encode($item) }}" title="View Package Details">
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
            const button = event.relatedTarget; // Button that triggered the modal
            const packageData = JSON.parse(button.getAttribute('data-package'));

            // Populate modal fields
            document.getElementById('modal-package_name').textContent = packageData.package_name;
            document.getElementById('modal-package_short_description').textContent = stripHtml(packageData.package_short_description);
            document.getElementById('modal-package_long_description').textContent = stripHtml(packageData.package_long_description);
            document.getElementById('modal-package_price_with_food').textContent = packageData.package_price_with_food;
            document.getElementById('modal-package_price_without_food').textContent = packageData.package_price_without_food;
            document.getElementById('modal-package_duration_start').textContent = packageData.package_duration_start;
            document.getElementById('modal-package_duration').textContent = packageData.package_duration;
            document.getElementById('modal-package_hotel_makkah').textContent = packageData.package_hotel_makkah;
            document.getElementById('modal-package_hotel_madinah').textContent = packageData.package_hotel_madinah;
            document.getElementById('modal-package_flights_up').textContent = packageData.package_flights_up;
            document.getElementById('modal-package_flights_down').textContent = packageData.package_flights_down;
            document.getElementById('modal-package_land_transport').textContent = packageData.package_land_transport;
            document.getElementById('modal-package_food').textContent = packageData.package_food;
            document.getElementById('modal-package_special_services').textContent = packageData.package_special_services;
        });

        // Helper function to strip HTML tags
        function stripHtml(html) {
            let doc = new DOMParser().parseFromString(html, 'text/html');
            return doc.body.textContent || "";
        }
    </script>
@endsection
