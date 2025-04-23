@extends('backend.admin.master')

@section('admin_title', $title)

@section('admin_content')

    <div class="main-content">

        <section class="section">

            <div class="section-body">

                @include('widgets.errors')

                <form id="form" action="{{ route('admin.package.store') }}" method="post" enctype="multipart/form-data" data-parsley-validate>

                    @csrf

                    <div class="row">

                        <div class="col-12">

                            <div class="card">

                                <div class="card-header d-flex justify-content-between">
                                    <h4>{{ $title }}</h4>
                                    <h4>
                                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-dark">
                                            <i class="fas fa-arrow-left"></i> Back
                                        </a>
                                    </h4>
                                </div>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="form-group row ">

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Image [810px by 504px]</label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="package_image" id="image-upload" required data-parsley-required-message="Image is required*" />
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Name</label>
                                            <input type="text" class="form-control @error('package_name') is-invalid @enderror" name="package_name" value="{{ old('package_name') }}" required data-parsley-required-message="Name is required*">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Name Slug</label>
                                            <input type="text" class="form-control @error('package_name_slug ') is-invalid @enderror" name="package_name_slug" value="{{ old('package_name_slug') }}" required data-parsley-required-message="Slug is required*">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Short Description</label>
                                            <textarea name="package_short_description" rows="4" class="form-control @error('package_short_description') is-invalid @enderror" required data-parsley-required-message="Short Description is required*">{{ old('package_short_description') }}</textarea>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Long Description</label>
                                            <textarea class="summernote" name="package_long_description" required data-parsley-required-message="Long Description is required*">{{ old('package_long_description') }}</textarea>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Type</label>
                                            <select class="form-control selectric" name="package_type" required data-parsley-required-message="Type is required*">
                                                <option value="" disabled selected>- Select Package Type -</option>
                                                <option value="umrah" {{ old('package_type') == 'umrah' ? 'selected' : '' }}>Umrah</option>
                                                <option value="hajj" {{ old('package_type') == 'hajj' ? 'selected' : '' }}>Hajj</option>
                                            </select>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="form-group row">

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Price (with food)</label>
                                            <input type="text" class="form-control" name="package_price_with_food" value="{{ old('package_price_with_food') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Price (without food)</label>
                                            <input type="text" class="form-control @error('package_price_without_food') is-invalid @enderror" name="package_price_without_food" value="{{ old('package_price_without_food') }}" required data-parsley-required-message="Price is required*">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Duration Start</label>
                                            <input type="text" class="form-control" name="package_duration_start" value="{{ old('package_duration_start') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Duration</label>
                                            <input type="text" class="form-control" name="package_duration" value="{{ old('package_duration') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Hotel Makkah</label>
                                            <input type="text" class="form-control" name="package_hotel_makkah" value="{{ old('package_hotel_makkah') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Hotel Madinah</label>
                                            <input type="text" class="form-control" name="package_hotel_madinah" value="{{ old('package_hotel_madinah') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Flights Up</label>
                                            <input type="text" class="form-control" name="package_flights_up" value="{{ old('package_flights_up') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Flights Down</label>
                                            <input type="text" class="form-control" name="package_flights_down" value="{{ old('package_flights_down') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Land Transport</label>
                                            <input type="text" class="form-control" name="package_land_transport" value="{{ old('package_land_transport') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Food</label>
                                            <input type="text" class="form-control" name="package_food" value="{{ old('package_food') }}">
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <label class="col-form-label">Package Special Services</label>
                                            <input type="text" class="form-control" name="package_special_services" value="{{ old('package_special_services') }}">
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 mb-4">
                            <label class="col-form-label"></label>
                            <button class="btn btn-primary">Create</button>
                        </div>

                    </div>

                </form>

            </div>

        </section>
    </div>

@endsection
