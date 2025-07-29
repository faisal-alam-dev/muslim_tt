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
                                    <a href="{{ route('admin.slider.add') }}" class="btn btn-outline-primary" alt="Add Item" title="Add Item"><i class="fas fa-plus"></i> Add</a>
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
                                                <th>Title</th>
                                                <th>Short Description</th>
                                                <th>Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($sliders as $key => $item)
                                                <tr>
                                                    <td>{{ $sliders->count() - $key }}</td>
                                                    <td>
                                                        <div class="table_slider_list_image" style="background-image: url({{ asset($item->slider_image) }});"></div>
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->short_description }}</td>
                                                    <td>{{ $item->link }}</td>
                                                    <td>
                                                        <div class="badges">
                                                            @if ($item->status == 'active')
                                                                <span class="badge badge-success">Active</span>
                                                            @elseif ($item->status == 'inactive')
                                                                <span class="badge badge-danger">Inactive</span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table_actions d-flex gap-2">
                                                            {{-- Status Update --}}
                                                            <a href="#" class="btn btn-outline-secondary statusBtn" data-bs-toggle="modal" data-bs-target="#statusUpdateModal" data-id="{{ $item->id }}" alt="Update Status" title="Update Status">
                                                                <i class="fa-solid fa-rotate"></i>
                                                            </a>
                                                            {{-- Edit --}}
                                                            <a href="{{ route('admin.slider.edit', $item->id) }}" class="btn btn-outline-warning" alt="Edit Item" title="Edit Item">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            {{-- Delete --}}
                                                            <a href="#!" class="btn btn-outline-danger" data-del="{{ route('admin.slider.delete', $item->id) }}" data-bs-toggle="modal" data-bs-target="#slider_delete_modal" data-id="{{ $item->id }}" data-name="{{ $item->title }}" alt="Delete Item" title="Delete Item">
                                                                <i class="far fa-trash-alt"></i>
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

    <!-- Status Update Modal -->
    <div class="modal fade" id="statusUpdateModal" tabindex="-1" aria-labelledby="statusUpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="statusUpdateModalLabel">Update Booking Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="packageStatusForm" action="{{ route('admin.slider.status.update') }}" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="package_id">
                        <div class="form-group">
                            <label for="status_select">Status</label>
                            <select class="form-control selectric" name="status" id="status_select">
                                <option value="" disabled selected>- SELECT STATUS -</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    <div class="modal fade" id="slider_delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel"></h3>
                </div>
                <div class="modal-body">
                    <h5> Are you sure you want to delete this Slider List?</h5>
                </div>
                <div class="modal-footer" style="justify-content: space-between">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="" id="final_delete" class="btn btn-outline-danger">Confirm Delete</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End: Delete Modal --}}

@endsection

@section('footer_script')
    {{-- Status Update Modal Logic --}}
    <script>
        var statusUpdateModal = document.getElementById('statusUpdateModal');
        statusUpdateModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const packageId = button.getAttribute('data-id');
            document.getElementById('package_id').value = packageId;
        });
    </script>

    {{-- Delete Modal Logic --}}
    <script>
        $('#slider_delete_modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-title').html('Delete <span class="text-danger">' + name + '</span>');
            $('#final_delete').attr('href', button.attr('data-del'))
        })
    </script>
@endsection
