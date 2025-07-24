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

                                <form id="form" action="{{ route('agent.package_booking.store') }}" method="post" enctype="multipart/form-data" data-parsley-validate>

                                    @csrf

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Package Type</label>
                                            <select class="form-control select2" id="package_type" name="package_type" required>
                                                <option value="" disabled selected>Select Package Type</option>
                                                <option value="umrah">Umrah</option>
                                                <option value="hajj">Hajj</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">Package Name</label>
                                            <select id="package_name" class="form-control select2" name="package_id" required>
                                                <option value="" disabled selected>Select Package Name</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">NID or Password</label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="nid_passport" id="image-upload" accept="image/*,application/pdf,video/*,.doc,.docx,.txt" data-parsley-required-message="NID or Password is required*" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">User Name</label>
                                            <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" data-parsley-required-message="Usr Name is required*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">User Phone</label>
                                            <input type="text" class="form-control @error('user_phone') is-invalid @enderror" name="user_phone" value="{{ old('user_phone') }}" data-parsley-required-message="User Phone is required*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">User Email</label>
                                            <input type="email" class="form-control @error('user_email') is-invalid @enderror" name="user_email" value="{{ old('user_email') }}" data-parsley-required-message="User Email is required*" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-md-8">
                                            <label class="col-form-label">User Message</label>
                                            <textarea name="user_message" rows="4" class="form-control">{{ old('short_description') }}</textarea>
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
            $('#package_type').on('change', function() {
                let packageType = $(this).val();

                // Clear existing options
                $('#package_name').html('<option value="" disabled selected>Select Package Name</option>');

                // Fetch packages by type
                $.ajax({
                    url: "{{ route('agent.package_booking.get.packages.by.type') }}",
                    method: 'GET',
                    data: {
                        package_type: packageType
                    },
                    success: function(response) {
                        console.log(response);
                        $.each(response, function(index, package) {
                            console.log('name', package.package_name);
                            $('#package_name').append(
                                // `<li>${package.package_name}</li>`
                                `<option value="${package.id}">${package.package_name}</option>`
                            );
                        });
                    },
                    error: function(xhr) {
                        console.error('Error fetching packages:', xhr);
                        alert('Failed to load packages. Please try again.');
                    }
                });
            });
        });
    </script>
@endsection
