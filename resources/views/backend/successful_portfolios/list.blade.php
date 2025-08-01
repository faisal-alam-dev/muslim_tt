@extends('backend.admin.master')

@section('admin_title', $title)

@section('admin_content')

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
                                                <th>PDF Thumbnail Image</th>
                                                <th>PDF File</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($successful_portfolios as $key => $item)
                                                <tr>
                                                    <td>
                                                        <div class="table_slider_list_image" style="background-image: url({{ asset($item->pdf_image) }});width: 80px;height: 100px;"></div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ asset($item->pdf_file) }}" target="_blank">
                                                            <div class="table_slider_list_image" style="background-image: url({{ asset('pdf_icon.png') }}); width: 80px;height: 100px;"></div>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="table_actions">
                                                            <a href="{{ route('admin.successful_portfolios.edit', $item->id) }}" class="btn btn-outline-primary" alt="Edit" title="Edit"><i class="far fa-edit"></i></a>
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

@endsection
