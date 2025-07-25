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
                                    <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark"> <i class="fas fa-arrow-left"></i> Back</a>
                                </h4>
                            </div>

                            <div class="card-body">

                                @include('widgets.errors')

                                <form id="form" action="{{ route('agent.package_booking.update') }}" method="post" enctype="multipart/form-data" data-parsley-validate>

                                    <input type="hidden" name="id" value="{{ $agent_package_booking_data->id }}">

                                    @csrf

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Package Type</label>
                                            <select class="form-control select2" id="package_type" name="package_type" required data-selected-type="{{ $agent_package_booking_data->package->package_type }}">
                                                <option value="" disabled selected>Select Package Type</option>
                                                <option value="umrah" {{ $agent_package_booking_data->package->package_type == 'umrah' ? 'selected' : '' }}>Umrah</option>
                                                <option value="hajj" {{ $agent_package_booking_data->package->package_type == 'hajj' ? 'selected' : '' }}>Hajj</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Package Name</label>
                                            <select id="package_name" class="form-control select2" name="package_id" required data-selected-package="{{ $agent_package_booking_data->package->id }}">
                                                <option value="" disabled selected>Select Package Name</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">NID or Password</label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="nid_passport" id="image-upload" accept="image/*,application/pdf,video/*,.doc,.docx,.txt" />
                                                <div class="table_slider_update_image" style="background-image: url({{ asset($agent_package_booking_data->nid_passport) }}); background-size: cover; background-position: center;" id="imageShow"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Customer Name</label>
                                            <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ $agent_package_booking_data->user_name }}" data-parsley-required-message="Usr Name is required*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Customer Phone</label>
                                            <input type="text" class="form-control @error('user_phone') is-invalid @enderror" name="user_phone" value="{{ $agent_package_booking_data->user_phone }}" data-parsley-required-message="User Phone is required*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Customer Email</label>
                                            <input type="email" class="form-control @error('user_email') is-invalid @enderror" name="user_email" value="{{ $agent_package_booking_data->user_email }}" data-parsley-required-message="User Email is required*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Customer Message</label>
                                            <textarea name="user_message" rows="4" class="form-control">{{ $agent_package_booking_data->user_message }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label"></label>
                                            <button class="btn btn-primary">Create</button>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection

@section('footer_script')
    <script>
        $(document).ready(function() {
            function loadPackages(packageType, selectedPackageId = null) {
                // Clear existing options
                $('#package_name').html('<option value="" disabled selected>Select Package Name</option>');
                if (!packageType) {
                    return;
                }

                // Fetch packages by type
                $.ajax({
                    url: "{{ route('agent.package_booking.get.packages.by.type') }}",
                    method: 'GET',
                    data: {
                        package_type: packageType
                    },
                    success: function(packages) {
                        $.each(packages, function(index, pkg) {
                            let selected = (selectedPackageId && pkg.id == selectedPackageId) ? 'selected' : '';
                            $('#package_name').append(
                                `<option value="${pkg.id}" ${selected}>${pkg.package_name}</option>`
                            );
                        });
                        // Trigger change to update select2 if needed
                        $('#package_name').trigger('change');
                    },
                    error: function(xhr) {
                        console.error('Error fetching packages:', xhr);
                        alert('Failed to load packages. Please try again.');
                    }
                });
            }

            // Initial load based on existing data
            const initialPackageType = $('#package_type').data('selected-type');
            const initialPackageId = $('#package_name').data('selected-package');
            loadPackages(initialPackageType, initialPackageId);

            $('#package_type').on('change', function() {
                loadPackages($(this).val());
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#image-upload').change(function(e) {
                $('#imageShow').css('background-image', `url(${URL.createObjectURL(e.target.files[0])})`);
            });
        });
    </script>
@endsection
